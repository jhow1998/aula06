<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conexao</title>
</head>
<body>
     <?php

       require("./inc/incluir.php");
        $conexao = new Conexao();
        $nome = "joseph";
        $email = 'sla';

        try{
            $cadastro = 'insert into tblusuario(nome,email) values(:nome,:email)';
            $cadastrar = $conexao->getconexao()->prepare($cadastro);
            $cadastrar->bindParam(':nome',$nome,PDO::PARAM_STR);
            $cadastrar->bindParam(':email',$email,PDO::PARAM_STR);
            $cadastrar->execute();
        } catch(PDOException $e){
          echo 'messagem'.$e->getMessage();
        }
        
       
     ?>
</body>
</html>