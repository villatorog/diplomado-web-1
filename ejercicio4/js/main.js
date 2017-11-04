//ready
$(function(){
    //variables
    var formContact=$('#formContact');
    
    //set default values
    $.extend($.validator.messages,{
        required:'Este campo es obligatorio',
        email:'ingresa un correo valido',
        url:'ingresa una url valida',
        minlength:'ingresa al menos{0} caracteres'
    });
    //apply validation plugin
    
    formContact.validate();
    console.log($.validator.messages);
});
