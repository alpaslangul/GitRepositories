SLIDER = {
//    variables
    itemCount : $('.dynamics').children('.sliderItems').siblings().length,
    imageSize : $('.dynamics').children('.sliderItems').children('img').width(),

    commonInit : function ()
    {
        imgSize = SLIDER.imageSize;
        itmCount = SLIDER.itemCount;
        $('.dynamics').css('width',(imgSize * itmCount)+'px' );
    },

    goLeft : function ()
    {

    },

    goRigth : function ()
    {

    },

    flux : function ()
    {

    }
}

$(document).ready(function() {
    SLIDER.commonInit();
})