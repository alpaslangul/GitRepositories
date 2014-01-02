SLIDER = {
//    variables
    itemCount : $('.dynamics').children('.sliderItems').siblings().length,
    imageSize : $('.dynamics').children('img').width(),

    start : 1,
    loop : 0,

    commonInit : function ()
    {
        imgSize = SLIDER.imageSize;
        itmCount = SLIDER.itemCount;
        $('.dynamics').css('width',(imgSize * itmCount)+'px' );
    },

    rool : function () {
        setInterval(function()
        {
            SLIDER.goLeft();
        }, 5000);
    },

    goLeft : function ()
    {
        slideWidth = SLIDER.imageSize;

        if (SLIDER.start < SLIDER.itemCount)
        {
            push = slideWidth*SLIDER.start;
            $('.dynamics').animate({marginLeft:-push},1000);
            SLIDER.start++;

        } else if (SLIDER.start = SLIDER.itemCount)
        {
            $('.dynamics').animate({marginLeft:0},600);
            SLIDER.start = 1;
        }

    }



}

$(document).ready(function() {
    SLIDER.commonInit();
    SLIDER.rool();
})