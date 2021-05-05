<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar dados</title>
    <link rel="stylesheet" href="static/css/alterarUsuario.css">
    <script src="static/javascript/form.js"></script> 
</head>
<body class="corpo">

    <div class="div-corpo-form">
    <div class="div-form">
    <h1 class="h1-cadastro">Alterar Dados</h1>
    <hr class="hr-cadastro">
    <br>
    <!--action=""  post="get"-->
    <form class="form" >
    <fieldset >
    <legend>Dados Pessoais</legend>
    <!--Nome-->
    <label class="labelNome"for="">Nome:</label>
    <input class="inputNome" id="nome" placeholder="Nome Completo:" type="text"></input>      
    <!--Bairro-->
    <label class="labelBairro" for="">Bairro:</label>
    <input class="inputBairro" id="bairro" placeholder="Bairro:" type="text" ></input>
    <!--Rua-->
    <label class="labelEndere" for="">Rua:</label>
    <input class="inputEndere" id="endereco" placeholder="Rua,Avenida,Travessa:" type="text"></input>
    <!--Numero-->
    <label class="labelNum" for="">Número:</label>
    <input class="inputNum" id="numero"placeholder="Número da residencia:" type="number" ></input>
    <!--Telefone-->
    <label class="labelTel" for="">Telefone:</label>
    <input class="inputTel"id="telefone" placeholder="Telefone-Fixo:" type="tel"></input>
    <!--Celular-->
    <label class="labelCel" for="">Celular:</label>
    <input class="inputCel" id="celular"placeholder="Celular:" type="tel" ></input>
    </fieldset>
    <fieldset >
    <!--E-mail-->
    <legend>E-mail</legend>
    <label class="labelEmail" for="">E-mail:</label>
    <input class="inputEmail"id="email" placeholder="E-mail:" type="email"></input>
    </fieldset>
    <fieldset>
    <legend> Imagem do perfil</legend>
    <input type="file" id="imagem"> <p>Tamanho recomendado:150px por 150px </p>
    <script>imagem();</script>
    </fieldset>
     <fieldset >
    <fieldset >
    <legend>Senha</legend>
    <!--Senha-->
    <label class="labelSenha" for="">Senha:</label>
    <input class="inputSenha" id="password" placeholder="Senha:" type="password"></input>
    <!--Confirma senha-->
    <label class="labelConSenha" for="">Confirma:</label>
    <input class="inputConSenha" id="confSenha" placeholder="Senha:" type="password"></input>
    </fieldset>
 
    <button class="btnEnviar" onclick="alterar();" >Alterar</button>
   
    
  
    </form><!--form-->
    </div> <!--div-form-->
    </div> <!--div-corpo-form-->  

</body>
</html>


