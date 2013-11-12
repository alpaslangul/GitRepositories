CCC = {

    commonInit : {
        init :  function ()
            {

                $('.clear').bind('click',CCC.commonInit.allClear);
                $('input').click(function(){
                    $(this).val('');


                });

                $('.name > input').bind('blur', function() {
                    if ($('.name > input').val()== '') {
                        var name = $(this).attr("value");
                        $(this).val(name);
                        console.log($(this).val());
                    }
                });

                $('.email > input').bind('blur', function() {
                    if ($('.email > input').val()== '') {
                        var name = $(this).attr("value");
                        $(this).val(name);
                        console.log($(this).val());
                    }
                });

                $('.web > input').bind('blur', function() {
                    if ($('.web > input').val()== '') {
                        var name = $(this).attr("value");
                        $(this).val(name);
                        console.log($(this).val());
                    }
                });

                $('textarea').click(function(){
                    $(this).val('');
                    console.log('click');
                });
                $('textarea').bind('blur', function() {
                    if ($('textarea').val()== '') {
                        var name = $(this).attr("id");
                        $(this).val(name);
                    }
                });
            },

        allClear : function () {
            $('input[type=text]').val(' ');
            $('textarea').val(' ');
        }

}
}

$(document).ready( function() {
     CCC.commonInit.init();

})
