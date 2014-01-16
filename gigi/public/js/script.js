/* Generic variable */
var globimageCount = {};
var globimageIndex = {};
var globproductType = {};

GAT = {

    commonInit : {
        init :  function ()
            {
                $('.picturesLayer').hover(GAT.pictureHover, GAT.pictureLeave);
                $('.detailImage').hover(GAT.detailImageHover, GAT.detailImageLeave);
                $('.lb').bind('click', GAT.lightbox.imageClick);
                $('.closeBtn').bind('click', GAT.lightbox.closeBtn);
                $('#leftStep').bind('click', GAT.lightbox.leftStep);
                $('#rightStep').bind('click', GAT.lightbox.rightStep);
                $('.lightbox > .innerBox > img').bind('click', GAT.lightbox.rightStep);
                h = $(window).height();
                $('.lightbox').height(h);


            }

    },

    lightbox : {

        imageClick : function (imageCount, imageIndex, val) {
            var imageCount = $(this).siblings().length+1;
            var imageIndex = $(this).index();
            var imageText = $(this).attr("name");
            var imageID = $(this).attr("id");
            var productType = $(this).parent().parent().attr('id');


                $('.navBar span').html(imageText);
                $('.lightbox').fadeIn(300).children('.innerBox').css('display', 'inline-block');
                $('.lightbox > .innerBox > img').attr("src", 'img/gallery/photos/'+imageID+'');
                var val = $(this).parent().siblings().html();
                globimageIndex.deger = imageIndex;
                globimageCount.deger = imageCount;
                globproductType.deger = productType;
                $('#imgW').load(function(){
                   imgW = $('#imgW').width();
                   $('.lightbox > .innerBox').css('margin-left','-'+imgW/2+'px');

                })

        },

        closeBtn : function () {
            $('.lightbox').hide();

        },

        leftStep : function() {

            if ( globimageIndex.deger >= 1 )
            {
                var step = $('#'+globproductType.deger+'').children('.photos').children('.thumbs').eq(globimageIndex.deger-1).attr('id');
                $('.lightbox > .innerBox > img').attr("src", 'img/gallery/photos/'+step+'');
                globimageIndex.deger--;
            }
        },
        rightStep : function() {

            var step = $('#'+globproductType.deger+'').children('.photos').children('.thumbs').eq(globimageIndex.deger+1).attr('id');
            if ( globimageIndex.deger < globimageCount.deger-1 )
            {
                $('.lightbox > .innerBox > img').attr("src", 'img/gallery/photos/'+step+'');
                globimageIndex.deger++;
            }
}

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
    }
}

$(document).ready( function() {
     GAT.commonInit.init();
})
