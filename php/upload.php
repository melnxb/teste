<?php
    /*
    cadastro de produtos.

    $arquivo = $_FILES["arquivo"];//vetor

    $novo_arquivo = "../upload/".$arquivo["index.html"] ; //name
    
    move_uploaded_file($arquivo["tmp_name"], $novo_arquivo); //["tmp_name"]
    */
    //print_r($arquivo);
    //permitir apenas entradas e arquivos png
    if($arquivo["type"]=="image/png") {
        $novo_arquivo = "../upload/".$arquivo["name"];
        move_uploaded_file($arquivo["tmp_name"], $novo_arquivo);
        
        $mensagem = "Upload realizaod com sucesso!";

    } else {
        $mensagem = "Apenas imagens em png!";
    }

    $json = json_encode($mensagem);
    echo $json;


?>