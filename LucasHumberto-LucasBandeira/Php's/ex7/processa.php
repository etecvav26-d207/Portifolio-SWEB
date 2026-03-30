<?php

$nums = [
$_POST["v1"],
$_POST["v2"],
$_POST["v3"],
$_POST["v4"],
$_POST["v5"],
$_POST["v6"],
$_POST["v7"],
$_POST["v8"]
];

$pos = [];
$neg = [];

foreach($nums as $n){

if($n >= 0){
$pos[] = $n;
}else{
$neg[] = $n;
}

}

echo "Positivos: ";
print_r($pos);

echo "<br>Negativos: ";
print_r($neg);

?>