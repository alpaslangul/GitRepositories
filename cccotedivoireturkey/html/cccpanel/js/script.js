$(document).ready(function(){
    var h = $(document).height();
    var w = $(document).width();
    console.log(w);
    layerWidth = parseInt(w)-545;
    $('.adminLeft').height(h);
    console.log(layerWidth+'px');
    $('.adminRight').width(layerWidth+'px');
})

$(document).resize(function(){
    var h = $(document).height();
    var w = $(document).width();
    console.log(w);
    layerWidth = parseInt(w)-545;
    $('.adminLeft').height(h);
    console.log(layerWidth+'px');
    $('.adminRight').width(layerWidth+'px');
})