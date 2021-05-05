<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/telaUsuario.css">
    <script src="static/javascript/form.js"></script>
    <title>Tela Usuário</title>
</head>
</header> <!-- class cabecalho-->
<body class="corpo">
    

    <div class="div-corpo-form">
    <div class="div-form">
    <h1 class="h1-cadastro">Bem vindo (a) <!--<script>document.write(localStorage.nome);</script>--></h1>
    <hr class="hr-cadastro">
    <br>
    <!--action=""post="get"-->
    <form class="form" action="static/php/carregarUsuario.php">
       <div class="container-imagem">
            
               <!-- <script>carregarImagem();</script>-->
                <div class="div-imagemUsuario">
               <img id ="imagemUsuario" src="" alt="">
                </div>
       </div>
    <div class="container-dados">
        <h2>Dados Pessoais</h2>
           <script>ler();
        </script>
 
         <h2 id="txtMatricula">Matricula:</h2>
         <input type="text" name="tb_matricula">
         <input type="submit" name="btnSelecionar">Verificar</input>
        <!--Nome-->
        Nome:<h2 id="txtNome"></h2>
        <!--Bairro-->
        Bairro:<h2 id="txtBairro"> </h2>
        <!--Rua-->
        <h2 >Rua: </h2>
        <!--Numero-->
        <h2 >Número: </h2>
        <!--Telefone-->
        <h2 >Telefone:</h2>
        <!--Celular-->
        <h2 >Celular:  </h2>
        <h2 name="tb_email">E-mail:</h2>
        <div class="a-voltar"><a href="index_2.php">Voltar a página principal</a></div>
        <div class="a-alterar"><a href="alterarUsuario.php">Alterar dados do cadastro</a></div>
       
    </div><!--container-dados-->

    </form><!--form-->
    </div> <!--div-form-->
    </div> <!--div-corpo-form--> 

</html>

