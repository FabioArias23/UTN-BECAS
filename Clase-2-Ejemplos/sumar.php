<?php
if (isset($_POST['num1']) && isset($_POST['num2'])) {
    $numero1 = $_POST['num1'];
    $numero2 = $_POST['num2'];
    $suma = $numero1 + $numero2;
    echo "<h1>El resultado de la suma es: " . $suma . "</h1>";
} else {
    echo "<h1>Por favor, ingresa dos números para sumar.</h1>";
}
?>