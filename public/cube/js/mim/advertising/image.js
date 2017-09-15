/**
 * MIM Advertising - Images (Banners)
 */

if(typeof mim == 'undefined') {
    mim = {};
}

if(typeof mim.advertising == 'undefined') {
    mim.advertising = {};
}

if(typeof mim.advertising.image == 'undefined') {
    mim.advertising.image = {};
}

mim.advertising.image = {

    trackerUrl: '/advertising-tracker.ajax.php',
    clickUrl: '/advertising-click?creative=[CREATIVE_ID]',
    currentPageImpressions: {},
    debug: false,

    init: function () {

        var tagFriendlyNames = [];
        var $positions = {};
        var positionsMetadata = {};

        // Get image positions
        $('div[data-mim-advertising-tag]').each(function() {

            // Get the position
            var $position = $(this);
            var tagFriendlyName = $position.data('mim-advertising-tag');

            tagFriendlyNames.add(tagFriendlyName);
            $positions[tagFriendlyName] = $position;

        });

        function loadImageAds() {
            $.each(mim.advertising.image.currentPageImpressions, function(tagFriendlyName, impression) {
                if(impression) {

                    var $position = $positions[tagFriendlyName];
                    var positionDimensions = getPositionDimensions($position);

                    if(mim.advertising.image.debug) {
                        console.log(tagFriendlyName);
                        console.log(positionDimensions);
                    }

                    var oldImageId = $position.data('mim-advertising-image-id');
                    var newImageId = null;

                    // Insert the best fitting ad
                    $.each(impression.images, function (i, image) {

                        if(image.width <= positionDimensions.width && image.height <= positionDimensions.height) {
                            var creativeImageSource = '/images/' + impression.vendor_id + '/advert_' + image.id + '.' + image.file_extension;

                            if($position.data('mim-advertising-image-id') == image.id) {
                                return false;
                            }
                            $position.empty();
                            var $ad = $("<a>")
                                .attr('href', '/advertising-click?impression=' + impression.id + '&contentType=' + mim.advertising.misc.contentType + '&contentId=' + mim.advertising.misc.contentId);

                            $("<img>")
                                .attr('src', creativeImageSource)
                                .css('width', image.width + 'px')
                                .css('height', image.height + 'px')
                                .appendTo($ad);

                            $position
                                .data('mim-advertising-image-id', image.id)
                                .addClass('mim-advertising mim-advertising-image')
                                .css('text-align', 'center')
                                .append($ad);

                            return false;
                        }

                    });

                }
            });
        };

        function getPositionDimensions($position) {
            var availableWidth;
            var parentWidth = $position.parent().innerWidth();
            var maxPositionWidth = $position.data('mim-advertising-max-width') ? $position.data('mim-advertising-max-width') : 9999;

            if(maxPositionWidth < parentWidth) {
                availableWidth = maxPositionWidth;
            } else {
                availableWidth = parentWidth;
            }

            var availableHeight = $position.data('mim-advertising-max-height') ? $position.data('mim-advertising-max-height') : 9999;

            return {
                width: availableWidth,
                height: availableHeight
            };
        };
        
        // Get the impression metadata for all tags
        $.post('/advertising-serve.ajax.php', {
            contentType: mim.content.type,
            contentId: mim.content.id,
            positions: tagFriendlyNames
        }, function(response) {
	         mim.advertising.misc = response.misc;
            $.each(response.impressions, function(tagFriendlyName, impression) {
                mim.advertising.image.currentPageImpressions[tagFriendlyName] = impression;
            });

            loadImageAds();
        }, 'json');

        $(window).on('resize', function() {
            loadImageAds();
        });

    }

};

$(function () {
    mim.advertising.image.init();
});
