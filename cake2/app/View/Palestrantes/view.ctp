
<head>
<?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'home']) ?>

<?= $this->fetch('meta') ?>
<?= $this->fetch('css') ?>
<?= $this->fetch('script') ?>
</head>

<br><div class="content col-10">
<h1>Palestrante</h1>

<head>
<?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'home']) ?>

<?= $this->fetch('meta') ?>
<?= $this->fetch('css') ?>
<?= $this->fetch('script') ?>
</head>

<h3><?php echo '<strong>Nome: </strong>' . h($palestrante['Palestrante']['nome']); ?></h3>
<p><?php echo '<strong>Descrição: </strong>' .  h($palestrante['Palestrante']['descricao']); ?></p>
<p><?php echo '<strong>URL: </strong>' .  h($palestrante['Palestrante']['url']); ?></p>

<p>Criado em: <?php echo $palestrante['Palestrante']['created']; ?></p>
<!-- </div> -->
<br><div class="conten col-2">

<input id="btnVoltar" type="button" class="form-control small" value="Voltar" onclick="window.location='/cake2/palestrantes/'">
