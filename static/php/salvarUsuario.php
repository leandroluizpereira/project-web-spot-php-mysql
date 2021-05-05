<?php
$hostname="localhost";
$username="root";
$password="";
$database ="dbprojectweb";
$conexao = mysqli_connect($hostname,$username,$password,$database);
mysqli_set_charset($conexao,"utf-8");
if(isset($_POST ["btnSalvar"])){
    $nome = $_POST["tb_nome"];
    $bairro = $_POST["tb_bairro"];
    $rua = $_POST["tb_endereco"];
    $numero = $_POST["tb_numero"];
    $telefone = $_POST["tb_telefone"];
    $celular = $_POST["tb_celular"];
    $imagem = $_POST["tb_imagem"];
    $email = $_POST["tb_email"];
    $senha = $_POST["tb_senha"];
    $consenha = $_POST["tb_consenha"];
    $query ="insert into tbcadastro(nome,bairro,rua,numero,telefone,celular,foto,email,senha,confirma) values('$nome','$bairro','$rua','$numero','$telefone','$celular','$imagem','$email','$senha','$consenha')";
    $result = mysqli_query($conexao,$query);
if(mysqli_affected_rows($conexao)>0){
    ?><script>alert("REGISTRO SALVO COM SUCESSO!");
     
    </script><?php

  
}else{
    ?><script>alert("NÃO FOI SALVO!");</script><?php
}
}




?>