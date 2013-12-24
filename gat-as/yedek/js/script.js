GAT = {


    commonInit : {
        init :  function ()
            {
                h = $(document).height(); //document heigth
                b = (h/2);
                wh = $(window).height();
                $('.content').height(h);
                $('.contentBg').height(h);
                $('.introLayer').height(wh);
                $('.wrapper').height(wh);
                $('.leftBtn').css('margin-top', b);
                $('.rigthBtn').css('margin-top', b);
                $('.menu #nav > li').hover(GAT.menuHover, GAT.mouseLeave);
                $('.subNav > li').hover(GAT.subMenuHover, GAT.subMenuLeave);
                $('.subNav').mouseleave(GAT.menuLeave);
                $('.imageLayer').hover(GAT.imageHover, GAT.imageLeave);
                $('.picturesLayer').hover(GAT.pictureHover, GAT.pictureLeave);
                $('#nav > li').bind('click', GAT.MainContent);
                $('.subNav > li').bind('click', GAT.SubContent);
                $('.contentBg').fadeIn(1000);
                $('#tr').bind('click', GAT.pageLoadTr);
                $('#eng').bind('click', GAT.pageLoadEn);
                $('.calculator').bind('click', GAT.calculator);
                $('#pL').bind('click', GAT.pLclick);
                $('#tL').bind('click', GAT.tLclick);
                $('#mL').bind('click', GAT.mLclick);
                $('.detailImage').hover(GAT.detailImageHover, GAT.detailImageLeave);
                setTimeout(
                    function()
                    {
                        $("#pageLoad")[0].play();
                    }, 1800);

//                $(function(){
//
//                    $('li').click(function() {
//
//                        $("#clickEffect")[0].play();
//                    });
//                });

//                $('.productLayer').hover(GAT.productHover, GAT.productLeave);
//                $("#contentLayers > div").eq(0).css('display','block').siblings().css('display','none');
                 }
    },

    pLclick : function () {
        $("#contentLayers > div").eq(12).fadeIn(200).siblings().css('display','none');
        return false;

    },

    tLclick : function () {
        $("#contentLayers > div").eq(13).fadeIn(200).siblings().css('display','none');
        return false;

    },

    mLclick : function () {
        $("#contentLayers > div").eq(14).fadeIn(200).siblings().css('display','none');
        return false;

    },


    calculator : function () {
        $("#contentLayers > div").eq(10).fadeIn(200).siblings().css('display','none');
        return false;
    },
    pageLoadTr : function () {

       $('.introLayer').fadeOut(420);
       $('.wrapper').css('opacity', '1');
        $.ajax
            ({
                url: "tr.php",
                cache: false
            }).done(function( html )
                {
                    $("#language").html(html);
                });

    },

    pageLoadEn : function () {

        $('.introLayer').fadeOut(420);
        $('.wrapper').css('opacity', '1');
        $.ajax
        ({
            url: "en.php",
            cache: false
        }).done(function( html )
            {
                $("#language").html(html);
            });

    },

    topMenu : {
        init : function () {
            currentId = $(this).index();

        }
    },

    subMenuHover : function () {
        $(this).css('color', '#fff');
    },

    subMenuLeave : function () {
        $(this).css('color', '#a3a2a5');
    },

    menuHover : function () {
        $(this).css('color', '#fff');
        $(this).children().children().css('background-image', 'url("img/menu_hover.png")');
        $(this).children('.subNav').fadeIn(200)
    },

    mouseLeave : function () {
        $(this).css('color', '#a3a2a5');
        $(this).children().children().css('background-image', 'url("img/sprite.png")');
        $('.menu #nav li .subNav').fadeOut(200);
    },

    menuLeave : function () {
        $('.menu #nav li .subNav').hide();
    },

    imageHover : function () {

        $(this).children('.front').fadeIn(300)
    },

    imageLeave : function () {

        $(this).children('.front').fadeOut(300)
    },

    productHover : function () {

        $(this).children('.productFront').fadeIn(200)
    },

    productLeave : function () {

        $(this).children('.productFront').fadeOut(200)
    },

    pictureHover : function () {
        $(this).children('.pictureFront').fadeIn(200)
    },

    pictureLeave : function () {
        $(this).children('.pictureFront').fadeOut(200)
    },

    detailImageHover : function () {
        $(this).children('.detailImageFront').fadeIn(200)
    },

    detailImageLeave : function () {
        $(this).children('.detailImageFront').fadeOut(200)
    },

    MainContent : function () {
     $("#clickEffect")[0].play();
     var gtMenuitem = $(this).children().attr('id');
        var speed = 1000;
     $("#contentLayers > div").eq(gtMenuitem).fadeIn(200).siblings().css('display','none');

     if (gtMenuitem== 0)
     {
         $('.contentBg').fadeTo('slow', 0.1, function(){
             $(this).css('background-image', 'url("img/bg1.png")');
         }).fadeTo(speed, 1.0);

     } else if (gtMenuitem== 1)
     {
         $('.contentBg').fadeTo('slow', 0.1, function(){
             $(this).css('background-image', 'url("img/bg2.png")');
         }).fadeTo(speed, 1.0);
     } else if (gtMenuitem== 5)
     {
         $('.contentBg').fadeTo('slow', 0.1, function(){
             $(this).css('background-image', 'url("img/bg3.png")');
         }).fadeTo(speed, 1.0);
     } else if (gtMenuitem== 9)
     {
         $('.contentBg').fadeTo('slow', 0.1, function(){
             $(this).css('background-image', 'url("img/bg4.png")');
         }).fadeTo(speed, 1.0);
     } else if (gtMenuitem== 11)
     {
         $('.contentBg').fadeTo('slow', 0.1, function(){
             $(this).css('background-image', 'url("img/bg5.png")');
         }).fadeTo(speed, 1.0);
     }
    },

    SubContent : function() {
        $("#clickEffect")[0].play();
        var subItem = $(this).children().attr('id');
        $("#contentLayers > div").eq(subItem).fadeIn(200).siblings().css('display','none');
        return false;
    },

    servicesMenu : {
        init : function(){
            $('#fabricLink').bind('click',GAT.servicesMenu.linksF);
            $('#hangarLink').bind('click',GAT.servicesMenu.linksH);
            $('#doorLink').bind('click',GAT.servicesMenu.linksD);
        },
        linksF : function (){
            $("#contentLayers > div").eq(6).fadeIn(200).siblings().css('display','none');
        },
        linksH : function (){
            $("#contentLayers > div").eq(7).fadeIn(200).siblings().css('display','none');
        },
        linksD : function (){
            $("#contentLayers > div").eq(8).fadeIn(200).siblings().css('display','none');
        }
    },

    intro : {
        init : function () {

            $('#ligth-corner').fadeIn(1500);
            setTimeout(
                function()
                {
                    $('.shadow').fadeIn(1000);
                }, 300)
            setTimeout(
                function()
                {
                    $('#ligth-shadow1').fadeIn(2400);
                    $('#light1').fadeIn(3200);
                    $('#light2').fadeIn(3300);
                    $('#light3').fadeIn(3400);
                    $('#light4').fadeIn(3500);
                    $('#light5').fadeIn(3800);
                    setTimeout( $('#gatasLogo').show(1400),800);
                    setTimeout( $('#logoText').fadeIn(2000),1200);
                    setTimeout( $('#colorShadow').fadeIn(2500),1200);

                }, 1750)
            setTimeout(
                function ()
                {
                  $('.languageSelect').fadeIn(1500)
                },3000);
            $(function() {

                var $elie = $('#ligth-shadow1'),
                    degree =0,
                    timer;

                rotate();
                function rotate() {
                    $elie.css({ WebkitTransform: 'rotate(' + degree + 'deg)'});
                    $elie.css({ '-moz-transform': 'rotate(' + degree + 'deg)'});
                    if (degree <95) {
                        timer = setTimeout(function() {
                            ++degree; rotate();
                        },30);
                    }
                }

            });

        }
    }
}

$(document).ready( function() {
     GAT.commonInit.init();
     GAT.intro.init();
     GAT.servicesMenu.init();
})
