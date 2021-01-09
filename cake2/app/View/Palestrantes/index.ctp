<head>
<?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'home']) ?>

<?= $this->fetch('meta') ?>
<?= $this->fetch('css') ?>
<?= $this->fetch('script') ?>
</head>


<br><div class="content col-12">
<h3>Palestrantes</h3>

<?php echo $this->Html->link(
    'Cadastrar Palestrante',
    array('controller' => 'palestrantes', 'action' => 'add')
); ?>

<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>URL</th>
        <th>Criado</th>
    </tr>


    <?php foreach ($palestrantes as $palestrante): ?>
    <tr>
        <td><?php echo $palestrante['Palestrante']['id']; ?></td>
        <td><?php echo $palestrante['Palestrante']['nome']; ?>
        </td>

        <td><?php echo $palestrante['Palestrante']['descricao']; ?></td>
        <td><?php echo $palestrante['Palestrante']['url']; ?></td>
        <td><?php echo $palestrante['Palestrante']['created']; ?></td>
       
        <td>
            <?php
                echo $this->Html->link(
                    'Ver',
                    array('action' => 'view', $palestrante['Palestrante']['id'])
                );
            ?>
        </td>
        <td class="actions">
            <?php
                echo $this->Html->link(
                    
                    'Editar',
                    array('class' => 'button', 'action' => 'edit', $palestrante['Palestrante']['id'])
                );
            ?>
        </td>
        <td>
            <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $palestrante['Palestrante']['id']),
                    array('confirm' => 'Deletar?')
                );
            ?>
        </td>

    </tr>
    <?php endforeach; ?>
    <?php unset($palestrante); ?>
</table>