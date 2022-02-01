<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php

            require("./inc/incluir.php");
            $conexao = new Conexao();
            $nomenivelacesso = "Administrado";
            $criadomen = '2022-01-31';

            try{
                $cadastro = 'insert into tblniveacesso(nomenivelacesso,criadomen) values(:nomenivelacesso,:criadomen)';
                $cadastrar = $conexao->getconexao()->prepare($cadastro);
                $cadastrar->bindParam(':nomenivelacesso',$nomenivelacesso,PDO::PARAM_STR);
                $cadastrar->bindParam(':criadomen',$criadomen,PDO::PARAM_STR);
                $cadastrar->execute();

            } catch(PDOException $e){

            echo 'messagem'.$e->getMessage();

            }




        ?>
</body>
</html>

    



