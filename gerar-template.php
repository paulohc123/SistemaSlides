<?php 
include('cabecalho.php');
require('sessao.php');


if($_POST['intervalo'] == "") {
    $intervalo = $_POST['intervalo'];
}

else {
    $intervalo = $_POST['intervalo']*1000;
}



if(isset($_POST['modo'])){

    $modo = "true";
  

}
else {
    $modo = "false";
   
};





$arquivo = file_put_contents("arquivo.php",'<?php require("sessao.php");include("cabecalho.php"); $intervalo='.$intervalo.';'.'$modo="'.$modo.'";  ?>');

echo "<h1> Seu Slideshow foi criado, clique <a href='slideshow.php'> aqui <a> para acessa-lo <h1>";

include('footer.php');

?>

