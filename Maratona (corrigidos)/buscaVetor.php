<?php
    $num = $_POST['num'];
    $vetor = [2, 5, 9, 14, 27, 36, 41, 58, 61, 77];

    $encontrou = false;

    for ($i = 0; $i < count($vetor); $i++){
        if ($vetor[$i] == $num) {
            $encontrou = true;
            break;
        }
    }

    if ($encontrou) {
        echo "<h2> O número $num está presente no vetor </h2>";
    }
    else {
        echo "<h2> O número $num não está presente no vetor </h2>";
    }
?>