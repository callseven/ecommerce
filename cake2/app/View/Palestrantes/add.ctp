
<head>
<?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'home']) ?>

<?= $this->fetch('meta') ?>
<?= $this->fetch('css') ?>
<?= $this->fetch('script') ?>
</head>

<br><div class="content col-10">

<head>
<?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'home']) ?>

<?= $this->fetch('meta') ?>
<?= $this->fetch('css') ?>
<?= $this->fetch('script') ?>

</head>

<h1>Cadastrar Palestrante</h1>
<?php
echo $this->Form->create('Palestrante');
echo $this->Form->input('nome');
echo $this->Form->input('descricao');
echo $this->Form->input('url');
echo $this->Form->end('Cadastrar Palestrante');
?>

<li><a href="../palestrantes">Listar Palestrantes</a></li>