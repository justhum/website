$(function(){   
    $('.keys a').click(function(){
        $(this).toggleClass("active");
        return false;
    });
    
    $('.sortby a').click(function(){
        $(this).siblings().removeClass("active");
        $(this).addClass("active");
        
        return false;
    });
    
    $('a.toggle').click(function(){
        $(this).toggleClass("active");
        $(this).siblings().removeClass("active");
        
        return false;
    });
    
    $('.dropdowns a').click(function(){
        return false;
    });
    
    $(".slider").noUiSlider({
        start: 50,
        range: [0, 100],
        handles: 1
    });
    
    $('a.play_btn').click(function(){
       if ( $(this).hasClass("playing") ) {
           $("#jquery_jplayer_1").jPlayer("stop");
       } else {
           $("#jquery_jplayer_1").jPlayer("play");
           $(".jp-current-time").show();
       }
       
       $(this).toggleClass("playing");
       
       return false;
    });
    
    $('.toggle-btn').click(function(){
       $('.navigation-mobile').toggleClass("open");
       
       return false;
    });
    
    $(".duplicate").clone().appendTo(".navigation-mobile");
    
    $("#jquery_jplayer_1").jPlayer({
        ready: function (event) {
            $(this).jPlayer("setMedia", {
                mp3:"http://cdn.justhum.com/mp3/seemethrough.mp3",
                oga:"http://cdn.justhum.com/mp3/seemethrough.ogg"
            });
        },
        swfPath: "http://cdn.justhum.com/mp3/",
        supplied: "mp3, oga",
        wmode: "window",
        timeFormat: { padMin: false }
    });
});