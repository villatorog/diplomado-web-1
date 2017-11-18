/*
La funcion ready de jquery
puede utilizar cualquiera de las sig. sintaxis:
1.$(window).load(funtion(){
    $(function(){});

    */
    $(function(){
       var slider=$('#slider');
        slider.flexslider({
         animation: 'slide',
         slideshowSpeed: 4000,
         prevText: 'anterior',
         nextText: 'Siguiente',
         customDirectionNav:'.slider__direction-nav a'
     });

    });