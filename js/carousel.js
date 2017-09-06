

                        $(document).ready(function() {
                            $("#news-slider").owlCarousel({
                                items : 3,
                                itemsDesktop:[1199,3],
                                itemsDesktopSmall:[980,2],
                                itemsMobile : [550,1],
                                navigation:true,
                                navigationText:["",""],
                                autoPlay:true
                            });
                        });

                        var setMinHeight = function(minheight = 0) {
  jQuery('.owl-carousel').each(function(i,e){
    var oldminheight = minheight;
    jQuery(e).find('.owl-item').each(function(i,e){
      minheight = jQuery(e).height() > minheight ? jQuery(e).height() : minheight;    
    });
    jQuery(e).find('.owl-item').css("min-height",minheight + "px");
    minheight = oldminheight;
  });
};

setMinHeight();
                    
