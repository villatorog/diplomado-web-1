/*
    1. Clic sobre imagen Thumbnail.
    2. Tomar el valor del attributo "href" de la etiqueta "anchor".
    3. Guardar dicho valor en una variable con nombre "imagenOriginal".
    4. Cambiar el valor del atributo "src" de la imagen principal por el
       valor del atributo "href" que tenemos guardada en la variable "imagenOriginal".
*/

/*
    El método "ready" de jQuery asegura que el código JS se ejecutará cuando
    el arbol "DOM" del HTML esté renderizado.

    La sintaxis de la función anónima de JS es:
        function() {}

    La sintaxis del método "ready" de jQuery es:
        $( "función anónima" )

        es decir:
        $( function() {} )
    
    El código escrito adentro de las llaves, es el código que se va
    a ejecutar cuando el "DOM" del HTML esté renderizado.

        $( function() {
            //code here...
        } );
    
    Método "on" de jQuery sirve para escuchar eventos, p. ej. "click, doubleClick, scroll"
    entre otros. La sintaxis es:

        elemento.on( evento a escuchar, código a ejecutar );

        por lo tanto:
        elemento.on(evento, función anónima);

        la sintaxis queda de la siguiente manera:
        elemento.on('click', function() {});
    
    El método "preventDeafult()" del evento (event), bloquea el comportamiento
    por defecto que tenga el elemento que desencadena el evento "click".


    El método "attr()" de jQuery funciona para dos cosas:
        1. Para devolvernos el valor del attributo especificado, es decir
           recibe un párametro, el cual es el nombre del atributo del que queremos
           obtener su valor:

           elemento.attr('href');
        
        2. Para cambiar el valor del atributo especificado, es decir
           recibe dos parámetros:
            - Nombre del atributo que queremos modificar.
            - El nuevo valor para éste atributo.

            elemento.attr('href', 'images/img-2.jpg');
    */

$(function () {
    var imgMini = $('.img-mini');
    var imgPrincipal = $('#imgPrincipal');

    imgMini.on('dblClick', function (event) {
        event.preventDefault();
        var imagenOriginal = $(this).attr('href');

        imgPrincipal.attr('src', imagenOriginal);
    });
});