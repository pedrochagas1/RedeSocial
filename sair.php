<?php
    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['senha']);   //unset destrói os dados
    header('Location: index.php')

?>