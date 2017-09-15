/**
 * MIM Advertising - Video
 *
 * Events currently adhere to the VAST 2.0 spec, except those that are not needed. (fullscreen, mute, etc.)
 *
 * The following Javascript (Not VAST) events are available on the video element for external script hooks:
 *
 * mim-advertising-video-preroll-started - When a video impression is available, and playback is about to begin.
 * mim-advertising-video-preroll-finished - When the video ad has finished playing, either at the end of the video, or if the user skipped it.
 * mim-advertising-video-preroll-not-served - When a video ad was requested but not available due to targeting, rate limiting or an error.
 *
 * Example hook: $('#video-element').on('mim-advertising-video-preroll-finished', function() {...});
 * Ensure these hooks are made before a video ad is requested.
 *
 * impression object
 * =================
 *
 * id: 8345,
 * vendor_id: 3,
 * creative_id: 341,
 * is_clickable: 0,
 * ad_playing_message: "Your video will begin shortly",
 * video_skip_point: "firstQuartile",
 * video_prevent_refresh_skip: 1
 * videos: [
 *   {
 *     id: 15361,
 *     mime: 'video/mp4',
 *     bitrate: 2000,
 *     width: 300,
 *     height: 200
 *   },
 *   {
 *     id: 15352,
 *     mime: 'video/mp4',
 *     bitrate: 2000,
 *     width: 300,
 *     height: 200
 *   }
 * ]
 *
 */

if(typeof mim == 'undefined') {
    mim = {};
}

if(typeof mim.advertising == 'undefined') {
    mim.advertising = {};
}

if(typeof mim.advertising.video == 'undefined') {
    mim.advertising.video = {};
}

mim.advertising.video.preroll = {

    trackerUrl: '/advertising-tracker.ajax.php',
    clickUrl: '/advertising-click?impression=[ID]',
    debug: false,
    playCheckerInterval: null,
    playCheckerLastStopTime: 0,

    /**
     * Plays a preroll video ad before the original video of $videoPlayer
     *
     * @param $videoPlayer JQuery selector of a HTML5 <video> element
     * @param $adTag The unique ad tag identifier
     * @param vastXml The impression VAST XML
     */
    serve: function ($videoPlayer, impression, tag) {

        // If we don't have an impression, or the creative has already been fully viewed (complete), do nothing
        if(!impression || $videoPlayer.data('mim_advertising_video_preroll_complete')) {
            return;
        }

        // If this ad is already playing, do nothing. If previously partially played and now paused, just resume it. (Fixes issues with closing/opening modals)
        if($videoPlayer.data('mim_advertising_video_preroll_playing')) {
            if($videoPlayer.get(0).paused) {
                $videoPlayer[0].play();
            }
            return;
        }

        // Flag as playing
        $videoPlayer.data('mim_advertising_video_preroll_playing', true);

        var $caption;
        var $clickThrough = null;

        // Check if we already have our advertising elements (happens if a modal is closed and re-opened)
        if($('#mim-advertising-video-wrapper').length) {

            $caption = $('#mim-advertising-video-caption');
            $clickThrough = $('#mim-advertising-video-clickthrough');

            $caption.show();

            // Show the click through element, if it exists
            if($clickThrough) {
                $clickThrough.show();
            }

        } else {

            // Create Wrapper DIV
            $wrapper = $("<div>")
                .attr('id', 'mim-advertising-video-wrapper')
                .css('position', 'relative')
                .css('background', 'black')
                .insertBefore($videoPlayer);

            // Move the video player inside the wrapper
            $videoPlayer.appendTo($wrapper);

            // Create caption div
            $caption = $("<div id='mim-advertising-video-caption' style='padding: 8px; text-align: center; color: white'></div>")
            .css('opacity', 0)
            .html(impression.ad_playing_message)
            .appendTo($wrapper);

            // Add click-through element
            if(impression.is_clickable) {
                $clickThrough = $("<a>")
                    .attr('id', 'mim-advertising-video-clickthrough')
                    .attr('href', '#')
                    .css('position', 'absolute')
                    .css('top', 0)
                    .css('bottom', 0)
                    .css('left', 0)
                    .css('right', 0)
                    .appendTo($wrapper);

                $clickThrough.one('click.mim_advertising_video_preroll', function() {
                    mim.advertising.video.preroll.clickEvent(impression, tag);

                    return false;
                });
            }
        }

        // Play the video ad file
        mim.advertising.video.preroll.play($videoPlayer, impression);

    },

    play: function ($videoPlayer, impression) {

        // Hide the video player to prevent DOM resizing
        //$videoPlayer[0].pause();
        $videoPlayer.hide();

        // Remove fixed height so we keep the same container width
        $videoPlayer.css('height', 'auto')
            .css('display', 'block');

        // Play inline on iOS devices to make sure video controls are hidden while ad is playing
        $videoPlayer.attr('playsinline', true);
        $videoPlayer.attr('webkit-playsinline', true);

        // Add .mim_advertising_video_preroll_playing CSS class (used to apply -webkit pseudo classes in advertising.css)
        $videoPlayer.addClass('mim_advertising_video_preroll_playing');

        // Remove controls
        $videoPlayer.removeAttr('controls');

        // Disable right-clicking
        $videoPlayer.on('contextmenu.mim_advertising_video_preroll', function() {
            return false;
        });

        // Keep original sources for restoring when ad has finished playing
        $videoPlayer.data('mim-advertising-originalSourcesHtml', $videoPlayer.html());

        // Remove original sources
        $videoPlayer.html('');

        $.each(impression.videos, function(i, video) {
            // At the moment we only support HTML 5 video (MP4 and WebM)
            var videoUrl = mim.advertising.video.preroll.getVideoUrl(impression, video);

            var $source = $("<source>");
            $source.attr("src", videoUrl);
            $source.attr("type", video.mime);
            $videoPlayer.append($source);
        });

        $videoPlayer
            .one('loadeddata.mim_advertising_video_preroll', function() {

                // Show the video player
                $videoPlayer.show();

                // Play the ad video
                $videoPlayer[0].play();

                // Fire the impression event
                mim.advertising.video.preroll.trackEvent.impression(impression);
            })
            .one('play.mim_advertising_video_preroll', function() {
                // Fire the start event
                mim.advertising.video.preroll.trackEvent.start($videoPlayer, impression);
            })
            .on('timeupdate.mim_advertising_video_preroll', function() {
                mim.advertising.video.preroll.trackEvent.timeUpdate($videoPlayer, impression);
            })
            .one('ended.mim_advertising_video_preroll', function() {

                // Fire the 'complete' tracking event
                mim.advertising.video.preroll.trackEvent.complete($videoPlayer, impression);

                // Clean up
                mim.advertising.video.preroll.cleanUp($videoPlayer);
            });

        // Bind ad pause function
        $videoPlayer.on('pause.mim_advertising_video_preroll', function() {
            // Fix browser issue where pause event is fired at end of playback
            if($videoPlayer[0].currentTime == $videoPlayer[0].duration) {
                return;
            }

            $videoPlayer.data('mim_advertising_video_preroll_was_paused', true);

            // Report the pause event
            mim.advertising.video.preroll.sendTrackingEvent(impression, 'pause');
        });

        // Bind ad resume function (make sure this is bound after the initial play() event)
        $videoPlayer.on('play.mim_advertising_video_preroll', function() {

            // If the video hasn't been paused before, this is the initial play event (start) so do nothing
            if(!$videoPlayer.data('mim_advertising_video_preroll_was_paused')) {
                return;
            }

            // Report the resume event
            mim.advertising.video.preroll.sendTrackingEvent(impression, 'resume');
        });

        // If user is using an iPhone with iOS version 8 or 9, we need some magic
        if(mim.advertising.video.preroll.isIos8or9()) {

            var lowestBitrateMp4 = mim.advertising.video.preroll.getLowestBitrateMp4(impression);
            var forcedInlineVideoSource = mim.advertising.video.preroll.getVideoUrl(impression, lowestBitrateMp4);

            $videoPlayer.attr('src', forcedInlineVideoSource);
            $videoPlayer[0].load(); // Reload the source

            enableInlineVideo($videoPlayer[0]);

            $videoPlayer[0].play(); // Play fails on MIM iOS 9 test devices, but it may work on earlier iOS versions
        } else {
            $videoPlayer[0].load(); // Reload the source (fixes various browser issues)
            $videoPlayer[0].play();
        }

        // Trigger non-namespaced event for external script use
        $videoPlayer.trigger('mim-advertising-video-preroll-started');

        // Create playChecker interval
        setTimeout(function() {
            mim.advertising.video.preroll.playCheckerInterval = setInterval(function () {
                mim.advertising.video.preroll.playChecker($videoPlayer);
            }, 250);
        }, 1000);

    },

    getVideoUrl: function(impression, video) {
        var extension = video.mime == 'video/mp4' ? 'mp4' : 'webm';

        return '/usec/' + impression.vendor_id + '/' + impression.creative_id + '/' + video.id + '.' + extension;
    },

    // Check if the ad is playing. If not, show a play button. Fixes Apple video autoplay security model issues
    playChecker: function($videoPlayer) {

        var currentTime = $videoPlayer[0].currentTime;

        // If the video has progressed since the last check, remove the play button and do nothing more
        if(currentTime > mim.advertising.video.preroll.playCheckerLastStopTime) {
            mim.advertising.video.preroll.playCheckerLastStopTime = currentTime;

            if(mim.advertising.video.preroll.playCheckerButton) {
                mim.advertising.video.preroll.playCheckerButton.hide();
                mim.advertising.video.preroll.playCheckerButton = null;
            }

            // Restore caption
            $videoPlayer.parent().find('#mim-advertising-video-caption').animate({ opacity: 1 });

            return;
        }

        // Update the LastStopTime to the current video time
        mim.advertising.video.preroll.playCheckerLastStopTime = currentTime;

        // If the play button is already created, do nothing more
        if(mim.advertising.video.preroll.playCheckerButton) {
            return;
        }

        // Create the play button
        var $playButtonWrapper = $("<div>")
            .css('position', 'absolute')
            .css('background-color', 'rgba(0,0,0,0.5)')
            .css('top', 0)
            .css('left', 0)
            .css('width', '100%')
            .css('height', '100%');

        $("<div>")
            .css('width', 0)
            .css('height', 0)
            .css('border-top', '60px solid transparent')
            .css('border-bottom', '60px solid transparent')
            .css('border-left', '90px solid white')
            .css('top', '50%')
            .css('position', 'absolute')
            .css('left', '50%')
            .css('margin-left', '-45px')
            .css('margin-top', '-60px')
            .appendTo($playButtonWrapper);

        $playButtonWrapper.one('click', function() {
            $videoPlayer[0].play();
            $playButtonWrapper.remove();
        });

        $playButtonWrapper.appendTo($videoPlayer.parent());

        // Remove caption
        $videoPlayer.parent().find('#mim-advertising-video-caption').animate({ opacity: 0 });


        mim.advertising.video.preroll.playCheckerButton = $playButtonWrapper;

    },

    isIos8or9: function() {
        var ios8or9 = typeof document === 'object' && 'object-fit' in document.head.style && !matchMedia('(-webkit-video-playable-inline)').matches;

        if(!ios8or9) {
            return false;
        }

        if(!(/iPhone|iPod/).test(navigator.userAgent)) {
            return false;
        }

        return true;
    },

    /* Fallback for low-end devices */
    getLowestBitrateMp4: function(impression) {
        var lowestBitrate = 0;
        var lowestBitrateVideo = null;

        $.each(impression.videos, function(i, video) {
            if(video.mime == 'video/mp4' && (lowestBitrate == 0 || lowestBitrate > 0 && video.bitrate < lowestBitrate)) {
                lowestBitrate = video.bitrate;
                lowestBitrateVideo = video;
            }
        });

        if(!lowestBitrateVideo) {
            return false;
        }

        return lowestBitrateVideo;
    },

    trackEvent: {

        impression: function(impression) {
            mim.advertising.video.preroll.sendTrackingEvent(impression, 'impression');
        },

        start: function($videoPlayer, impression) {
            mim.advertising.video.preroll.sendTrackingEvent(impression, 'start');

            if(impression.video_skip_point == 'start') {
                mim.advertising.video.preroll.showSkipButton($videoPlayer, impression);
            }
        },

        complete: function($videoPlayer, impression) {
            mim.advertising.video.preroll.sendTrackingEvent(impression, 'complete');

            if(impression.video_skip_point == 'complete') {
                mim.advertising.video.preroll.showSkipButton($videoPlayer, impression);
            }
        },

        timeUpdate: function($videoPlayer, impression) {
            var currentTime = Math.floor($videoPlayer[0].currentTime);
            var duration = $videoPlayer[0].duration;

            // FirstQuartile
            if(mim.advertising.video.preroll.trackedEvents.firstQuartile == false && currentTime == Math.floor(duration * 0.25)) {
                mim.advertising.video.preroll.trackedEvents.firstQuartile = true;

                mim.advertising.video.preroll.sendTrackingEvent(impression, 'firstQuartile');

                if(impression.video_skip_point == 'firstQuartile') {
                    mim.advertising.video.preroll.showSkipButton($videoPlayer, impression);
                }
            }

            // Midpoint
            if(mim.advertising.video.preroll.trackedEvents.midpoint == false && currentTime == Math.floor(duration * 0.5)) {
                mim.advertising.video.preroll.trackedEvents.midpoint = true;

                mim.advertising.video.preroll.sendTrackingEvent(impression, 'midpoint');

                if(impression.video_skip_point == 'midpoint') {
                    mim.advertising.video.preroll.showSkipButton($videoPlayer, impression);
                }
            }

            // thirdQuartile
            if(mim.advertising.video.preroll.trackedEvents.thirdQuartile == false && currentTime == Math.floor(duration * 0.75)) {
                mim.advertising.video.preroll.trackedEvents.thirdQuartile = true;

                mim.advertising.video.preroll.sendTrackingEvent(impression, 'thirdQuartile');

                if(impression.video_skip_point == 'thirdQuartile') {
                    mim.advertising.video.preroll.showSkipButton($videoPlayer, impression);
                }
            }
        }

    },

    trackedEvents: {
        firstQuartile: false,
        midpoint: false,
        thirdQuartile: false
    },

    clickEvent: function(impression, tag) {
        var clickUrl = mim.advertising.video.preroll.clickUrl
            .replace('[ID]', impression.id);

        window.location = clickUrl;
    },

    sendTrackingEvent: function(impression, event) {
        if(mim.advertising.video.preroll.debug) {
            console.log('[MIM] [Advertising] ' + event + ' event fired');
        }

        var trackerUrl = mim.advertising.video.preroll.trackerUrl;		
				
        $.post(trackerUrl, {
            id: impression.id,
            contentType: mim.advertising.misc.contentType, 
            contentId: mim.advertising.misc.contentId, 
            event: event
        });
    },

    showSkipButton: function($videoPlayer, impression) {
        $skipButton = $("<a class='mim-advertising-video-skip'>")
            .css("font-size", "16px")
            .css("font-weight", "bold")
            .css("text-decoration", "none")
            .css("padding", "2px 10px")
            .css("margin", "5px 7px")
            .css("border", "1px solid white")
            .css("color", "white")
            .css("position", "absolute")
            .css("right", 0)
            .css("bottom", 0)
            .attr("href", "#")
            .html('Skip Ad <span class="glyphicon glyphicon-step-forward" aria-hidden="true"></span>')
            .click(function() {
                mim.advertising.video.preroll.cleanUp($videoPlayer);
            })
            .hide()
            .appendTo($videoPlayer.parent())
            .fadeIn(600);
    },

    cleanUp: function($videoPlayer) {

        $videoPlayer[0].pause();

        // Remove the playTrackerInterval
        clearInterval(mim.advertising.video.preroll.playCheckerInterval);

        // Hide the click through element, if it exists
        $clickThrough = $('#mim-advertising-video-clickthrough');
        if($clickThrough) {
            $clickThrough.hide();
        }

        // Hide the caption
        $caption = $('#mim-advertising-video-caption');
        $caption.hide();

        // Hide skip, if it exists
        $('.mim-advertising-video-skip').hide();

        $videoPlayer
            // Flag as ended
            .data('mim_advertising_video_preroll_complete', true)

            // Remove playing flag
            .data('mim_advertising_video_preroll_playing', false)

            // Unbind all events (especially important for pause/resume once ad has finished playing)
            .off('.mim_advertising_video_preroll')

            // Hide the video player to prevent DOM resizing
            .hide()

            // Restore controls, and remove forced inline playing
            .attr('controls', 'controls')
            .removeAttr('playsinline')
            .removeAttr('webkit-playsinline')

            // Remove .mim_advertising_video_preroll_playing CSS class (used to apply -webkit pseudo classes in advertising.css)
            .removeClass('mim_advertising_video_preroll_playing')

            // Remove impression ad sources
            .removeAttr("src"); // Used by iPhone iOS 8 and 9 fix

        $videoPlayer.find("source").remove(); // Used by iPhone iOS 8 and 9 fix

        // Restore original sources
        $videoPlayer.html($videoPlayer.data('mim-advertising-originalSourcesHtml'));

        // Reinitialise video element sources
        $videoPlayer[0].load();

        // Show the video player
        $videoPlayer.show();

        // Play the original video
        $videoPlayer[0].play();

        // Reset video element display to inline-block. This fixes padding issues. (HTML 5 video defaults back to display: inline)
        $videoPlayer.css('display', 'block');

        // Trigger non-namespaced event for external script use
        $videoPlayer.triggerHandler('mim-advertising-video-preroll-finished');
    }
};
