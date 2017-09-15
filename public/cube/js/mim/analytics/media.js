if(typeof mim.analytics == 'undefined') {
    mim.analytics = {};
}

if(typeof mim.analytics.media == 'undefined') {
    mim.analytics.media = {};
}

if(typeof mim.analytics.media.tracking == 'undefined') {
    mim.analytics.media.tracking = {};
}

mim.analytics.media.tracking.trackerUrl = '/log-media.ajax.php';
mim.analytics.media.tracking.debug = false;

mim.analytics.media.tracking.track = function($mediaPlayer, node_id) {

    // If we're already tracking this media element, or we've already reported the play event, do nothing
    if($mediaPlayer.data('mim_analytics_media_tracking') || $mediaPlayer.data('mim_analytics_media_tracking_play_tracked')) {
        return;
    }

    // Flag this media element as tracking initialised
    $mediaPlayer.data('mim_analytics_media_tracking', true);

    // Bind the play tracking event
    $mediaPlayer.on('play.mim_analytics_media_track', function() {

        // Check if this media element is currently playing a preroll video ad (if so, don't log playback yet)
        if($mediaPlayer.data('mim_advertising_video_preroll_playing')) {
            if(mim.analytics.media.tracking.debug) {
                console.log('[MIM] [Analytics] Video ad is playing, ignoring media playback tracking event');
            }
        } else {
            if(mim.analytics.media.tracking.debug) {
                console.log('[MIM] [Analytics] Media playback tracked');
            }

            // Flag the play event as tracked
            $mediaPlayer.data('mim_analytics_media_tracking_play_tracked');

            // Unbind the events
            $mediaPlayer.off('.mim_analytics_media_track');

            // Report the play event via a POST AJAX request
            $.post(mim.analytics.media.tracking.trackerUrl, {
                node_id: node_id
            });
        }

    });

}