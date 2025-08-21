<h3> Este é um While </h3>

<?php
    $contador = 1;
        while ($contador <= 5) {
            echo "Número: $contador<br>";
            $contador++;
        } 
?>

<h3> Este é um Do While </h3>

<?php
    $contador = 1;
    do {
        echo "Número: $contador<br>";
        $contador++;
    }while ($contador <=5);
?>