<!DOCTYPE html> <!-- Declaração do tipo de documento -->
<html lang="pt-br"> <!-- Início do HTML com idioma português -->
<head>
<meta charset="UTF-8"> <!-- Define o conjunto de caracteres como UTF-8 -->
<title>Formulário de Cadastro</title> <!-- Título da aba do navegador -->
<link rel="stylesheet" href="style.css"> <!-- Link para o arquivo de estilo CSS -->
</head>
<body>
<div class="container"> <!-- Div com classe container para centralizar o conteúdo -->
<h2>login do Usuário</h2> <!-- Título da página -->
<form action="conexaoUsuario.php" method="POST"> <!-- Formulário que envia os dados para
salvar.php via POST -->
<label for="nomeUsuario">Nome do usuario:</label> <!-- Rótulo do campo Nome -->
<input type="text" id="nomeUsuario" name="nomeUsuario" required> <!-- Campo de texto
obrigatório para Nome -->

<label for="senha">Senha:</label><br>
<input type="password" id="senha" name="senha" required>

<input type="submit" value="Fazer pedido"><!-- Botão para enviar o formulário -->

<a href="cadastroUsuario.php">
<input type="button" value="fazer cadastro">
</a>

</form>
</div>
    
</body>
</html>