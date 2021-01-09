<head>
<?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'home']) ?>

<?= $this->fetch('meta') ?>
<?= $this->fetch('css') ?>
<?= $this->fetch('script') ?>
</head>

<br><div class="content col-6">
<h3>Inscrição</h3>

<?php echo $this->Form->create(null, array('url' => ['controller' => 'inscricoes', 'action' => 'inscrever'])); ?>
<!-- <label for="nome">Nome</label> -->
 <?php echo $this->Form->input('nome', array('label' => 'Nome','placeholder' => 'Digite seu Nome')); ?>
 <!-- <label for="nome">Nascimento</label> -->
 <?php echo $this->Form->input('nascimento', array('label' => 'Nascimento','placeholder' => 'Digite sua data de Nascimento')); ?>

<!-- <label for="email">Email</label> -->
<?php echo $this->Form->input('email', array('placeholder' => 'Digite seu Email')); ?>
<!-- <label for="endereco">Endereço</label> -->
<?php echo $this->Form->input('endereco', array('placeholder' => 'Digite seu Endereço')); ?>
<!-- <label for="telefone">Telefone</label> -->
<?php echo $this->Form->input('telefone', array('placeholder' => 'Digite seu Telefone')); ?>
<?php echo $this->Form->submit('Cadastrar'); ?>

<?php echo $this->Form->end(); ?>
</div>

