<head>
<link rel="icon" type="imagem/png" href="logoti.png"/>
<style>
body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
 
}
.login-box{
  width: 280px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: white;
}
.login-box h1{
  float: left;
  font-size: 40px;
  border-bottom: 6px solid #4caf50;
  margin-bottom: 50px;
  padding: 13px 0;
}
.textbox{
  width: 100%;
  overflow: hidden;
  font-size: 20px;
  padding: 8px 0;
  margin: 8px 0;
  border-bottom: 1px solid #4caf50;
}
.textbox i{
  width: 26px;
  float: left;
  text-align: center;
}
.textbox input{
  border: none;
  outline: none;
  background: black;
  color: white;
  font-size: 18px;
  width: 80%;
  float: left;
  margin: 0 10px;
}
.btn{
  width: 100%;
  background: none;
  border: 2px solid #4caf50;
  color: white;
  padding: 5px;
  font-size: 18px;
  cursor: pointer;
  margin: 12px 0;
}
</style>
<html>
  <head>
	<meta charset="UTF-8"></head>
<form action="" method="POST"> 
 <input type="hidden" name="recipient" value="abv.bruh@gmail.com">
 <input type="hidden" name="redirect" value="home.html"> 
 <input type="hidden" name="subject" value="mensagem">
 <input type="hidden" name="email" value="abv.bruh@gmail.com">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<div class="login-box">
  <h1>Cadastro</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" size="30" name="nome" placeholder="Seu Nome">
  </div>
  
    <div class="textbox">
    <i class="fas fa-email"></i>
    <input type="text" size="30" name="replyto" placeholder="Seu E-Mail"> 
	</div>
	
  <div class="textbox">
    <input type="text" size="35" name="Comentarios" placeholder="Comente"> 
  </div>

  <input type="submit" name="BTEnvia" value="Enviar" class="btn"> 
 <input type="reset" name="BTApaga" value="Apagar" class="btn">
</div>
  </body>
</html>


<?php
 require 'sql.php';

 if(isset($_POST["submit"])){
     $nome = $_POST["nome"];
     $email = $_POST["email"];
     $telefone = $_POST["telefone"];
     $mensagem = $_POST["mensagem"];
 foreach($mensagem as $row){
     $mensagem.= $row . ",";
 }
     $query = "INSERT INTO tb_container VALUES('', '$nome', '$email', ' $telefone', '$mensagem',)";
     mysqli_query($conn, $query);
     echo
     "
     <script> alerta('Cadastro Inserido com Sucesso!!!')</script>
     ";
 }
?>