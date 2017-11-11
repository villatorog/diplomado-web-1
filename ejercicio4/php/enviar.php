<?php

$name=$_POST["formName"];
$tel=$_POST["formTel"];
$message='Mi nombre es ' . $name . ', y mi telefono es ' . $tel .'.';

echo $message;


/*imprime arreglos*/
#print_r($_POST);


?>