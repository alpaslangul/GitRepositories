/* Generic variable */
var globimageCount = {};
var globimageIndex = {};
var globproductType = {};

GAT = {

    commonInit : {
        init :  function ()
            {
                GAT.commonInit.positions();
                $('.menu #nav > li').hover(GAT.menuHover, GAT.mouseLeave);
                $('.subNav > li').hover(GAT.subMenuHover, GAT.subMenuLeave);
                $('.subNav').mouseleave(GAT.menuLeave);
                $('.imageLayer').hover(GAT.imageHover, GAT.imageLeave); //main page slider
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
                $('.lb').bind('click', GAT.lightbox.imageClick);
                $('.closeBtn').bind('click', GAT.lightbox.closeBtn);
                $('.closeMap').bind('click', GAT.lightbox.closeMap);
                $('#leftStep').bind('click', GAT.lightbox.leftStep);
                $('#rightStep').bind('click', GAT.lightbox.rightStep);
                $(window).on('resize',GAT.commonInit.resizeFunc);
                $('.bottomMark > a').bind('click', GAT.adressBox);
                $('#copyright').bind('click', GAT.copyrightBox);
                $('.imprint').bind('click', GAT.topMenuContent);
                $('.sitemapLink').bind('click', GAT.topMenuContent);

                setTimeout(
                    function()
                    {
                        $("#pageLoad")[0].play();
                    }, 1800);
            },

            positions : function () {
                hsize = $('.header').height();
                csize = $('.contentBg').height();
                fsize = $('.footer').height();
                dh = hsize+csize+fsize+68;
                b = (dh/2);
                $('.introLayer').height(dh);
                $('.wrapper').height(dh-70);
                $('.lightbox').height(dh);
                $('.adressBox').height(dh);
                $('.copyright').height(dh);
                $('.leftBtn').css('margin-top', b);
                $('.rigthBtn').css('margin-top', b);

            },

            resizeFunc : function () {
                dh = $('body').height();
                $('.content').height(dh-109);
                $('.contentBg').height(dh-144);
                $('.wrapper').height(dh-70);
            }


    },
    pLclick : function () {
        $("#contentLayers > div").eq(14).fadeIn(200).siblings().css('display','none');
        return false;
    },

    tLclick : function () {
        $("#contentLayers > div").eq(15).fadeIn(200).siblings().css('display','none');
        return false;
    },

    mLclick : function () {
        $("#contentLayers > div").eq(16).fadeIn(200).siblings().css('display','none');
        return false;
    },

    calculator : function () {
        $("#contentLayers > div").eq(10).fadeIn(200).siblings().css('display','none');
        return false;
    },
    pageLoadTr : function () {

       $('.introLayer').fadeOut(420);
       $('.wrapper').css('opacity', '1');
    },

    pageLoadEn : function () {

        $('.introLayer').fadeOut(420);
        $('.wrapper').css('opacity', '1');
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
        $(this).children('.subNav').fadeIn(200)
    },

    mouseLeave : function () {
        $(this).css('color', '#a3a2a5');
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

    lightbox : {

        imageClick : function (imageCount, imageIndex, val) {
            var imageCount = $(this).parent().siblings().length+1;
            var imageIndex = $(this).parent().index();
            var imageText = $(this).parent().attr("name");
            var imageID = $(this).parent(".lbImage").attr("id");
            var productType = $(this).parent().parent().parent().attr('id');

                $('.navBar span').html(imageText);
                $('.lightbox > .innerBox > img').attr("src", 'img/'+imageID+'');
                $('.lightbox').fadeIn(300).children('.innerBox').delay(500).slideToggle(150);

            var val = $(this).parent().siblings().html();
            globimageIndex.deger = imageIndex;
            globimageCount.deger = imageCount;
            globproductType.deger = productType;

        },

        closeBtn : function () {
            $('.lightbox').hide();
            $('.lightbox .adressBox').hide();
            $('.lightbox .innerBox').hide();
            console.log('deneme');
        },

        closeMap : function () {
            $('.adressBox').css('top','-5000px');
            $('.copyright').css('top','-5000px');
        },

        leftStep : function() {
            if ( globimageIndex.deger >= 1 )
            {
                var step = $('#'+globproductType.deger+' .productDetails').children('.detailImage').eq(globimageIndex.deger-1).attr('id');
                $('.lightbox > .innerBox > img').attr("src", 'img/'+step+'');
                globimageIndex.deger--;
            }
        },
        rightStep : function() {

            var step = $('#'+globproductType.deger+' .productDetails').children('.detailImage').eq(globimageIndex.deger+1).attr('id');
            if ( globimageIndex.deger < globimageCount.deger-1 )
            {
                $('.lightbox > .innerBox > img').attr("src", 'img/'+step+'');
                globimageIndex.deger++;
            }
}

    },

    adressBox :function () {
//        $('.adressBox').fadeIn(300).children('.innerBox').delay(500).slideToggle(150);
        $('.adressBox').css('top', '0px');
    },

    copyrightBox :function () {
//        $('.adressBox').fadeIn(300).children('.innerBox').delay(500).slideToggle(150);
        $('.copyright').css('top', '0px');
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
             $(this).css('background-image', 'url("img/bg1.jpg")');
         }).fadeTo(speed, 1.0);

     } else if (gtMenuitem== 1)
     {
         $('.contentBg').fadeTo('slow', 0.1, function(){
             $(this).css('background-image', 'url("img/bg2.jpg")');
         }).fadeTo(speed, 1.0);
     } else if (gtMenuitem== 2)
     {
         $('.contentBg').fadeTo('slow', 0.1, function(){
             $(this).css('background-image', 'url("img/bg3.jpg")');
         }).fadeTo(speed, 1.0);
     } else if (gtMenuitem== 6)
     {
         $('.contentBg').fadeTo('slow', 0.1, function(){
             $(this).css('background-image', 'url("img/bg4.jpg")');
         }).fadeTo(speed, 1.0);
     } else if (gtMenuitem== 10)
     {
         $('.contentBg').fadeTo('slow', 0.1, function(){
             $(this).css('background-image', 'url("img/bg5.jpg")');
         }).fadeTo(speed, 1.0);
     } else if (gtMenuitem== 12)
     {
         $('.contentBg').fadeTo('slow', 0.1, function(){
             $(this).css('background-image', 'url("img/bg1.jpg")');
         }).fadeTo(speed, 1.0);
     }
    },

    SubContent : function() {
        $("#clickEffect")[0].play();
        var subItem = $(this).children().attr('id');
        console.log(subItem);
        $("#contentLayers > div").eq(subItem).fadeIn(200).siblings().css('display','none');
        return false;


    },

    topMenuContent : function() {
        $("#clickEffect")[0].play();
        var subItem = $(this).attr('id');
        console.log(subItem);
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
