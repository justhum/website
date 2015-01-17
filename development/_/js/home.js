$(function(){   
    $('.toggle-btn').click(function(){
       $('.navigation-mobile').toggleClass("open");
       
       return false;
    });
    
    $(".duplicate").clone().appendTo(".navigation-mobile");
});