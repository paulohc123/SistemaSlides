<?php

include('arquivo.php');


echo "<div class='container'>" ;
echo  '<h1 class="mx-auto" style="width: 200px;"> Slideshow </h1>';
echo   '<div id="carouselExampleFade" class="carousel slide" data-ride="carousel">';
echo   ' <div class="carousel-inner"> ';




foreach ($slides as $chave => $slide){

   if($chave == 0) {

    $classeAtivo = "active";
     
   

  }

  else {
    $classeAtivo = ""  ;
  
  }
  echo '<div class="carousel-item ' .$classeAtivo.' ">';
  echo '<img  src="slides/'.$slide['imagem'].'" class = "slides" " >';
  echo '<div class="carousel-caption d-none d-md-block">';
  echo '<h5>'.$slide['nome']. '</h5>';
  echo '<p>'.$slide['descricao']. '</p>';
  echo '</div>';
  echo '</div>';
    
    
    
    };

    echo'</div>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div> ';  


  echo '<br><a href="index.php"  class="btn btn-primary btn-lg btn-block"><i class="fas fa-long-arrow-alt-left"></i></a><br>'; 

  echo '</div>';

 


    
?>



 <?php


 
 include('footer.php');

 echo "<script>";
  
 echo "
     $('.carousel').carousel({
       interval:".$intervalo.",
       wrap:".$modo."
       
 
 
}); </script>"; 
 ?>
     


