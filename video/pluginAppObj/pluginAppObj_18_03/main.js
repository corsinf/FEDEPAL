function youtubegallery_pluginAppObj_18_03() {
    
    var pluginAppObj_18_03YouTubeGallery,
    divContainer = $("#youtubegallery_pluginAppObj_18_03"),
    preview,
    lengthList = 0,
    animation = "",
    fullWidth = false,
    resizeTimer, // Set resizeTimer to empty so it resets on page load
    res = ["/maxresdefault.jpg", "/hqdefault.jpg", "/mqdefault.jpg", "/sddefault.jpg"]; 
    
    function getImagePreview(url, id, i) {
        callLinkResolution(url, id, res[i], i);
    }
    
    function callLinkResolution(url, id, resI, i) {
        var _url = url + id + resI; 
        var tmpClass = id + "_" + i + "_tmp";
        var img = $("<img class='" + tmpClass + "' style='visibility: hidden; opacity: 0'/>");
        
        img.one("load", function () {
            
            $("#youtubegallery_pluginAppObj_18_03 div.swiper-slide-active").append(img);
            var widthImg = img.width();
            var heightImg = img.height();
            $("#youtubegallery_pluginAppObj_18_03 div.swiper-slide-active ." + tmpClass).remove();
            
            if( widthImg == 120 && heightImg == 90){
                if(i < 3){
                    getImagePreview(url, id, i + 1);
                }
                else{
                    setBackgroundImage("https://img.youtube.com/vi/", id); 
                }
            }
            else{
                setBackgroundImage(_url,id);
            }
            
        });

        img.attr("src", _url);   
    }
    
    function getImageOnLine(id){
        
            $.ajax({
                url: 'pluginAppObj/pluginAppObj_18_03/lib.php?action=getThumb',
                type: 'POST',
                data: { 
                    'id': id,  
                },
                dataType: "json"
            })
            .fail(function () {
                setBackgroundImage("https://img.youtube.com/vi/", id); 
            })
            .done(function (data) {
                if (data == "") {
                    setBackgroundImage("https://img.youtube.com/vi/", id); 
                } else {
                    setBackgroundImage(data,id); 
                }
            });
    }
    
    function setBackgroundImage(_url,id){   
        $('#youtubegallery_pluginAppObj_18_03 div.swiper-slide[data-video="'+id+'"]').css('background-image', 'url(' + _url + ')');
        $('#youtubegallery_pluginAppObj_18_03 div.swiper-slide[data-video="'+id+'"] > .imLoadAnim').remove();  
    }
    
    function youTubeParser(url) {
        var regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*/;
        var match = url.match(regExp);
        return (match && match[7].length == 11) ? match[7] : false;
    }

    function getThumbUrlYouTube(url) {

        var thumb = "https://img.youtube.com/vi/";
        var id = youTubeParser(url);
        
        if("online" == "online" ){
           return getImageOnLine(id);
        }
        else{
            return getImagePreview(thumb, id,  0); 
        }
    }
    
    x5engine.boot.push(function(){ preview = false;
        
    		var pluginAppObj_18_03_resizeTo = null,
		pluginAppObj_18_03_firstTime = true,
		pluginAppObj_18_03_width = 0;
		x5engine.utils.onElementResize(document.getElementById('pluginAppObj_18_03'), function (rect, target) {
			if (pluginAppObj_18_03_width == rect.width) {
				return;
			}
			pluginAppObj_18_03_width = rect.width;
			if (!!pluginAppObj_18_03_resizeTo) {
				clearTimeout(pluginAppObj_18_03_resizeTo);
			}
			pluginAppObj_18_03_resizeTo = setTimeout(function() {
			if (!pluginAppObj_18_03_firstTime) {
				$('#pluginAppObj_18_03').css('overflow-x', 'hidden');
				load();
			}
		pluginAppObj_18_03_firstTime = false;
			}, 50);
		});
   
        
    function load() {
        resizeYouTubeGallery_pluginAppObj_18_03();
        pluginAppObj_18_03YouTubeGallery.update();
        pluginAppObj_18_03YouTubeGallery.slideTo(0, 1, null);
    }  
    
    function loadHtml() {
        if(!preview){      
            animation = x5engine.settings.imLoadingAnimation;

            lengthList = 2;
            var showValue = "mouse_over";

            var links = "https://www.youtube.com/watch?v=GTN79rOS6V4||https://www.youtube.com/watch?v=KCD5RK94n7s||";
            var arrLinks = links.substring(0,links.length - 2).split("||");

            html = "<div class='swiper-container main'>";

            html += "<div class='swiper-wrapper'>";
            for (var i = 0; i < lengthList; i++){

                getThumbUrlYouTube(arrLinks[i]);

                var icon_play = "";
                if(showValue != "never"){
                    icon_play = "<yt-icon id=\"play\" icon=\"play_all\" class=\"fade-in\"><svg viewBox=\"0 0 24 24\" preserveAspectRatio=\"xMidYMid meet\" focusable=\"false\" class=\"yt-icon\"><g class=\"yt-icon\"><path d=\"M8 5v14l11-7z\" class=\"yt-icon\"></path></g></svg></yt-icon>";
                }

                var slide = "<div class='swiper-slide' data-video='" + youTubeParser(arrLinks[i]) + "'>\n";
                slide += icon_play+"\n";
                slide += "</div>\n";

                html += slide;
            }
            html += "</div>"; //Closing swiper wrapper

            if("inside" == "inside" ){
                html += "<div class='swiper-button-prev'></div>";
                html += "<div class='swiper-button-next'></div>";

                if("bullets" != "none" ){
                    html += "<div class='swiper-pagination'></div>";
                }
            }

            if(true){      
                html += "<div class='swiper-scrollbar'></div>";
            }

            html += "</div>"; //Closing swiper container

            if("inside" == "outside" ){
                html += "<div class='swiper-button-prev'></div>";
                html += "<div class='swiper-button-next'></div>";

                if("bullets" != "none" ){
                    html += "<div class='swiper-pagination'></div>";
                }
            }

            $(divContainer).append(html);
            $("#youtubegallery_pluginAppObj_18_03 div.swiper-slide").append(animation);
        
            $('#youtubegallery_pluginAppObj_18_03 .swiper-slide').on("click", function () {
        
                var url = "https://www.youtube.com/watch?v=" + $(this).attr('data-video');

                if(false) {
                    var win = window.open(url, '_blank');
                }
                else {    
                    x5engine.imShowBox({
                        media: [
                            {
                                url: url,
                                width: 1280,
                                height: 720,
                                type: "youtube"
                            }
                        ]
                    }, 0, $('#youtubegallery_pluginAppObj_18_03'));
                }    
            });
        }  
    }  
        
    loadHtml();   
    resizeYouTubeGallery_pluginAppObj_18_03();
    loadYouTubeGallery();

});

    function resizeYouTubeGallery_pluginAppObj_18_03(){  
        var container_width = $("#pluginAppObj_18_03").width();
        var heightUI = 720;
        var widthUI  = 1280;
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
            $("#youtubegallery_pluginAppObj_18_03").css({"width": max_width,"height": height + pagination_padding});
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
            $("#youtubegallery_pluginAppObj_18_03").css({"width": width,"height": height + pagination_padding});
        }
            
        $("#pluginAppObj_18_03 .swiper-container.main").css({"width": width,"height": height});
        $("#pluginAppObj_18_03 .swiper-button-next, #pluginAppObj_18_03 .swiper-button-prev").css({"top": height/2});    
            
    
        $("#pluginAppObj_18_03 .swiper-container.thumbs").css({"width": width});

        $("#youtubegallery_pluginAppObj_18_03").css({"width": max_width,"height": height + pagination_padding});
            
        if(1 > 1){
            var customHeight =  (height - 0)/1; 
            $("#youtubegallery_pluginAppObj_18_03 .swiper-container.main .swiper-slide").css("height", customHeight);
        }
        else{
            $("#youtubegallery_pluginAppObj_18_03 .swiper-container.main .slide-content").css("height", height);
        }
    }

    function loadYouTubeGallery() {
        pluginAppObj_18_03YouTubeGallery = new Swiper('#pluginAppObj_18_03 .swiper-container.main', {

            slidesPerView:    1,
            slidesPerColumn:  1,
            spaceBetween:     5,
            freeMode:         true,
            speed:            1000,
            roundLengths: true,
                    autoplay: 3000,
        autoplayDisableOnInteraction: true,
        scrollbar: '#pluginAppObj_18_03 .swiper-scrollbar',
        nextButton: '#pluginAppObj_18_03 .swiper-button-next',
        prevButton: '#pluginAppObj_18_03 .swiper-button-prev',
        paginationClickable: true,
        pagination: '#pluginAppObj_18_03 .swiper-pagination',
        paginationType: 'bullets',
            controlBy:        'container'
        });
    }
}