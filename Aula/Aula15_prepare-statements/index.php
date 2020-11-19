<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke - Conn</title>
    </head>
    <body>
        
        <?php
        require './Conn.php';
        
        
        $conn = new Conn();
        $conn->getConn();
        
        var_dump($conn);

        $email = "cesar#celke.com.br";
        $usuario = "cesar";
        $senha = "1234";

        try {
            $resultcadastrar = "INSERT INTO usuarios (email, usuario, senha, created) VALUES (:email, :usuario, :senha, NOW())";
            $cadastrar = $conn->getConn()->prepare($resultcadastrar);

            $cadastrar->bindParam(':email', $email, PDO::PARAM_STR);
            $cadastrar->bindParam(':usuario', $usuario, PDO::PARAM_STR);
            $cadastrar->bindParam(':senha', $senha, PDO::PARAM_STR);

            $cadastrar->execute();


        } catch (Exception $ex) {

        }

        
        ?>
    </body>
</html>

