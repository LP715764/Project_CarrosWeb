<!DOCTYPE html>
<<meta charset="utf-8">
    <style>
        body{
            background:linear-gradient(72deg, #375b2e 1%, #b8dea4 99%);
        }
        #tela{
            background-color: #FFFFFF;
            padding: 70px;
            width: 400px;
            height: 500px;
            position: absolute;
            top: 80px;
            margin-left: 450px;
            border-radius: 40px;
            

        }
    </style>
</head>
<style media="screen">
    label{
        display: block;
    }
</style>
<body>
    <div id="tela">
    <b2>Cadastro<br><br>
            <form class="Cadastro" action="" method="post" autocomplete="off">
                <label for="">Nome</label>
                <input type="text" name="nome" minlength="3" maxlength="64" placeholder="Digite seu nome..."><br>
                <label for="">Email</label>
                <input type="text" name="email" minlength="10" maxlength="64" placeholder="Digite seu email..."><br>
                <label for="">Senha</label>
                <input type="password" name="password"><br>
                <label for="">Telefone</label>
                <input type="text" name="telefone" placeholder="Ex.(12)3456-7890"><br>
                <label for="">Endereço</label>
                <input type="text" name="endereco" placeholder="rua, avenida, bairro, cidade..."><br>
                <label for="">Complemento</label>
                <input type="text" name="complemento" placeholder="casa, apartamento, studio, lofti..."><br>
                <label for="">CEP</label>
                <input type="text" name="cep" placeholder="Digite o seu cep..."><br>
                <label for="">Veiculo</label>
                <input type="text" name="carro" minlength="10" maxlength="64"><br>
                <label for="">Ano</label>
                <input type="text" name="ano" minlength="4" maxlength="8"><br>
                </select><br>
                <center><button type="submit" name="submit" value="submit"style="font-size:18px;color:#0000FF">Submit</button>
            </form>
        </div>
    </body>
</html>

<?php
 require 'sql.php';

 if(isset($_POST["submit"])){
     $nome = $_POST["nome"];
     $email = $_POST["email"];
     $senha = $_POST["senha"];
     $telefone = $_POST["telefone"];
     $endereco = $_POST["endereco"];
     $complemento = $_POST["complento"];
     $cep = $_POST["cep"];
     $veiculo = $_POST["veiculo"];
     $ano = $_POST["ano"];
 foreach($ano as $row){
     $ano.= $row . ",";
 }
     $query = "INSERT INTO tb_container VALUES('', '$nome', '$email', '$senha', ' $telefone', '$endereco', '$complento', ' $cep', '$veiculo', '$ano',)";
     mysqli_query($conn, $query);
     echo
     "
     <script> alerta('Cadastro Inserido com Sucesso!!!')</script>
     ";
 }
?>