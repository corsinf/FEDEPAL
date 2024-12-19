function animatedslider_pluginAppObj_17_06() {
    var pluginAppObj_17_06Swiper,
        fullWidth = false,
        resizeTimer; // Set resizeTimer to empty so it resets on page load

    x5engine.boot.push(function(){
           
        resizeAnimatedSwiper_pluginAppObj_17_06();
        loadSwiper();
    
		var pluginAppObj_17_06_resizeTo = null,
		pluginAppObj_17_06_width = 0;
		x5engine.utils.onElementResize(document.getElementById('pluginAppObj_17_06'), function (rect, target) {
			if (pluginAppObj_17_06_width == rect.width) {
				return;
			}
			pluginAppObj_17_06_width = rect.width;
			if (!!pluginAppObj_17_06_resizeTo) {
				clearTimeout(pluginAppObj_17_06_resizeTo);
			}
			pluginAppObj_17_06_resizeTo = setTimeout(function() {
				pluginAppObj_17_06Swiper.destroy(true);
				resizeAnimatedSwiper_pluginAppObj_17_06();
				loadSwiper();
			}, 50);
		});

    
    
    });

    function resizeAnimatedSwiper_pluginAppObj_17_06(){
        
        var container_width = $("#pluginAppObj_17_06").width();
        var heightUI = 1440;
        var widthUI  = 2560;
        var height = heightUI;
        var width = widthUI;
        var max_width = container_width;
        var controls_padding = 0
        var pagination_padding = 0 
        
        if (!fullWidth || false) {
            //obj in the bp ceil
            max_width = (container_width < width ? container_width : width);
            height = ((max_width - controls_padding) / width) * height;
                        
            width = max_width - controls_padding;
            $("#swiper_pluginAppObj_17_06").css({"width": max_width,"height": height + pagination_padding});
        }
        else {
            //obj fullwidth
            if (max_width > widthUI) {
                height = heightUI;
            }
            else {
                height = ((max_width - controls_padding) / widthUI) * height;
            }
            
            width = container_width - controls_padding;
            $("#swiper_pluginAppObj_17_06").css({"height": height + pagination_padding});
        }
            
        $("#pluginAppObj_17_06 .swiper-container.main").css({"width": width,"height": height});
        $("#pluginAppObj_17_06 .swiper-button-next, #pluginAppObj_17_06 .swiper-button-prev").css({"top": height/2});
    }

    function loadSwiper(){
    
        pluginAppObj_17_06Swiper = new Swiper('#pluginAppObj_17_06 .swiper-container.main', {
        freeMode:            false,
        speed:               1000,
        loop:                true,
        direction:           'horizontal',
        roundLengths:        true,
        autoplay:            3000,
            autoplayDisableOnInteraction: false,
            pagination:          '#pluginAppObj_17_06 .swiper-pagination',
            paginationClickable: true,
            nextButton:          '#pluginAppObj_17_06 .swiper-button-next',
            prevButton:          '#pluginAppObj_17_06 .swiper-button-prev',
            effect:              getBestEffect('cube'),
            cube:                {slideShadows: false, shadow: false},
 
        });
    }

    function isIE(){
        return navigator.userAgent.indexOf('MSIE') !== -1 || navigator.appVersion.indexOf('Trident/') > 0;
    }

    function getBestEffect(effect){
        if(effect == 'none')
            return 'fade';
        

        if(isIE()){
            if (['cube', 'stack'].indexOf(effect) >= 0)
                return 'fade'
        }

        return effect;
    }

}