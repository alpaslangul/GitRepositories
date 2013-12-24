var i=1; // image idex for loop
CCC = {

    commonInit : function() {
        $('.lightbox').css("top", "-3000px");
        h =  $(window).height();
        $('.content').height(h-100);
        $('.buttonsLayer').css("padding-top", h/5 +'px');
        $('.lightbox').height(h);


        $('.btn1').bind('click', CCC.ligthbox);
        $('.btn2').bind('click', CCC.msgLb);
        $('.btn3').bind('click', CCC.adressLb);
        $('.closeBtn').bind('click', CCC.closeBtn);

        $(window).resize(
            function() {
                h =  $(window).height();
                console.log(h);
                if (h > 559) {
                    $('.content').height(h-100);
                    $('.buttonsLayer').css("padding-top", h/5 +'px');
                    $('.lightbox').height(h);
                }
            });

        setInterval(function() {
            CCC.backgroundRoll(i);
            if (i==3) {
                i=0;
            }
            i++;

        }, 5000);
    },

    ligthbox : function() {
        $('#map').css("top", "0px");

    },

    closeBtn : function() {
        $(this).parents().eq(1).css("top", "-3000px");

    },

    msgLb : function() {
        $('#message').css("top", "0px");

    },

    adressLb : function() {
        $('#adress').css("top", "0px");

    },

    backgroundRoll : function () {
        var ht = Math.round($(window).height());
        var wt = Math.round($(window).width());
        var sizeRate = parseFloat(ht / wt).toFixed(3);
//        var bg = Math.floor((Math.random()*3)+1);

        if (sizeRate > 0.665) {
            $('.content').fadeTo('slow', 0, function()
            {
                $('.content').css('background', 'url("img/bg'+i+'.jpg")');
                console.log(i);

            }).fadeTo('slow', 1);

        } else if (sizeRate < 0.665) {
            $('.content').fadeTo('slow', 0, function()
            {
                $('.content').css('background', 'url("img/bg'+i+'.jpg")');
                console.log(i);


            }).fadeTo('slow', 1);

        }

        $(window).resize(
            function()
            {
                var ht = Math.round($(window).height());
                var wt = Math.round($(window).width());
                var sizeRate = parseFloat(ht / wt).toFixed(3);

                if (sizeRate > 0.665) {
                    $('.content').fadeTo('slow', 0, function()
                    {
                        $('.content').css('background', 'url("img/bg'+i+'.jpg")');

                    }).fadeTo('slow', 1);
//
                } else if (sizeRate < 0.665) {

                    $('.content').fadeTo('slow', 0, function()
                    {
                        $('.content').css('background', 'url("img/bg'+i+'.jpg")');
                    }).fadeTo('slow', 1);

                }
//
            });

    }

};

$(document).ready( function() {
    CCC.commonInit();
});