<?php
$numero = $_GET["numero"];
$operador = $_GET["operador"];
$repetir;
$resultado;
$mensagem ="";
if ($operador == 1) {
    for ($repetir = 1; $repetir <= 10; $repetir++) {
        $resultado = $numero + $repetir;
        $mensagem .= $numero . " + " . $repetir . " = " . $resultado . "<br>";


    }
} else {
    for ($repetir = 10; $repetir >= 1; $repetir--) {
        $mensagem .= $numero . " - " . $repetir . " = " . $numero . "<br>";
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Adição e Subtração</title>
</head>

<body>
    <h1>Calculo Finalizado!</h1>
    <ul>
        <?php echo $mensagem; ?>
    </ul>
</body>

</html>