<?php
    $temp = $_POST['temp'];

    $fah = ($temp * 1.8) + 32;
    echo "<h2>A temperatura de $temp °C convertida para Fahrenheit é $fah °F</h2>";