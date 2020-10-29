<?php
$clickID = $_POST["gclid"];
$isMessage = $_POST["isMessage"];
$time = time();
$r = "";
if ($isMessage === "true") {
  $r .= "Whatsapp = ";
} 
else {
  $r .= "Llamada = ";
}
$r .= "clickId = ";
$r .= $clickID;
$r .= " hora = ";
$r .= date("d-m-Y (H:i:s)", $time);
$file = fopen("conversiones.txt", "a");
fwrite($file, $r . PHP_EOL);
fclose($file);
echo $isMessage;
?>