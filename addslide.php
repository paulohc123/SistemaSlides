<?php

include('cabecalho.php');



?>

<div class="container span7 text-center col-md-6 col-md-offset-3">
    
    <form enctype= multipart/form-data method="post" action="index.php">
    <fieldset class="border p-4">
        <legend> Adicionar Slide </legend>
        <div class="form-group row">
            <label  class="col-sm-2 col-form-label">Título:</label>
        <div class="col-sm-10">
            <input required name="titulo" type="text" class="form-control">
        </div>
        </div>  
        <div class="form-group row">
             <label class="col-sm-2 col-form-label" >Descrição:</label>
            <textarea name="descricao" class="form-control" rows="3"></textarea>
        </div>
         <div class="form-group row">
            <label  class="col-sm-2 col-form-label">Imagem de fundo:</label>
        
        <div class="arquivo col-sm-8">
            <input required type="file" name="imagem" class="form-control-file">
        </div>
        </div>      
            <div class="form-group row">
            <div class="col-sm-12">        
                <button type="submit" name = "acao" value = "incluir"  class="salvar btn btn-outline-primary btn-lg"><i class="far fa-save"></i> Salvar slide</button>
            </div>
        </div>    
</div>
      </form>
    
</div>

<?php

include('footer.php');

?>



