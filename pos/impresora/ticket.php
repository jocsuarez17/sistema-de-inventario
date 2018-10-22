
<?php
/*
require __DIR__ . '/ticket/autoload.php'; //Nota: si renombraste la carpeta a algo diferente de "ticket" cambia el nombre en esta línea
use Mike42\Escpos\Printer;
use Mike42\Escpos\EscposImage;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;
*/
$datos = new ControladorVentas();
$respuesta = $datos->imprimirventa();

var_dump($respuesta);
?>