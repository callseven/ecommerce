<?php
if (!defined('URL')) {
    header("Location: /");
    exit();
}
//echo "View HOME <br>";
//var_dump($this->Dados['sts_carousels']);

?>

<main role="main">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
                    
                </ol>
    </div>
    <div class="carousel-inner">
        <?php
        $cont_slide=0;
        foreach ($this->Dados['sts_carousels'] as $carousel) {
            extract($carousel);
            ?>
        <div class="carousel-item<?php if($cont_slide == 0) { echo 'active'; } ?>">
        <img class="first-slide img-fluid" src="<?php echo URL . '/assets/imagens/carousel/'.$id.'/'.$imagem; ?>" alt="Primeiro conteúdo">


        </div>
        <?php
        $cont_slide++;
        }
        ?>

    </div>
</main>                   
