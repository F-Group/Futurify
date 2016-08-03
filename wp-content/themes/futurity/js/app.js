(function ($) {
    $(document).ready(function() {
        $site.init();
        /* Masonry news */
        $masonry_news = $('.masonry-case');
        /*init masonry news after all image have been loaded */
        $masonry_news.imagesLoaded(function () {
            $masonry_news.masonry({
                itemSelector: '.grid-item',
                /*get gutter-sizer (add horizontal space) in css*/
                percentPosition: true,
                resize: true,
                columnWidth: '.grid-item',
            });
        });
        jQuery(window).resize(function () {
            // $site.init();
            /*init masonry news after all image have been loaded */
            $masonry_news.imagesLoaded(function () {
                $masonry_news.masonry({
                    itemSelector: '.grid-item',
                    columnWidth: '.grid-sizer',
                    /*get gutter-sizer (add horizontal space) in css*/
                    gutter: '.gutter-sizer',
                    percentPosition: true,
                    resize: true
                });
            });
        });
    });

    var $site = {
        init: function () {
            this._initHomePage();
            this._initGMap();
            this._initSlide();
            this._initAboutPage();
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

                afterLoad: function(){
                    try {
                        var videoNode = $(this).find('video');
                        videoNode.length && videoNode.get(0).play();
                    }
                    catch (e){}

                    $(this).css({zIndex: 1});
                },

                onLeave: function () {
                    $(this).css({zIndex: -1});
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

        _initAboutPage: function() {
            $(".team-content").hover(function() {
                $(this).addClass("hover");
            }, function() {
                $(this).removeClass("hover");
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
              });
              $(".prev").click(function(){
                owl.trigger('owl.prev');
              })
            $('[data-spy="scroll"]').each(function(){
                var $spy = $(this).scrollspy('refresh');
            });
        }

    };
})(jQuery);


