<h1>Local<h1> 
<h4><h4> 

<?php
//Programa para ver IP de dispositivos conectados y aplicar script de python y R en php.


$ip_server = $_SERVER['SERVER_ADDR']; 
echo "IP del servidor local: $ip_server"; 
?> 

<h1>Remoto<h1/> 
<h4><h4>

<?php 
  
$ipr = $_SERVER['REMOTE_ADDR']; 
echo "IP del servidor remoto: $ipr", "<br>"; 

$file ='access.log'; 
$no_of_lines = count(file($file)); 
echo "Hits: $no_of_lines ";

$salida1 = shell_exec('python script.py; Rscript script.R ');
echo "<pre>$salida1</pre>";

$salida2 = shell_exec('ls ; wc -l access.log ; cat access.log ');
echo "<pre>$salida2</pre>";
?>
