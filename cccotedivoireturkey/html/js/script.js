CCC = {
    id : 1,
    imageW : 824,

    commonInit : function() {
        $('#mainSearch').bind('click', CCC.clear);
        $('.spnsLeftBtn').on('click', CCC.slider.leftClick);
        $('.spnsRightBtn').on('click', CCC.slider.rightClick);
    },

    clear : function() {
        $('#mainSearch').attr('value', '');
    },

    slider : {


        timer : function () {
            var t = 0;
            setInterval(function()
            {
                CCC.slider.rightClick()
            }, 3000);
        },

        leftClick : function ()
        {
            if (CCC.id < 4 && CCC.id > 1)
            {
                $('.sponsorsContainer').animate({marginLeft: -CCC.imageW * (CCC.id-2) }, 1000, function () { });
                CCC.id--
            }
        },

        rightClick : function ()
        {
            if (CCC.id < 3)
            {
                $('.sponsorsContainer').animate({marginLeft: -CCC.imageW * CCC.id}, 1000, function () { });
                CCC.id++

            } else if (CCC.id = 3) {
                $('.sponsorsContainer').animate({marginLeft: 0}, 1000, function () { });
                CCC.id = 1;
            }
        }
    }
}

$(document).ready( function() {
    CCC.commonInit();
    CCC.slider.timer();
})