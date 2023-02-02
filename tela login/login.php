<!DOCTYPE html>
    <html lang="pt-br">
       <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <link rel="stylesheet" type="text/css" href="stylelogin.css">
         <title>Login</title>
        </head>

        <body>

            <div class="login">
                <form action="testelogin.php" method="POST">
                    <h1>LOGIN</h1>
                    <input type="text" name="email" placeholder="Email">
                    <br><br>
                    <input type="password" name="senha" placeholder="Senha">
                    <br><br>
                    <input  class="inputsubmit" type="submit" name="submit" value="Enviar">
                    <br><br>
                    <form>
                      <a href="sair.php">
                        <input class="inputbutton" type="button" value="Voltar">
                      </a>
                    </form>
                </form>
            </div>   
        </body>
    </html>
