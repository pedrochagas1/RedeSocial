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
         <link rel="stylesheet" type="text/css" href="css/stylepagina1.css">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

         <title>Rede Social</title>
      </head>

      <body>
      <style>
          body{
            font-family: Arial;
          }

          * {
            box-sizing: border-box;
          }
          .img1 {
          padding: 20px;
          }
          .row1 {
          margin-right: -15px;
          margin-left: -15px;
          background-color: white;
          width:101,5%;
          height:140px;
          }
          /* Styles for wrapping the search box */

          .main {
              width: 70%;
              margin:0;
          }

          /* Bootstrap 3 text input with search icon */

          .has-search .form-control-feedback {
              right: initial;
              left: 0;
              color: #ccc;
          }

          .has-search .form-control {
              padding-right: 12px;
              padding-left: 34px;
          }
          .circle {
            width: 40px;
            height: 40px;
            border-radius: 50%; /* transforma a div em círculo */
            background-color: white; /* define a cor de fundo */
            border: 2px solid black; /* adiciona borda branca */
            box-shadow: 2px 2px 5px gray; /* adiciona sombra */
            padding:0px;
            position: absolute;
            right: 300px; /* posiciona a imagem 10px à direita */
            top: 15px; /* posiciona a imagem no topo */
          }
          .perfil{
            position: absolute; /* para posicionar a imagem dentro do círculo */
            top: 50%; /* centraliza a imagem verticalmente */
            left: 50%; /* centraliza a imagem horizontalmente */
            transform: translate(-50%, -50%); /* move a imagem para o centro */
            max-width: 200%; /* para evitar que a imagem ultrapasse o tamanho do círculo */
            max-height: 200%; /* para evitar que a imagem ultrapasse o tamanho do círculo */
            width:200%;
            height: 200%;
          }
          img{
           padding:10px;
          }
          .img-container{
            overflow: hidden;
            border: 5px solid white;
              
          }
          
          .img-container img{
            width: 100%;
            height: 100%;
            -webkit-transition: -webkit-transform .5s ease;
            transition: transform .5s ease;
          }
          
          .img-container:hover img{
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
          }
          .like-button {
            background-color: transparent;
            border: none;
            color: red;
            cursor: pointer;
            outline: none;
          }

          .fa-heart {
            font-size: 20px;
          }
      </style>

      <div class="container-fluid" >
        <div class="row1">
          <div class="col-sm-4">
            <img src="fotos/Logo1.png" width="35%">
          </div>
          <div class="col-sm-4">
            <img class="img1" src="fotos/icon_home.png" width="14%"> 
            <img class="img1" src="fotos/icon_glass.png" width="14%"> 
            <img class="img1" src="fotos/icon_send.png" width="14%"> 
           <a href="denuncia.php"> <img class="img1" src="fotos/denunciar.png" width="14%"> </a>
           <div>
           </div>
              <div class="main">
              <!-- Actual search box -->
                <div class="form-group has-feedback has-search">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
                    <input type="text" class="form-control" placeholder="Search">
                </div>
              </div> 
          </div>
          <div class="col-sm-4">
            <img class="img1" src="fotos/icon_chat.png" width="15%">
              <div class="circle">
                <img class="perfil" src="fotos/perfil.png">
              </div>
          </div>
         
          <a href="sair.php" class="btn btn-danger">Sair</a>
          <button id="toggle-btn">Mudar cor</button>
              
        </div>
     </div>
      <br><br>

     <div class="container">
      <div class="row">
        <div class="col-sm-4">
        <div class="img-container">
            <img src="fotos/foto1.jpg" width="100%">
        </div>
        </div>
        <div class="col-sm-4">
        <div class="img-container">
            <img src="fotos/foto2.jpg" width="100%" height="350px">
          </div>
        </div>
        <div class="col-sm-4">
        <div class="img-container">
            <img src="fotos/foto3.jpg" width="100%" height="250px">
          </div>
        </div>
      </div>

        <div class="row">
          <div class="col-sm-4">
          <div class="img-container">
            <img src="fotos/foto4.jpg" width="100%" height="250px">
          </div>
          </div>
          <div class="col-sm-4">
          <div class="img-container">
            <img src="fotos/foto5.jpg" width="100%" >
          </div>
          </div>
          <div class="col-sm-4">
          <div class="img-container">
            <img src="fotos/foto6.jpg" width="100%" heiht="100%">
          </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4">
          <div class="img-container">
            <img src="fotos/foto7.jpg" width="100%" height="250px">
            </div>
          </div>
          <div class="col-sm-4">
          <div class="img-container">
            <img src="fotos/foto8.jpg" width="100%" >
          </div>
          </div>
          <div class="col-sm-4">
          <div class="img-container">
            <img src="fotos/foto9.jpg" width="100%" heiht="100%">
          </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4">
          <div class="img-container">
            <img src="fotos/foto10.jpg" width="100%" height="250px">
            </div>
          </div>
          <div class="col-sm-4">
          <div class="img-container">
            <img src="fotos/foto11.jpg" width="100%" >
            </div>
          </div>
          <div class="col-sm-4">
          <div class="img-container">
            <img src="fotos/foto12.jpg" width="100%" heiht="100%">
          </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4">
          <div class="img-container">
            <img src="fotos/foto13.jpg" width="100%" >
            </div>
          </div>
          <div class="col-sm-4">
          <div class="img-container">
            <img src="fotos/foto14.jpg" width="100%" >
          </div>
          </div>
          <div class="col-sm-4">
          <div class="img-container">
            <img src="fotos/foto15.jpg" width="100%" heiht="100%">
            </div>
          </div>
        </div>
      </div>
  </div>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/scriptfundo.js"></script>
      </body>
    </html>