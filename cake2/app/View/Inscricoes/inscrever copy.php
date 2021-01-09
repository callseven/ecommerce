<head>
<?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'home']) ?>

<?= $this->fetch('meta') ?>
<?= $this->fetch('css') ?>
<?= $this->fetch('script') ?>
</head>

<br><div class="content col-6">
<h3>Login</h3>
<p></p>
<?php echo $this->Form->create(); ?>
<?php echo $this->Form->input('login'); ?>
<?php echo $this->Form->input('senha',
        array('type' => 'password')); ?>
<?php echo $this->Form->submit('Entrar'); ?>
<?php echo $this->Form->end(); ?>
</div>