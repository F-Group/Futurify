(function ($) {
    $(document).ready(function() {
        $site.init();
    });

    var $site = {
        init: function () {
            this._initGMap();
        },


        _initGMap: function () {
            function addMarker(location, map) {
                // Add the marker at the clicked location, and add the next-available label
                // from the array of alphabetical characters.
                new google.maps.Marker({
                    position: location,
                    //label: labels[labelIndex++ % labels.length],
                    map: map
                });
                //inforbunle
                new google.maps.InfoWindow({
                    disableAutoPan: true
                });
            }

            function getLocation() {
                return {
                    lat: parseFloat($(this).attr("data-lat")),
                    lng : parseFloat($(this).attr("data-lng"))
                };
            }

            function initMap() {
                var option = {
                    zoom: 12,
                    scrollwheel: false,
                    center: getLocation.call($("#gMap")[0])
                };


                var map = new google.maps.Map($("#gMap")[0], option);
                addMarker(option.center, map);
            }

            // check if exists
            if(typeof google != 'undefined'){
                google.maps.event.addDomListener(window, 'load', initMap);
            }
        }

    };

})(jQuery);