CA = {

    commonInit: function() {
        CA.backgroundRoll()
    },

    backgroundRoll : function () {
        var ht = Math.round($(window).height());
        var wt = Math.round($(window).width());
        var bg = Math.floor((Math.random()*4)+1);
        var sizeRate = parseFloat(ht / wt).toFixed(3);
        if (sizeRate > 0.665) {
            $('body').css('background-image', 'url("images/bg/bg'+bg+'.jpg")');
            $('body').css('background-size', ht * 1.51);

        } else if (sizeRate < 0.665) {
            $('body').css('background-image', 'url("images/bg/bg'+bg+'.jpg")');
            $('body').css('background-size', wt);
            console.log(ht, sizeRate, wt);
        }

        $(window).resize(
            function()
            {
                var ht = Math.round($(window).height());
                var wt = Math.round($(window).width());
                var sizeRate = parseFloat(ht / wt).toFixed(3);

                if (sizeRate > 0.665) {
                    $('body').css('background-image', 'url("images/bg/bg'+bg+'.jpg")');
                    $('body').css('background-size', ht * 1.51);

                } else if (sizeRate < 0.665) {
                    $('body').css('background-image', 'url("images/bg/bg'+bg+'.jpg")');
                    $('body').css('background-size', wt);
                }

            });
    }
},
    $(document).ready(function(){
        CA.commonInit();

    });

