<?php
    $Celcius = 37.841;
    $Fahrenheit = 9/5 * $Celcius + 32;
    $Reamur = 4/5 * $Celcius;
    $Kelvin = $Celcius + 273;

    echo "Fahrenheit (F) = ";
    echo number_format ("$Fahrenheit",4);
    echo "<br/>";
    echo "Reamur (R) = ";
    echo number_format ("$Reamur",4);
    echo "<br/>";
    echo "Kelvin (K) = ";
    echo number_format ("$Kelvin",4);
?>
