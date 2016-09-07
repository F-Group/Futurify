(function ($) {
    $(document).ready(function() {
        $site.init();
        var $grid = $('.masonry-case').isotope({
          itemSelector: '.grid-item',
          percentPosition: true,
          masonry: {
            // use outer width of grid-sizer for columnWidth
            columnWidth: '.grid-sizer'
          }
        });

        try {
            $grid && $grid.imagesLoaded().progress( function() {
                $grid.isotope('layout');
            });
        } catch(e){}
    });

    var $site = {
        init: function () {
            this._initHomePage();
            this._initGMap();
            this._initSlide();
            this._initAboutPage();
            this._initProjectDetail();
            this._initContactPage();
            this._initLoadMore();
        },
        _initLoadMore : function () {
            var $loadBtn = $('#btn-project-more'),
                $loadSpin = $('#loader'),
                $loadmore =  $('#loadmore'),
                $offset = $loadmore.data('offset'),
                $max = $loadmore.data('max');
            if ($offset >= $max) {
                $loadmore.hide();
            }
                $loadmore.click(function() {
                if ($loadSpin.is(":visible")) {
                    return;
                }
                var $new_offset = $loadmore.data('offset');
                $loadBtn.hide();
                $loadSpin.show();
                $.ajax({
                    url: ajaxurl,
                    data: {
                        'action' : 'get_portfolio',
                        'offset' : $new_offset
                    },
                    success:function(data) {
                        var $new = $(data);
                        $new.css("display", "none");
                        $('#load-more-project').before($new);
                        //$(data).fadeIn("slow");
                        $new.fadeIn('slow');
                        $loadBtn.show();
                        $loadSpin.hide();
                        if ($new_offset >= $max || $new.length < 3) {
                            $loadmore.hide();
                        }
                        $loadmore.data('offset',$new_offset + 3);
                    }
                });

                return false;
            });  
        },    
        _initHomePage: function() {
            $(".section").click(function () {
                var videoNode = $(this).find('video');

                try {
                    videoNode.length && videoNode[0].play();
                } catch(e){}

            });

            $('#homePage').fullpage({
                verticalCentered: false,
                scrollBar: false,
                css3: true,
                scrollingSpeed: 800,
                navigation: true,
                navigationPosition: 'right',
                normalScrollElements: '.home-footer',
                fitToSection: false,
                scrollOverflow: true,
                scrollOverflowOptions: {
                    scrollbars: true,
                    mouseWheel: true,
                    hideScrollbars: false,
                    fadeScrollbars: false,
                    disableMouse: true
                },

                afterLoad: function(){
                    try {
                        $(this).trigger('click');
                    }
                    catch (e){}

                    $(this).css({zIndex: 1});

                    if($(this).hasClass("home-introduction")) {
                        $(".header").css({background: '#fff'});
                    } else {
                        $(".header").css({background: ''});
                    }
                },

                onLeave: function () {
                    $(this).css({zIndex: -1});
                }
            });

            $(window).load(function() {
                // Animate loader off screen
                $('#preloader').fadeOut('slow');
                $('body').css({
                    'overflow': 'visible'
                });
            });

            $(document).on("scroll",function(){
                $(".menu-mobile").removeClass('open');
                if($(document).scrollTop()>1){
                    $("header").addClass("header-stick");
                } else{
                    $("header").removeClass("header-stick");
                }
            });

            $(".menu-item-has-children").click(function (e) {
                if(this.firstChild == e.target)
                    e.preventDefault();
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
            var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);

            var isDraggable = w > 767 ? true : false;


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
                    draggable: isDraggable,
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
                   //Set AutoPlay to 3 seconds
                  items : 3,
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
            //$owl.trigger('play.owl.autoplay',[3000]);
             $(".next").click(function(){
                 $owl.trigger('next.owl.carousel');
              });
              $(".prev").click(function(){
                  $owl.trigger('prev.owl.carousel');
              });
            // $('[data-spy="scroll"]').each(function(){
            //     $(this).scrollspy('refresh');
            // });
            $("a[rel='m_PageScroll2id']").mPageScroll2id({
                scrollSpeed: 500,
                offset : 100
            });
        },

        _initProjectDetail: function () {
            var $imgGroup = $(".imgList");
            $imgGroup.each(function () {
                try {
                    var imgList = $(this).find("img").removeAttr("width height");
                    var parentNode = $(this).parent().find(".masonry-case");
                    var item = $("<div class='grid-item'></div>");
                    imgList.each(function () {
                        parentNode.append(item.clone().html(this));
                    });
                } catch(e){}
            });

            setTimeout(function () {
                $(window).trigger("resize");
            }, 5000);
        },

        _initContactPage: function() {
            var submitInput = $(".wpcf7-form .wpcf7-submit");
            var submitBtn = $("<button type='submit'></button>");

            if(submitInput.length) {
                submitBtn.attr("class", submitInput.attr("class"));
                submitBtn.text(submitInput.attr("value"));
                submitBtn.addClass("hvr-ripple-out");
            }

            submitBtn.insertAfter(submitInput);
            submitInput.remove();
        }
    };
})(jQuery);


