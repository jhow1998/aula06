<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sla</title>
</head>
<body>
    <?php

            require("./inc/incluir.php");
            $conexao = new Conexao();
            $nomesituacao = "roubo";
            $criadomen = '20/12/2021';

            try{
                $cadastro = 'insert into tblsituacaousuario(nomesituacao,criadomen) values(:nomesituacao,:criadomen)';
                $cadastrar = $conexao->getconexao()->prepare($cadastro);
                $cadastrar->bindParam(':nomesituacao',$nomesituacao,PDO::PARAM_STR);
                $cadastrar->bindParam(':criadomen',$criadomen,PDO::PARAM_STR);
                $cadastrar->execute();

            } catch(PDOException $e){

            echo 'messagem'.$e->getMessage();

            }




    ?>
</body>
</html>