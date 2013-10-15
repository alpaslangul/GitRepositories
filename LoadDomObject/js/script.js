CA = {

    commonInit: function() {
        CA.objectLoad()
    },

    objectLoad : function () {
        $('#image').load(function(){
            $('#image').delay(1000).fadeIn(300);
            console.log('dosya yüklendi');
        })
    }
},
    $(document).ready(function(){
        CA.commonInit();

    });

