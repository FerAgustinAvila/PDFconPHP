<?php
require __DIR__.'/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

if(isset($_POST['crear'])){
    // Recoger contenido del fichero
    ob_start();
    require_once 'print_view.php';
    $html = ob_get_clean();

    $html2pdf = new Html2Pdf('P', 'A4', 'es', 'true', 'UTF-8');
    // $html2pdf->writeHTML('<h1> Hola mundo!! desde html2pdf </h1> <h2> Más información </h2>');

    $html2pdf->writeHTML($html);

    $html2pdf->output('pdf_generated.pdf');
}



?>
<style>
    input{
        margin-top: 50px;
    }
    form{
        text-align: center;
    }

</style>
<form action="" method="POST">

            <label for="name"> Nombre: </label>
            <input type="text" id="name" name="nombre">
            <br>

            <label for="apellido"> Apellido: </label>
            <input type="text" id="apellido" name="apellido">
            <br>

            <label for="edad"> Edad:</label>
            <input id="edad" name="edad">
            <br>
 
    <input type="submit" value="Crear un PDF" name="crear">
</form>