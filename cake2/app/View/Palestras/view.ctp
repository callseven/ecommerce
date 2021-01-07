
<head>
<?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'home']) ?>

<?= $this->fetch('meta') ?>
<?= $this->fetch('css') ?>
<?= $this->fetch('script') ?>
</head>

<br><div class="content col-10">
<h1>Palestra</h1>

<head>
<?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'home']) ?>

<?= $this->fetch('meta') ?>
<?= $this->fetch('css') ?>
<?= $this->fetch('script') ?>
</head>

<h3><?php echo '<strong>Nome: </strong>' . h($palestra['Palestra']['nome']); ?></h3>
<p><?php echo '<strong>Descrição: </strong>' .  h($palestra['Palestra']['descricao']); ?></p>

<p>Criado em: <?php echo $palestra['Palestra']['created']; ?></p>
<!-- </div> -->
<br><div class="conten col-2">

<input id="btnVoltar" type="button" class="form-control small" value="Voltar" onclick="window.location='/cake2/palestras/'">
