<?php
$cakeDescription = 'Xmas 2020';
?>
<!DOCTYPE html>
<html>

<head>

    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title[]') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" rel="stylesheet">




    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'bootstrap.min.css']) ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>

    <!-- /.navbar-header -->
    
    <nav class="main">
        <div class="container-red">
            <!-- <?= $this->Flash->render() ?> -->
            <?= $this->element('menu') ?>

    
    </nav>

    <!-- /.container -->

    <style>
        body{
            padding-top: 00px;
            margin-bottom: 00px;
        }
        
    .container-wrapper {
            background-color: lightyellow;
            /* height: 250px; */
        }

        .container-red {
            background-color: darkred;
            background-image: url(bg_01.png);
            height: 100%;
            margin-bottom: 0px;
            color: lightcyan;
            text-decoration: none;
           
        }
        .red{
            margin-left: 150px;
            margin-right: 150px;
        }

        a .container-red {
            color: hotpink;
        }

        .container-red a {
            color: lightgoldenrodyellow;
        }
    </style>

    <topo class="man">
        <div class="contaier-red">
            <!-- <?= $this->Flash->render() ?> -->
            <?= $this->element('topo', array (
            'cache' => true ))?>

    
    </topo>

        <!-- <div class="vc_btn3-container  mobile-button-center screen-1-button vc_btn3-inline" ><a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-btn-crello vc_btn3-color-btn-blue" href="https://crello.com/pt/artboard/?newDesign=true&#038;width=940&#038;height=788&#038;group=SM&#038;format=Facebook&#038;measureUnits=px&#038;sidebar=objects" title="" data-categ="landingIconsMaker" data-value="exploreButton1">Criar ícones</a></div><div class="vc_empty_space  space-sm-0"   style="height: 64px"><span class="vc_empty_space_inner"></span></div></div><div class="col-sm-12 col-lg-6 col-md-6 col-sm-offset-0 col-xs-12"><div class="vc_empty_space  space-sm-0"   style="height: 64px"><span class="vc_empty_space_inner"></span></div>
                            <div  class="wpb_single_image wpb_content_element vc_align_center">
                                
                                <figure class="wpb_wrapper vc_figure">
                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><noscript><img srcset="https://crello-wordpress.s3.eu-west-1.amazonaws.com/features/wp-content/uploads/2020/07/06131116/cool-icons-maker-300x199.png 300w, https://crello-wordpress.s3.eu-west-1.amazonaws.com/features/wp-content/uploads/2020/07/06131116/cool-icons-maker-600x398.png 600w, https://crello-wordpress.s3.eu-west-1.amazonaws.com/features/wp-content/uploads/2020/07/06131116/cool-icons-maker.png 1296w" sizes="(max-width: 414px) 300px, (max-width: 720px) 600px, 1024px" class="vc_single_image-img " src="https://crello-wordpress.s3.eu-west-1.amazonaws.com/features/wp-content/uploads/2020/07/06131116/cool-icons-maker.png" width="648" height="430" alt="cool icons maker" title="" /></noscript><img data-srcset="https://crello-wordpress.s3.eu-west-1.amazonaws.com/features/wp-content/uploads/2020/07/06131116/cool-icons-maker-300x199.png 300w, https://crello-wordpress.s3.eu-west-1.amazonaws.com/features/wp-content/uploads/2020/07/06131116/cool-icons-maker-600x398.png 600w, https://crello-wordpress.s3.eu-west-1.amazonaws.com/features/wp-content/uploads/2020/07/06131116/cool-icons-maker.png 1296w" data-sizes="(max-width: 414px) 300px, (max-width: 720px) 600px, 1024px" class="lazyload vc_single_image-img " src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20648%20430%22%3E%3C/svg%3E' data-src="/cool-icons-maker.png" width="648" height="430" alt="cool icons maker" title="" /></div>
                                </figure>
                            </div> -->

        </nav>

    </section>

    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>

    </main>








    <style>
        footer {
            align-items: center;
        }
    </style>
    <br>
    

    <footer class="main">
        <div class="container-red">
            <!-- <?= $this->Flash->render() ?> -->
            <?= $this->element('foot', array(
                'cache' => true
            )) ?>

    
    </footer>



</body>

</html>