<?php

require "./inc/incluir.php";

$conexao = new Conexao();

$idsituacaousuario = "2";

try{
    $cadastro = "DELETE FROM tblsituacaousuario WHERE idsituacaousuario=:idsituacaousuario";
    $cadastrar = $conexao->getConexao()->prepare($cadastro);
    $cadastrar->bindParam(':idsituacaousuario',$idsituacaousuario, PDO::PARAM_STR);
    $cadastrar->execute();

    if($cadastrar->rowCount()):
        echo "Deletado com sucesso";

    endif;
}

catch(PDOException $e){
    echo "Mensagem: ". $e->getMessage();
}

?>
