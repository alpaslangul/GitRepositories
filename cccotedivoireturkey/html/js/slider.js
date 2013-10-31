SLIDER = {
//    variables
    itemCount : $('.dynamics').children('.sliderItems').siblings().length,
    imageSize : $(this).children('.sliderItems').children('img').width(),
    start : 1,

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
        }, 4500);
    },

    goLeft : function ()
    {
        slideWidth = SLIDER.imageSize;

        if (SLIDER.start < SLIDER.itemCount)
        {
            push = slideWidth*SLIDER.start;
            $('.dynamics').animate({marginLeft:-push},1000);
            console.log('start Item =',SLIDER.start);
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