<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulário de Extrato</title>
</head>
<body>
<h2>Formulário de Extrato</h2>
<form action="exibir_extrato.php" method="post">
  <label for="nome">Nome:</label><br>
  <input type="text" id="nome" name="nome"><br>
  <label for="cpf">CPF:</label><br>
  <input type="text" id="cpf" name="cpf"><br>
  <label for="valor">Valor:</label><br>
  <input type="number" id="valor" name="valor"><br><br>
  <input type="submit" value="Enviar">
</form>

</body>
</html>