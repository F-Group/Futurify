(function ($) {
    $(document).ready(function() {
        $site.init();
    });

    var $site = {
        init: function () {
            this._initHomePage();
            this._initGMap();
            this._initSlide();
        },

        _initHomePage: function() {
            $('#homePage').fullpage({
                verticalCentered: false,
                // scrollBar: true,
                css3: true,
                scrollingSpeed: 800,
                navigation: true,
                navigationPosition: 'right',
                normalScrollElements: '.home-footer',
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

            $(document).on("scroll",function(){
                if($(document).scrollTop()>1){
                    $("header").addClass("header-stick");
                } else{
                    $("header").removeClass("header-stick");
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
        },

        _initSlide: function(){
              $("#owl-project").owlCarousel({
                  autoPlay: 3000, //Set AutoPlay to 3 seconds
                  items : 3,
                  itemsDesktop : [1199,3],
                  itemsTablet : [767,1],
                  pagination:false,
              });              // Custom Navigation Events
              $(".next").click(function(){
                owl.trigger('owl.next');
              })
              $(".prev").click(function(){
                owl.trigger('owl.prev');
              })
        }

    };

})(jQuery);