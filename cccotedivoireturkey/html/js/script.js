CCC = {
    id : 1,
    imageW : 824,
    itemCount : $('.sponsorsContainer').children('.sliderImage').siblings().length,

    commonInit : function() {
        $('#mainSearch').bind('click', CCC.clear);
        $('.spnsLeftBtn').on('click', CCC.slider.leftClick);
        $('.spnsRightBtn').on('click', CCC.slider.rightClick);
        $('.sponsorsContainer').css('width', CCC.imageW * CCC.itemCount);
        $('.up').bind('click', CCC.pageUp)
        $('.maps-button').bind('click', CCC.pageDown)
    },

    clear : function() {
        $('#mainSearch').attr('value', '');
    },

    pageUp : function () {
        $('html, body').animate({scrollTop:0}, 'slow', function(){

        })
    },

    pageDown : function () {
        $('html, body').animate({scrollTop:300}, 'slow', function(){

        })
    },

    slider : {

        timer : function () {
            setInterval(function()
            {
                CCC.slider.rightClick();
            }, 3000);
        },

        leftClick : function ()
        {
            if (CCC.id < (CCC.itemCount)+1 && CCC.id > (CCC.itemCount)-(CCC.itemCount-1))
            {
                $('.sponsorsContainer').animate({marginLeft: -CCC.imageW * (CCC.id-2) }, 1000, function () { });
                CCC.id--

            }
        },

        rightClick : function ()
        {
            if (CCC.id < (CCC.itemCount))
            {
                $('.sponsorsContainer').animate({marginLeft: -CCC.imageW * CCC.id}, 1000, function () { });
                CCC.id++

            } else if (CCC.id = (CCC.itemCount)) {
                $('.sponsorsContainer').animate({marginLeft: 0}, 1000, function () { });
                CCC.id = 1;
            }
        }
    }
};

$(document).ready( function() {
    CCC.commonInit();
    CCC.slider.timer()
});