(function ($) {
    $(document).ready(function() {
        $site.init();
    });

    var $site = {
        init: function () {
            this._initHomePage();
            this._initGMap();
        },

        _initHomePage: function() {
            $('#homePage').fullpage({
                verticalCentered: false,
                scrollBar: true,
                css3: true,
                scrollingSpeed: 800,
                navigation: true,
                navigationPosition: 'right',
                normalScrollElements: '.home-introduction',
                /*scrollOverflow: true,
                scrollOverflowOptions: {
                    scrollbars: true,
                    mouseWheel: true,
                    hideScrollbars: false,
                    fadeScrollbars: false,
                    disableMouse: true
                },*/

                afterLoad: function(){
                    try {
                        $(this).find('video').get(0).play();
                    }
                    catch (e){}
                }
            });
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
                var $map = $("#gMap");
                var zoom_level = parseFloat($map.attr("data-zoom"));
                var option = {
                    zoom: zoom_level ? zoom_level : 16,
                    scrollwheel: false,
                    center: getLocation.call($map[0])
                };


                var map = new google.maps.Map($map[0], option);
                addMarker(option.center, map);
            }

            // check if exists
            if(typeof google != 'undefined'){
                google.maps.event.addDomListener(window, 'load', initMap);
            }
        }

    };

})(jQuery);