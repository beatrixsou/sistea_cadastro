<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <style>
body{
          background-color: rgb(112, 5, 98);
        }
  
       
        div{
            background-color: rgba(165, 11, 119);
            position: absolute;
            border-radius: 25px;
            border-style: solid;
            border-color: black;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 50px;
            color: white;
            font-size: 20px;
        }
        input{
            border-radius: 5px;
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        .inputSubmit{
            background-color: rgb(126, 5, 110);
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
        }
        .inputSubmit:hover{
            background-color: rgb(52, 64, 236);
            cursor: pointer;
        }
 
   

    </style>
</head>

<body>
     <p><a href="Home1.html">Voltar<a></p>
<div>
    <h1>Login</h1>
    <form action="testelogin2.php" method="POST">
        <input type="email" name="email" placeholder="Email">
        <br><br>
         <input type="password" name="senha" placeholder="Senha">
        <br><br>
    <input class="inputSubmit" type="submit" name="submit" value="Enviar">
    <br><br>

    </form>
    </div>

</body>
</html>