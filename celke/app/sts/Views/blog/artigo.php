<?php
if (!defined('URL')) {
    header("Location: /");
    exit();
}
?>
<main role="main">

    <div class="jumbotron blog">
        <div class="container">
            <div class="row">
                <div class="col-md-8 blog-main">
                    <?php
                    if (!empty($this->Dados['sts_artigos'][0])) {
                        extract($this->Dados['sts_artigos'][0]);
                        ?>
                        <div class="blog-post">
                            <h2 class="blog-post-title"><?php echo $titulo; ?></h2>
                            <img src="<?php echo URL . 'assets/imagens/artigo/' . $id . '/' . $imagem; ?>" class="img-fluid" alt="<?php echo $titulo; ?>" style="margin-bottom: 20px;">
                            <?php echo $conteudo; ?>
                        </div>
                        <nav class="blog-pagination">
                            <?php
                            if (!empty($this->Dados['artAnterior'][0])) {
                                extract($this->Dados['artAnterior'][0]);
                                echo "<a class='btn btn-outline-primary' href='" . URL . "artigo/$slug'>Anterior</a>";
                            } else {
                                echo "<a class='btn btn-outline-secondary disabled' href='#'>Anterior</a>";
                            }
                            if (!empty($this->Dados['artProximo'][0])) {
                                extract($this->Dados['artProximo'][0]);
                                echo "<a class='btn btn-outline-primary' href='" . URL . "artigo/$slug'>Próximo</a>";
                            } else {
                                echo "<a class='btn btn-outline-secondary disabled' href='#'>Próximo</a>";
                            }
                            ?>
                        </nav>
                        <?php
                    }else{
                        echo "<div class='alert alert-danger'>Erro: Artigo não encontrado!</div>";
                    }
                    ?>      
                </div>
                <aside class="col-md-4 blog-sidebar">
                    <?php if (!empty($this->Dados['sobreAutor'][0])) { ?>
                        <div class="p-3 mb-3 bg-light rounded">
                            <?php extract($this->Dados['sobreAutor'][0]); ?>
                            <h4 class="font-italic"><?php echo $titulo; ?></h4>  
                            <img src="<?php echo URL . 'assets/imagens/sobre_autor/' . $id . '/' . $imagem; ?>" class="img-fluid" alt="<?php echo $titulo; ?>">
                            <p class="mb-0"><?php echo $descricao; ?></p>

                        </div>
                    <?php } ?>

                    <div class="p-3">
                        <h4 class="font-italic">Recentes</h4>
                        <ol class="list-unstyled mb-0">
                            <?php
                            foreach ($this->Dados['artRecente'] as $artigoRec) {
                                extract($artigoRec);
                                echo "<li><a href='" . URL . "artigo/$slug'>$titulo</a></li>";
                            }
                            ?>
                        </ol>
                    </div>

                    <div class="p-3">
                        <h4 class="font-italic">Destaque</h4>
                        <ol class="list-unstyled">
                            <?php
                            foreach ($this->Dados['artDestaque'] as $artigoDest) {
                                extract($artigoDest);
                                echo "<li><a href='" . URL . "artigo/$slug'>$titulo</a></li>";
                            }
                            ?>
                        </ol>
                    </div>
                </aside>

                <div class='col-md-8 blog-main'>
                <span id="msg_comentario"></span>
                <?php
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                //var_dump($_SESSION['form']);
                if (!empty($this->Dados['sts_artigos'][0])){
// var_dump($this->Dados['sts_artigos'][0]);
                
                ?>
                <h3>Participe da Discussão</h3>
                <form method="POST" action="<?php echo URL;?>comentario/index">
                <input type="hidden" name="sts_artigo_id" value="<?php echo $this->Dados['sts_artigos'][0]['id']; ?>">
                <input type="hidden" name="slug" value="<?php echo $this->Dados['sts_artigos'][0]['slug']; ?>">
                <div class="form-group row">
    <label  class="col-sm-2 col-form-label"><span class="text-danger">*</span>Nome</label>
    
    <div class="col-sm-10">
      <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome Completo" value="<?php if(isset($_SESSION['form']['nome'])) {echo $_SESSION['form']['nome'];} ?>">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label"><span class="text-danger">*</span>Apelido</label>
    <div class="col-sm-10">
      <input type="text"  name="apelido" class="form-control" id="apelido" placeholder="Apelido">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label"><span class="text-danger">*</span>Email</label>
    <div class="col-sm-10">
      <input type="email"  name="email" class="form-control" id="email" placeholder="Email">
    </div>
  </div>
  <div class="form-group row">
  <label for="conteudo" class="col-sm-2 col-form-label"><span class="text-danger">*</span>Conteúdo</label>
  <div class="col-sm-10">
    <textarea class="form-control" name="conteudo" id="conteudo" rows="3"></textarea>
    </div>                            
  </div>
  <p>
        <span class="text-danger">*</span>Campo obrigatório
  </p>
        <input name="CadComent" type="submit" class="btn btn-warning" value="Cadastrar">
</form>
<br><hr><br>

<h2>Comentários</h2>
<p><br></p>

                <?php
                }
                if (!empty($this->Dados['sts_coment']['0'])) {
                    //  var_dump($this->Dados);
                    // echo "<div class='col-md-8 blog-main'>";
                    foreach ($this->Dados['sts_coment'] as $comentario){
                        extract($comentario);
                        echo "<div class='media'>";
                        if(!empty($imagem_user)){
                            echo "<img class='mr-3' src='".URLADM."assets/imagens/usuario/$id_user/$imagem_user'  alt='$apelido' width='30' height='30'>";

                        }else{
                            echo "<img class='mr-3' src='".URLADM."assets/imagens/usuario/icone_usuario.png'  alt='$apelido' width='30' heigth='30'>";

                        }
                        echo "<div class='media-body'>";
                            echo "<h6 class='mt-0'>$apelido</h6>";
                        echo $conteudo. "<br><br>";
                        echo "</div>";
                        echo "</div>";
                    }
                    
                }
                ?>


    

            </div>
            </div>
        </div>
    </div>					

</main>