

<?php
$hostname="localhost";
$username="root";
$password="";
$database ="dbprojectweb";
$conexao = mysqli_connect($hostname,$username,$password,$database);
mysqli_set_charset($conexao,"utf-8");
if(isset($_POST ["btnSelecionar"])){
    $query ="select * from tbcadastro where matricula={$_POST["tb_matricula"]})";
    $result = mysqli_query($conexao,$query);
    if($row = mysqli_fecth_assoc($result))?>
        <script>
           var txtnom = document.getElementById("txtNome");
           var txtbai = document.getElementById("txtBairro");
           txtnom.value =<?php echo $row["nome"]?>
           txtbai.value =<?php echo $row["bairro"]?>
           </script>
           <?php
    }else{
        ?><script>alert("Nenhum registro foi encontrado!");</script><?php
}
echo ("muito bem");
}


?>