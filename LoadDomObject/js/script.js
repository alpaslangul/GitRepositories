CA = {

    commonInit: function() {
        CA.objectLoad()
    },

    objectLoad : function () {
        $('#image').load(function(){
            $(this).fadeIn(100);
            console.log('dosya yüklendi');
        })
    }
},
    $(document).ready(function(){
        CA.commonInit();

    });

