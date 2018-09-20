<?php 

session_start();
$slides = isset($_SESSION['slides'])?$_SESSION['slides']:array();
    
if ($_POST){
$acao = $_POST['acao'];


    if ($acao == 'incluir' ){
 
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
 
            if ($_FILES['imagem']['error'] == 0){
                $origem = $_FILES['imagem']['tmp_name'];
                $destino = 'slides/'.$_FILES['imagem']['name'];
                move_uploaded_file($origem,$destino);
                $slides[] = array(
                    'nome' => $titulo,
                    'descricao' => $descricao,
                    'imagem' => $_FILES['imagem']['name']
                ); 
        }
    }
    elseif ($acao == 'excluir'){
        $indice = $_POST['id'];
        unset($slides[$indice]);
    }

    elseif ($acao == 'destruirSessao'){
        $slides = array();
		session_destroy();
    }

    if ($acao == 'descer'){
        $indice = $_POST['id'];
        $temp = $slides[$indice];
        $slides[$indice] = $slides[$indice+1];
        $slides[$indice+1] = $temp; 
          
    }
    elseif ($acao == 'subir'){
        $indice = $_POST['id'];
        $temp = $slides[$indice];
        $slides[$indice] = $slides[$indice-1];
        $slides[$indice-1] = $temp; 
        
        

    }
    

    
    $_SESSION['slides'] = $slides;


 
    

}



?>