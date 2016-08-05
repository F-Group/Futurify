(function ($) {
    $(document).ready(function() {
        $site.init();
        $('.masonry-case').isotope({
          itemSelector: '.grid-item',
          percentPosition: true,
          masonry: {
            // use outer width of grid-sizer for columnWidth
            columnWidth: '.grid-sizer'
          }
        })
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
                scrollBar: true,
                css3: true,
                scrollingSpeed: 800,
                navigation: true,
                navigationPosition: 'right',
                normalScrollElements: '.home-footer',
                fitToSection: false,

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
                $(".menu-mobile").removeClass('open');
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
            var $owl = $(".owl-carousel");
            $owl.owlCarousel({
                  autoPlay: true, //Set AutoPlay to 3 seconds
                  items : 3,
                  autoplay:true,
                  autoplayTimeout:3000,
                  autoplayHoverPause:true ,
                  loop : true,
                  //navContainer : 'navContainerClass',
                  responsive : {
                      768 : {
                          items : 3
                      },
                      0 : {
                          items : 1
                      }
                  },
                  pagination:false,
                  // nav : true
              });

            // Custom Navigation Events
            $owl.trigger('play.owl.autoplay',[3000]);
             $(".next").click(function(){
                 $owl.trigger('next.owl.carousel');
              });
              $(".prev").click(function(){
                  $owl.trigger('prev.owl.carousel');
              });
            $('[data-spy="scroll"]').each(function(){
                $(this).scrollspy('refresh');
            });
        }

    };
})(jQuery);


