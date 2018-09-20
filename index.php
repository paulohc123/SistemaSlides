<?php 
include('cabecalho.php');
require_once('sessao.php');

if($slides != null ){
    $classe = "enabled";

}
else {
    $classe = "disabled";

}
?>




<section class="container ">
    <div class=" container span7 text-center col-md-4 col-md-offset-3">
    <form class="form1" method="POST" action="gerar-template.php">
                <div class="form-group row">
                    <label for="intervalo"   class=" col-sm-7 col-form-label">Intervalo de Repetição: </label>
                <div class="col-sm-3">
                    <input type="number"  value = "5" placeholder = "5" name="intervalo" class="form-control" id="intervalo">
                </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-7">Modo de apresentação: </label>
                <div class="col-sm-2">
                    <div class="form-check">
                        <input class="form-check-input"  checked name="modo" value="true" type="checkbox" id="gridCheck1">
                        <label class="form-check-label" for="gridCheck1">Cíclica</label>                  
                    </div>
                </div>
                </div>
                
                <button  class="botao btn btn-outline-primary btn-lg"><a href="addslide.php"   >  <i class="fas fa-plus"></i> Adicionar Slide </a></button>

               
                
                <button <?= $classe ?>   type="submit" name = "acao"    class=" btn btn-outline-primary btn-lg"><i class="far fa-save"></i> Salvar Configurações do Slideshow </button>

               

    </form>      
            
        </div>

    <section class="secao2">
        <div class="container">
        <fieldset class="border p-4">
                <legend> Slides </legend>
        <table class="table">
        <tbody>
            <?php 

          
            $tamanhoArray = count($slides);

                    foreach($slides as $chave => $slide){
                       
                       
                        
                        echo "<tr><td class='imagem'><img src='slides/".$slide['imagem']."' height='140px' width='140px'></td>"; 
                        echo '<td class="titulo"><h3>'.$slide['nome'].'</h3>';
                        echo '<p>'.$slide['descricao'].'</p></td>';
                        echo "<td><form method='post'><input type='hidden' name='acao' value='excluir'><input type='hidden' name='id' value='$chave'><button class='btn btn-danger'><i class='fas fa-trash-alt'></i></button></form></td>";
                        if($chave == 0) {
                            echo "<td><form method='post'><input type='hidden' name='acao' value='descer'><input type='hidden' name='id' value='$chave'><button class='btn btn-dark'><i class='fas fa-arrow-down'></button></form></td></tr>";
                        } 
                        elseif($chave  == $tamanhoArray - 1   ){
                            echo "<td><form method='post'><input type='hidden' name='acao' value='subir'><input type='hidden' name='id' value='$chave'><button class='btn btn-dark'><i class='fas fa-arrow-up'></i></button></form><br>";
                        }
                       
                        else {
                                echo "<td><form method='post'><input type='hidden' name='acao' value='subir'><input type='hidden' name='id' value='$chave'><button class='btn btn-dark'><i class='fas fa-arrow-up'></i></button></form><br>";
                                echo "<form method='post'><input type='hidden' name='acao' value='descer'><input type='hidden' name='id' value='$chave'><button class='btn btn-dark'><i class='fas fa-arrow-down'></button></form></td></tr>";
                             
                        }                 
                       
                    
                    
                }                 
            ?>    
        </tbody>
        </table>
        </fieldset>
        <?php 
            
         
           

            

            echo '<form method="post">    
            <button name="acao"'.$classe.' value = "destruirSessao" class="botaoSessao btn btn-danger btn-lg"><i class="fas fa-eraser"></i> Deletar Sessão</button>
            </form>';

           
        
        
  
        ?>

    </section>
    
    
    
            
       
  
</div>

   
</section>   
    
    
    


 <?php
 
 include('footer.php');
 ?>
     
