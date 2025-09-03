<?php
$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$num3 = $_GET["num3"];

$pares = 0;
$impares = 0;

if ($num1 % 2 == 0) {
    $pares++;
} else {
    $impares++;
}

if ($num2 % 2 == 0) {
    $pares++;
} else {
    $impares++;
}

if ($num3 % 2 == 0) {
    $pares++;
} else {
    $impares++;
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Impares e Pares</title>
</head>

<body>
    <h1>Calculo Finalizado!</h1>
    <p><strong>Números digitados:</strong> <?php echo $num1 . ", " . $num2 . " e " . $num3; ?></p>
    <p><strong>Números pares:</strong> <?php echo $pares; ?></p>
    <p><strong>Números ímpares:</strong> <?php echo $impares; ?></p>
</body>

</html>