<?php
  
   if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
   {
        
        include_once('config2.php');

        $email = $_POST['email'];
        $senha = $_POST['senha'];

      
        $sql = "SELECT * FROM clientes WHERE email = '$email' and senha = '$senha'";
        $result = $conexao->query($sql);

      

        if(mysqli_num_rows($result) < 1){

         
            header('Location: tela_login2.php');

        }else{
            
            header('Location: sistema2.php');

        }

   }else{
        header('Location: tela_login2.php');
   }


?>