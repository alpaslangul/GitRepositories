CCC = {
    id : 1,
    imageW : 824,
    itemCount : $('.sponsorsContainer').children('.sliderImage').siblings().length,

    commonInit : function() {
        $('#mainSearch').bind('click', CCC.clear);
        $('.spnsLeftBtn').on('click', CCC.slider.leftClick);
        $('.spnsRightBtn').on('click', CCC.slider.rightClick);
        $('.sponsorsContainer').css('width', CCC.imageW * CCC.itemCount);
        $('.pageUp').bind('click', CCC.pageUp)
        $('.maps-button').bind('click', CCC.pageDown);
        $('.photos div').hover(CCC.photosHover, CCC.photosLeave);
        $('.toogleHead').on('click', CCC.toggleActive);
    },

    photosHover : function () {
        var a = $(this).children('.photosFront').index();
        $(this).children('.photosFront').fadeIn(300);
    },

    photosLeave : function () {
        $(this).children('.photosFront').fadeOut(300);
    },

    toggleActive : function () {
        $(this).find('.contentText').slideToggle('slow').parents('.toogleHead').find('.contentHeader').toggleClass('dp');
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
            }, 4750);
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
    CCC.slider.timer();

});