<?php
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$metodo = $_POST["metodo"];
$lote = $_POST["lote"];
$time = time();
$r = "Nombre= ";
$r .= $nombre;
$r .= "  Telefono= ";
$r .= $telefono;
$r .= "  Metodo= ";
$r .= $metodo;
$r .= "  Lote= ";
$r .= $lote;
$r .= "  hora= ";
$r .= date("d-m-Y (H:i:s)", $time);
$file = fopen("conversiones.txt", "a");
fwrite($file, $r . PHP_EOL);
fclose($file);
echo $r;
?>