
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

<h1>Cadastrar Palestra</h1>
<?php
echo $this->Form->create('Palestra');
echo $this->Form->input('nome');
echo $this->Form->input('descricao');
echo $this->Form->input('inicio');
echo $this->Form->input('fim');
echo $this->Form->end('Cadastrar Palestra');
?>