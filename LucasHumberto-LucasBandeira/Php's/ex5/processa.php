<?php

function fatorial($n){

$f = 1;

for($i=1;$i<=$n;$i++){
$f *= $i;
}

return $f;

}

$soma = fatorial($_POST["n1"])
+ fatorial($_POST["n2"])
+ fatorial($_POST["n3"])
+ fatorial($_POST["n4"])
+ fatorial($_POST["n5"]);

echo "Soma = ".$soma;

?>