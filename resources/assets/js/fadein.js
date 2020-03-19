jQuery(document).ready(function(){
    $(window).scroll(function (){
        $('.fadein').each(function(){
            var targetElement = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > targetElement - windowHeight + 200){
                $(this).css('opacity','1');
                $(this).css('-webkit-transform','translateY(0)');
                $(this).css('-moz-transform','translateY(0)');
                $(this).css('-ms-transform','translateY(0)');
                $(this).css('transform','translateY(0)');
            }
        });

        $('.more_none').each(function(){
            var targetElement = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > targetElement - windowHeight + 200){
                $(this).css('opacity','0.5');
                $(this).css('-webkit-transform','translateY(0)');
                $(this).css('-moz-transform','translateY(0)');
                $(this).css('-ms-transform','translateY(0)');
                $(this).css('transform','translateY(0)');
                $(this).css('pointer-events','none');
            }
        });
    });
});

$(function(){
    //htmlロード時の処理
    $('.fadein_first').each(function(){
        $(this).css('opacity','1');
        $(this).css('-webkit-transform','translateY(0)');
        $(this).css('-moz-transform','translateY(0)');
        $(this).css('-ms-transform','translateY(0)');
        $(this).css('transform','translateY(0)');
    });
    setTimeout(function(){
        $('.fadein_second').each(function(){
            $(this).css('opacity','1');
            $(this).css('-webkit-transform','translateY(0)');
            $(this).css('-moz-transform','translateY(0)');
            $(this).css('-ms-transform','translateY(0)');
            $(this).css('transform','translateY(0)');
        });
    },500);
  });