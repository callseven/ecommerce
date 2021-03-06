<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">        
        <title>Celke</title>
        <link rel="icon" href="<?php echo URLADM . 'assets/imagens/icone/favicon.ico'; ?>">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo URLADM . 'assets/css/signin.css'; ?>">
    </head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        
<body class="text-center">
    
    <form class="form-signin" method="POST" action="">
        <img class="mb-4" src="<?php echo URLADM . 'assets/imagens/logo_login/logo.png'; ?>" alt="Celke" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Novo Usuário</h1>
        <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        if (isset($this->Dados['form'])) {
            $valorForm = $this->Dados['form'];
        }
        ?>
        
        <div class="form-group">
            <label>Nome</label>
            <input name="nome" type="text" class="form-control" placeholder="Digite o nome completo" value="<?php if (isset($valorForm['nome'])) {
            echo $valorForm['nome'];
        } ?>"> 
        </div>
        <div class="form-group">
            <label>E-mail</label>
            <input name="email" type="text" class="form-control" placeholder="Digite o seu melhor e-mail" value="<?php if (isset($valorForm['email'])) {
            echo $valorForm['email'];
        } ?>"> 
        </div>
        <div class="form-group">
            <label>Usuário</label>
            <input name="usuario" type="text" class="form-control" placeholder="Digite o usuário" value="<?php if (isset($valorForm['usuario'])) {
            echo $valorForm['usuario'];
        } ?>"> 
        </div>
         <div class="form-group">
                <label>Senha</label>
                <input name="senha" type="password" class="form-control" placeholder="Digite a senha">
            </div>
            <input name="CadUserLogin" type="submit" class="btn btn-lg btn-success btn-block" value="Cadastrar">
        <p class="text-center"><a href="<?php echo URLADM . 'login' ?>">Logar</a> - 
        <a href="<?php echo URLADM . 'esqueceu-senha/esqueceu-senha' ?>">Esqueceu a senha?</a></p>
    
            
        
        </form>
</body>
