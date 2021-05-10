<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Importaçâo Css-->
    <link rel="stylesheet" href="static/css/Cadastro.css">
       <!--Importaçâo Css-tablet-->
       <link rel="stylesheet" href="static/css/tablet/Cadastro-tablet.css">
     <!--Importaçâo Css celular-->
     <link rel="stylesheet" href="static/css/celular/Cadastro-celular.css">
    <!--Importaçâo Javascript-->
    <script src="static/javascript/funcoes.js"></script>
    <script src="static/javascript/form.js"></script>
    <title>Cadastro</title>
</head>
<header class="cabecalho" id ="home">

</header> <!-- class cabecalho-->
<body class="corpo">
     
    <div class="div-corpo-form">
    <div class="div-form">
    <h1 class="h1-cadastro">Cadastro</h1>
    <hr class="hr-cadastro">
    <br>
    <!-- action="exemplo_funcao.php" = importar arquivo php para o fomulario -->
    <!--  post=enviar os dados para o banco de dados-->
    <form class="form" action="static/php/salvarUsuario.php" method="post">
    <fieldset >
    <legend>Dados Pessoais</legend>
    <!--Nome-->
    <label class="labelNome"for="">Nome:</label>
    <input class="inputNome" id="nome" placeholder="Nome Completo:" type="text" name="tb_nome"></input>      
    <!--Bairro-->
    <label class="labelBairro" for="">Bairro:</label>
    <input class="inputBairro" id="bairro" placeholder="Bairro:" type="text" name="tb_bairro" ></input>
    <!--Rua-->
    <label class="labelEndere" for="">Rua:</label>
    <input class="inputEndere" id="endereco" placeholder="Rua,Avenida,Travessa:" type="text" name="tb_endereco"></input>
    <!--Numero-->
    <label class="labelNum" for="">Número:</label>
    <input class="inputNum" id="numero"placeholder="Número da residencia:" type="number" name="tb_numero" ></input>
    <!--Telefone-->
    <label class="labelTel" for="">Telefone:</label>
    <input class="inputTel"id="telefone" placeholder="Telefone-Fixo:" type="tel" name="tb_telefone"></input>
    <!--Celular-->
    <label class="labelCel" for="">Celular:</label>
    <input class="inputCel" id="celular"placeholder="Celular:" type="tel" name="tb_celular"></input>
    </fieldset>
    <fieldset class="fieldset">
    <legend>Imagem do perfil</legend>
    <input type="file" id="imagem" class="inputfile value="download" name="tb_imagem"> <p class="p-imagem">Carregue a Imagem do perfil.Tamanho recomendado:150px por 150px </p>
    <script>imagem();</script>
    </fieldset>
    <fieldset >
    <!--E-mail-->
    <legend>E-mail</legend>
    <label class="labelEmail" for="">E-mail:</label>
    <input class="inputEmail"id="email" placeholder="E-mail:" type="email" name="tb_email"></input>
    </fieldset>
    <fieldset >
    <legend>Senha</legend>
    <!--Senha-->
    <label class="labelSenha" for="">Senha:</label>
    <input class="inputSenha" id="password" placeholder="Senha:" type="password" name="tb_senha"></input>
    <!--Confirma senha-->
    <label class="labelConSenha" for="">Confirma:</label>
    <input class="inputConSenha" id="confSenha" placeholder="Senha:" type="password" name="tb_consenha"></input>
    </fieldset>
      

    <fieldset>
    <legend>Contrato</legend>
  
    <input class="check" id="checkTermo" type="checkbox"  onclick="ch();">
    <label class="labelConSenha" for="">Lê e aceito os  <a href="termos.html">Termos de uso</a></label>
    </fieldset>
    <!-- <a href="telaUsuario.php?email= /*?php echo 'fernanda@gmail.com'?> */" type="submit" name="btnSalvar" class="btnEnviar" id="btn" >Cadastrar</a> -->
   <input type ="submit" name="btnSalvar" class="btnEnviar" id="btn" onclick="salvar();"></input>
    <div class="a-voltar"><a href="index_2.php">Voltar a tela principal</a></div>

  
    </form><!--form-->
    </div> <!--div-form-->
    </div> <!--div-corpo-form-->  

</body>
</html>


