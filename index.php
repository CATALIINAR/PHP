<!DOCTYPE html>
 <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th,
        td {
            text-align: center;
            padding: 0.5rem;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            margin-top: 1rem;
        }
    </style>
 </head>
    <body>
        <h1>Formulario de Solicitudes o Quejas</h1>
        <h1>Envío de formulario por correo electrónico</h1>
            <p>primero se requiere capturar los datos del formulario utilizando variables PHP, se puede utilizar la función mail() de PHP para enviar el correo electrónico, proporcionando la dirección de correo electrónico de destino, el asunto del correo electrónico y el cuerpo del mensaje como parámetros. Es importante tener en cuenta que la función mail() puede requerir configuración adicional en algunos servidores y puede tener limitaciones en términos de seguridad y rendimiento, por lo que en algunos casos puede ser necesario utilizar soluciones alternativas para el envío de correos electrónicos.</p>
        <form action="insert.php" method="post">
            <table>
                <tr><th>Nombre Completo</th><td><input type="text" name="Nombre_Completo" placeholder="Nombre Completo"></td></tr>
		        <tr><th>Correo Electronico</th><td><input type="text" name="Correo" placeholder="Correo"></td></tr>
		        <tr><th>Ciudad</th><td><input type="text" name="Ciudad" placeholder="Ciudad"></td></tr>
                <tr><th>Solicitud o Queja</th><td><input type="text" name="pqr" placeholder="Solicitud o Queja"></td></tr>
		        <tr><td><input type="submit" name="bsubmit" value="Enviar"></td></tr>

            </table>    
            
        </form>    

<?php
include 'dbcon.php'; 
$selectquery = 'SELECT * FROM pqr';
$selres = mysqli_query($con1, $selectquery);

?>


    </body>
</html>