SLIDER = {
//    variables
    itemCount : $('.dynamics').children('.sliderItems').siblings().length,
    imageSize : $('.dynamics').children('.sliderItems').children('img').width(),
    start : 1,
    loop : 0,

    commonInit : function ()
    {
        imgSize = SLIDER.imageSize;
        itmCount = SLIDER.itemCount;
        $('.dynamics').css('width',(imgSize * itmCount)+'px' );
        SLIDER.rndShow();

    },

    rool : function () {
        setInterval(function()
        {
            SLIDER.goLeft();
        }, 3000);
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

    },

    rndShow : function () {
        /* Her açılışta farklı bir image ilk olarak görüntülemek için random bir sayı üretiyoruz. 0 ile 2 arasında*/
        var rnd = Math.floor((Math.random()*3));
        $('.advertising img').eq(rnd).show().siblings().hide();
    },

    timer : function () {
        setInterval(function()
        {
            SLIDER.adverLoop();
        }, 6000);
    },

    adverLoop : function ()
    {
        console.log(SLIDER.loop);
            if (SLIDER.loop < 3)
            {
                $('.advertising img').eq(SLIDER.loop).show().siblings().hide();
                SLIDER.loop++;

            } else if (SLIDER.loop = 3)
            {
                SLIDER.loop=0;

            }

    }

}

$(document).ready(function() {
    SLIDER.commonInit();
    SLIDER.timer();
    SLIDER.rool();

})