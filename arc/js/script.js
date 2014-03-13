ARC = {
    commonInit : function () {
        $('.team-member').bind('click', ARC.openLightBox);
        $('.closeBtn').bind('click', ARC.closeBtn);
        $('.arcTabs .arcHead span').bind('click', ARC.tabsClick);
    },

    openLightBox : function () {
        var val = $(this).attr('id');
        $('.lightbox').show();
        $('.lightbox > div > .'+val+'').show();
    },

    closeBtn : function () {
        $('.lightbox').hide();
        $('.lightbox > div > .lbContent').hide();
    },

    tabsClick : function() {
        var ind = $(this).index();
        $(this).parent().parent().children().eq(ind+1).addClass('active').siblings().removeClass('active');
    }


},
    $('document').ready(function() {
        ARC.commonInit();
       
    })