<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    
    $name           = filter_input(INPUT_POST, 'formName', FILTER_SANITIZE_SPECIAL_CHARS);
    $email           = filter_input(INPUT_POST, 'formEmail', FILTER_SANITIZE_SPECIAL_CHARS);
    $tel            = filter_input(INPUT_POST, 'formTel', FILTER_SANITIZE_SPECIAL_CHARS);
    $url           = filter_input(INPUT_POST, 'formUrl', FILTER_SANITIZE_SPECIAL_CHARS);
    $country          = filter_input(INPUT_POST, 'formCountry', FILTER_SANITIZE_SPECIAL_CHARS);
    $gender          = filter_input(INPUT_POST, 'formGender', FILTER_SANITIZE_SPECIAL_CHARS);
    $hobbieRead           = filter_input(INPUT_POST, 'formRead', FILTER_SANITIZE_SPECIAL_CHARS);
    $hobbieRun           = filter_input(INPUT_POST, 'formRun', FILTER_SANITIZE_SPECIAL_CHARS);
    $hobbieSwim          = filter_input(INPUT_POST, 'formSwim', FILTER_SANITIZE_SPECIAL_CHARS);
    $hobbiePlay          = filter_input(INPUT_POST, 'formPlay', FILTER_SANITIZE_SPECIAL_CHARS);
    $message        = filter_input(INPUT_POST, 'formMessage', FILTER_SANITIZE_SPECIAL_CHARS);

    $isHobbieRead= $hobbieRead ? 'si' : 'No';
    $isHobbieSwim= $hobbieSwim ? 'si' : 'No';
    $isHobbieRun= $hobbieRun ? 'si' : 'No';
    $isHobbiePlay= $hobbiePlay ? 'si' : 'No';
    $comments       = '<div>  Nombre: '               . $name
                    . '<br /> Correo Electronico: '   . $email
                    . '<br /> Teléfono: '             . $tel
                    . '<br /> Sitio Web: '             . $url
                    . '<br /> Pais: '             . $country
                    . '<br /> Sexo: '             . $gender
                    . '<br /> Leer: '             . $isHobbieRead
                    . '<br /> Nadar: '             . $isHobbieSwim
                    . '<br /> Correr: '             . $isHobbieRun
                    . '<br /> Jugar: '             . $isHobbiePlay
                    . '<br /> Mensaje: '              . $message
                    . '</div>';

    require_once 'PHPMailerAutoload.php';
    $phpmailer = new PHPMailer();

    $phpmailer->IsHTML( TRUE );
    $phpmailer->ClearAddresses();
    $phpmailer->AddAddress( 'villa_toro@hotmail.com', 'lu' );  // Correo del destinatario y nombre
    $phpmailer->addBCC( '' );// Correo CC
    // $phpmailer->IsSMTP();
    $phpmailer->SMTPDebug  = 0;
    $phpmailer->CharSet    = 'UTF-8';
    $phpmailer->SMTPAuth   = true;
    $phpmailer->SMTPSecure = 'ssl';
    $phpmailer->Host       = 'smtp.gmail.com'; // Servidor de correo saliente SMTP
    $phpmailer->Port       = 465; // Puerto de correo saliente SMTP
    $phpmailer->Username   = 'nayelli.sangenis@gmail.com'; // Usuario del correo electrónico
    $phpmailer->Password   = '$edumac_1010*'; // Contraseña del correo electrónico
    $phpmailer->From       = 'nayelli.sangenis@gmail.com'; // From
    $phpmailer->FromName   = 'edumac'; // From Name
    $phpmailer->Subject    = 'Datos del formulario del contacto'; // Subject
    $phpmailer->MsgHTML( $comments ); 
    
    ?>
    
    <!doctype html>

    <html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href="../css/main.css" />
</head>

<body>
    <div class="wrapper">
        <header class="page-header">
            <div class="container">
                <h1>Ejercicio 4</h1>
            </div>
        </header>
        <nav class="page-nav">
            <div class="container">
                <ul>
                    <li>
                        <a href="index.html">Pagina de Inicio</a>
                    </li>
                    <li>
                        <a href="contactanos.html">Contactanos</a>
                    </li>
                   
                </ul>
            </div>
        </nav>
        <main class="page-main">
            <div class="container">
                <section class="page-section">
                    <h2>Respuesta del servidor</h2>
                    <?php if ($phpmailer->Send()) : ?>
    <p>Gracias, tus datos se enviaron correctamente</p>
    <?php else : ?>
    <p class="error">No fue posible enviar tus datos, intenta nuevamente.</p>
    <?php endif; ?>
                                            </div>
                </section>


            </div>
        </main>
        <footer class="page-footer">
            <div class="container">
                <p>Todos los derechos reservados | eduMac 2017 | Sergio Pg</p>
            </div>
        </footer>
    </div>

</body>
</html>

    

  