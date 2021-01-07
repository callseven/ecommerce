<head>
<?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'home']) ?>

<?= $this->fetch('meta') ?>
<?= $this->fetch('css') ?>
<?= $this->fetch('script') ?>
</head>

<br><div class="content col-10">
<h3>Palestras</h3>

<head>
<?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'home']) ?>

<?= $this->fetch('meta') ?>
<?= $this->fetch('css') ?>
<?= $this->fetch('script') ?>
</head>

<?php echo $this->Html->link(
    'Cadastrar Palestra',
    array('controller' => 'palestras', 'action' => 'add')
); ?>
<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Inicio</th>
        <th>Fim</th>
    </tr>



    <?php foreach ($palestras as $palestra): ?>
    <tr>
        <td><?php echo $palestra['Palestra']['id']; ?></td>
		<td><?php echo $palestra['Palestra']['nome']; ?></td>
        <td><?php echo $palestra['Palestra']['descricao']; ?></td>
        <td><?php echo $palestra['Palestra']['inicio']; ?></td>
        <td><?php echo $palestra['Palestra']['fim']; ?></td>
		<td>
            <?php
                echo $this->Html->link(
                    'Ver',
                    array('action' => 'view', $palestra['Palestra']['id'])
                );
            ?>
        </td>
        <td>
            <?php
                echo $this->Html->link(
                    'Editar',
                    array('action' => 'edit', $palestra['Palestra']['id'])
                );
            ?>
        </td>
        <td>
		<?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $palestra['Palestra']['id']),
                    array('confirm' => 'Deletar?')
                );
            ?>
        </td>

    </tr>
    <?php endforeach; ?>
    <?php unset($palestra); ?>
</table>