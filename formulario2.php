<?php

    if(isset($_POST['submit']))
    {
        include_once('config2.php');

        $Nome = $_POST['Nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['sexo'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];        
       
        $result = mysqli_query($conexao, "INSERT INTO clientes(Nome,email,senha,telefone,sexo,cidade,estado,endereco) 
        VALUES  ('$Nome','$email','$senha','$telefone','$sexo','$cidade','$estado','$endereco') ");
    
        header('Location: tela_login2.php');

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
        .box{
        background-color:rgb(165, 11, 119);
        position: absolute;
        top: 60%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 15px;
        border-radius: 15px;
        width: 20%;
        color: rgb(255, 255, 255);
        font-size: 150%;
        font-family: 'http://bebasfont.com/;
        


    }
    fieldset{
        border: 3px solid rgb(75, 2, 75);
    }
    legend{
        border: 1px solid rgb(75, 2, 75);
        padding: 10px;
        text-align: center;
        background-color: rgb(75, 2, 75);
        border-radius: 8px;
        color: rgb(255, 255, 255);
    }
    .inputBox{
        position: relative;
    }
    .inputUser{
        background-color: none;
        border: none;
        border-bottom: 1px solid rgb(255, 255, 255);
        outline: none;
        color: rgb(17, 16, 16);
        font-size: 15px;
        width: 100%;
        letter-spacing: 2px;
    }

    html {
    font-size: 10px;
    background-color: #a10a55;
  }
  
  nav {
    background-color: rgb(255, 255, 255);
    padding: 1%;
    
  }
  
  nav {
    height: 50px;
    background-color: #a10a55;
    display: flex;
    margin-bottom: 10px;
    border-radius: 10px;

  }
  
  nav ul {
    padding: 0;
    list-style-type: none;
    flex: 2;
    display: flex;
  }
  
  nav li {
    display: inline;
    text-align: center;
    flex: 1;
  }
  
  nav a {
    display: inline-block;
    font-size: 2rem;
    text-transform: uppercase;
    text-decoration: none;
    color: white;
  }
  
  nav form {
    flex: 1;
    display: flex;
    align-items: center;
    height: 100%;
    padding: 0 2em;
  }

  h1 {
    font-family: 'Sonsie One', cursive;
    color: #fff;
  }
  
 
  h1 {
    font-size: 4rem;
    text-align: center;
    color: rgb(230, 5, 144);
    text-shadow: 2px 2px 10px black;
  }
  nav{
    background-color: rgb(133, 5, 133);
    padding: 10px 60px;
    justify-content: space-between;
    align-items: center;
}
nav .logo a{
    text-decoration: none;
    color: #fff;
    font-size: 35px;
    font-weight: 400;
}


  
  html {
    font-size: 10px;
    background-image: url(Capturar2.jpg);
    min-height: 110%;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
  }
  
  
    </style>
</head>
<body>
    <p><a href="Home1.html">Voltar<a></p>
    <div class="box">
        <form action="formulario2.php" method="POST">
            <fieldset>
                <legend><b>Formulário de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="Nome" id="Nome" class="inputUser" required>
                    <label for="Nome" class="labelInput">Nome Completo</label> 
                </div>
                <br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="nome" class="labelInput">E-mail</label> 
                </div>
                <br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label> 
                </div>
                <br>
                
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="nome" class="labelInput">Telefone</label> 
                </div>
                <br>
               
                <p>Sexo</p>
                <input type="radio" id="feminino" name="sexo" value="feminino" required>
                <label for="feminino">Feminino</label>    
                <br>            
                <input type="radio" id="masculino" name="sexo" value="masculino" required>
                <label for="masculino">Masculino</label>  
                <br>             
                <input type="radio" id="outro" name="sexo" value="outro" required>
                <label for="outro">Outro</label>   
                <br>            
                <br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="nome" class="labelInput">Cidade</label> 
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="Estado" class="labelInput">Estado</label> 
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="nome" class="labelInput">Endereço</label> 
                </div>
                <br>
                <input type="submit" name="submit" id="submit">
                
            </fieldset>
        </form>
        
    </div>
</body>
</html>