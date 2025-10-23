<?php
    $txt = "Feijão com farinha"; // Texto original

    $txt = str_replace('a', 'i', $txt); 
    $txt = str_replace('e', 'i', $txt); 
    $txt = str_replace('o', 'i', $txt); 
    $txt = str_replace('u', 'i', $txt); 

    echo $txt; // Saída: "benene" 