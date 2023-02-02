<?php
  $url_imagem = $_POST['url_imagem'];
  $descricao_denuncia = $_POST['descricao_denuncia'];

  $dbHost = 'Localhost';
  $dbUsername = 'root';
  $dbPassword = '';
  $dbName = 'redesocial';

  $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

  if (!$conexao) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
  }

  // Inserir os dados na tabela de denúncias
  $sql = "INSERT INTO denuncia_form (url_imagem, descricao_denuncia)
          VALUES ('$url_imagem', '$descricao_denuncia')";

  if (mysqli_query($conexao, $sql)) {
    echo "Denúncia registrada com sucesso";
  } else {
    echo "Erro ao registrar denúncia: " . mysqli_error($conexao);
  }

  mysqli_close($conexao);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Denúncia de Imagem</title>
    <link rel="stylesheet" type="text/css" href="styledenuncia.css">
  </head>
  <body>
    <h1>Denúncia de Imagem</h1>
    <form id="denuncia-form"  method="POST">
      <label for="url_imagem">URL da Imagem:</label>
      <input type="text" id="url_imagem" name="url_imagem">

      <label for="descricao_denuncia">Descrição da Denúncia:</label>
      <textarea id="descricao_denuncia" name="descricao_denuncia"></textarea>

      <input type="submit" value="Enviar Denúncia">
    </form>
    <script src="scriptdenuncia.js"></script>
  </body>
</html>
