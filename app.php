<?php
$datosRecibidos = file_get_contents("php://input");
$datos = json_decode($datosRecibidos, true);

require "vendor/autoload.php";

$ecuacionGrado2 = new ecuaciones\modelo\EcuacionGrado2($datos['a'],$datos['b'],$datos['c']);

$html = "<tr><th>x</th><th>y</th></tr>";
for ($i=0; $i < 11; $i++){
    $resultado = $ecuacionGrado2->calcular($i);
    $html = "<tr><td>".$i."</td><td>".$resultado."</td></tr>";
    echo $html;

}