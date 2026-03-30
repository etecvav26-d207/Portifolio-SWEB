<?php

function soma($n){

$total = 0;

for($i=0;$i<=$n;$i++){
$total += $i;
}

return $total;

}

echo soma($_POST["n"]);

?>