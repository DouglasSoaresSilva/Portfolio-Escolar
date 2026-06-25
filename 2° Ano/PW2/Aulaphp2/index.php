<html>
<head>
<title>PHP</title>
<link rel="stylesheet" href="index.css">

</head>
<body>
    <?php
// Definição das variáveis
$nome = "Douglas";           // Variável que guarda o primeiro nome
$sobrenome = "Soares Silva"; // Variável que guarda o sobrenome
$idade = "15 anos";                 // Variável com a idade
$data_nascimento = "20-03-2010"; // Variável com a data de nascimento
// Exibição na tela com os rótulos
echo "<h1>Olá!</h1>";
echo "<h2><br>Meu nome completo é: " . $nome . " " . $sobrenome . ". </h2>";
echo "<h2><br>A minha idade é: " . $idade . ".</h2>";
echo "<h2><br>E a minha data de nascimento é: " . $data_nascimento . ". </h2>";
?>
</body>
</html>