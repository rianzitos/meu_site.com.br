<?php
    $resultado=1;
    $numero =$_POST['numero'];
    for($i = 1; $i <= $numero; $i++){
        $resultado *=$i;
}
    echo "$numero = $resultado";
?>