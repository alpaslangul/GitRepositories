function DropDown(el) {
    this.dd = el;
    this.initEvents();
}


$(function() {

    var dd = new DropDown( $('#dd') );

    $(document).click(function() {
        // all dropdowns
        $('.wrapper-dropdown-5').removeClass('active');
    });

});

DropDown.prototype = {
    initEvents : function() {
        var obj = this;

        obj.dd.on('click', function(event){
            $(this).toggleClass('active');
            event.stopPropagation();
        });
    }
};

$(document).ready( function() {
    DropDown.prototype;
});