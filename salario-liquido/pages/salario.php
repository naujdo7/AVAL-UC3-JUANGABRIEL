<?php
$valorHora = $_GET["valorHora"];
$horasTrabalho = $_GET["horasTrabalho"];
$salarioTotal = $horasTrabalho * $valorHora;
$mensagem;
if ($salarioTotal >= 2000) {
    $imposto = $salarioTotal * 0.05;
    $salarioTotal = $salarioTotal - $imposto;
    $mensagem = "Seu salário é acima de R$2000,00. Você terá que pagar 5% de imposto sobre o valor recebido.";
    $mensagem = "Após o desconto de 5% seu salário líquido é de: " . $salarioTotal . " Reais";
} else {
    $mensagem = "Você recebeu menos que R$2000,00 por isso está isento de impostos. Seu salário liquído é de: " . $salarioTotal . " Reais";
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Salário Líquído</title>
</head>

<body>
    <h1>Calculo Finalizado!</h1>
    <p> <?php echo $mensagem; ?> </p>
</body>

</html>