<?php
   session_start();   //Forma de armazenar dados dos usuarios individualmente
   //print_r($_REQUEST);
   if(isset ($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
   {
    //Acessa
    include_once('config.php');
    $email = $_POST['email'];        
    $senha = $_POST['senha'];        

    //print_r('email: ' . $email);
    //print_r('<br>');
    //print_r('senha: ' . $senha);
    $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

    $result = $conexao->query($sql);
    //print_r($sql);
    //print_r($result);
    //verifica o numero de linha com a conta no banco de dados
    if(mysqli_num_rows($result) < 1 )
    {
       unset($_SESSION['email']);
       unset($_SESSION['senha']);      //unset destrói os dados
       header('Location: login.php');  //print_r('Não existe');
    }
    else
    {
       $_SESSION['email'] = $email;
       $_SESSION['senha'] = $senha;
       header('Location: sistema.php');    //print_r('Existe');
    }

   }
// else
// {
//Nao Acessa
// header('Location: login.php');
//}

?>