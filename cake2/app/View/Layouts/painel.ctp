
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        XMAS PAINEL
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

	<?= $this->Html->css(['normalize.min', 'milligram.min', 'cake',  'bootstrap.min.css']) ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>


<body>

<nav class="navbar navbar-expand-lg navbar-light bg-transparent container">
  <!-- <a class="navbar-brand" href="#">Navbar w/ text</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse red" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/cake2/painel">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/cake2/painel/mapa">Localização</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/cake2/painel/sobevento">Sobre</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/cake2/painel/inscricoes/">Inscrição</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/cake2/painel/palestrantes/">Palestrantes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/cake2/painel/palestras/">Palestras</a>
      </li>

    </ul>
    <a class="nav-link" href="http://localhost/cake2/painel/usuarios/">Admin</a>
    <span class="navbar-text">
      Have yourself a merry little Christmas
    </span>
  </div>
</nav>

<main class="main">
<!-- <div class="content col-12"> -->

        <div class="container col-12">
            <div class="content col-12">
                <div class="row">
                    <div class="column">

		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>

	</div>
				</div></div></div>



	<footer>

<div class="container-red">
	<!-- <div class="content"> -->
	<!-- <div class="row"> -->
	<!-- <div class="column"> -->



	<div class="row">
		<div class="column">
		<!-- <div class="vc_empty_pace" style="height: 74px"> -->
			<br>
			<div class="text-center" style="line-height: 0.7">
				<!-- <h4>Environment</h4> -->
				<ul>

					<li class="">Xmas 2020

					by <a href="http://xmas.com">Kringle Limited</a>
				<a href=""><i class="fab fa-twitter-square"></i></a>
						<a href=""><i class="fab fa-facebook-square"></i></a>
						<a href=""><i class="fab fa-twitch"></i></a>
						<a href=""><i class="fab fa-google-plus-square"></i></a>
				</li>


				</ul>
			</div>



</footer>

</body>
</html>
