CCC = {
    commonInit : function() {
        $('#mainSearch').bind('click', CCC.clear);
    },

    clear : function() {
        $('#mainSearch').attr('value', '');
    }

}

$(document).ready( function() {
    CCC.commonInit();
})