<?php
    session_start();
    //print_r($_SESSION);
    if((!isset($_SESSION['email']) == true ) and (!isset($_SESSION['senha']) == true )) //se nao existir a variavel email e senha
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);       //unset destrói os dados
        header('Location: login.php');  //retorna para login
    }
        $logado = $_SESSION['email'];
?>

<!DOCTYPE html>
    <html lang="pt-br">
      <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <title>LOJA</title>
      </head>
      <body>
         <a href="sair.php" class="btn btn-danger">Sair</a>


         

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
      </body>
    </html>