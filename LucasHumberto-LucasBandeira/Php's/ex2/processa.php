<?php

$temp = $_POST["temp"];
$tipo = strtoupper($_POST["tipo"]);

if($tipo == "F"){
$c = 5/9 * ($temp - 32);
echo "$temp F = $c C";
}else{
$f = ($temp * 9/5) + 32;
echo "$temp C = $f F";
}

?>