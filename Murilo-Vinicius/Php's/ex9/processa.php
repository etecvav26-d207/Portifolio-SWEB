<?php

function media($v){

return array_sum($v) / count($v);

}

$valores = [
$_POST["n1"],
$_POST["n2"],
$_POST["n3"]
];

echo "Média = ".media($valores);

?>