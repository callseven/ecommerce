<?php
if (!defined('URL')) {
    header("Location: /");
    exit();
}
?>
<div class="content p-1">
    <div class="list-group-item">
        <div class="d-flex">
            <div class="mr-auto p-2">
                <h2 class="display-4 titulo">Listar Sobre Empresa</h2>
            </div>
            <?php
            if ($this->Dados['botao']['cad_sob_emp']) {
                ?>
                <a href="<?php echo URLADM . 'cadastrar-sob-empresa/cad-sob-empresa'; ?>">
                    <div class="p-2">
                        <button class="btn btn-outline-success btn-sm">
                            Cadastrar
                        </button>
                    </div>
                </a>
                <?php
            }
            ?>

        </div>
        <?php
        if (empty($this->Dados['listSobEmpresa'])) {
            ?>
            <div class="alert alert-danger" role="alert">
                Nenhum sobre empresa encontrado!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
        }
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th class="d-none d-sm-table-cell">Imagem</th>
                        <th class="d-none d-sm-table-cell">Ordem</th>
                        <th class="d-none d-lg-table-cell">Situação</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($this->Dados['listSobEmpresa'] as $sobempresa) {
                        extract($sobempresa);
                        ?>
                        <tr>
                            <th><?php echo $id; ?></th>
                            <td><?php echo $titulo; ?></td>
                            <td class="d-none d-sm-table-cell">
                                <?php echo "<img src='" . URL . "assets/imagens/sob_emp/$id/$imagem' width='100' height='85'>"; ?>
                            </td>
                            <td><?php echo $ordem; ?></td>
                            <td class="d-none d-lg-table-cell">
                                <?php
                                if ($this->Dados['botao']['alt_sit_sob_emp']) {
                                    echo "<a href='" . URLADM . "alt-sit-sob-empresa/alt-sit-sob-empresa/$id'><span class='badge badge-pill badge-$cor_cr'>$nome_sit</span></a>";
                                } else {
                                    echo "<span class='badge badge-pill badge-$cor_cr'>$nome_sit</span>";
                                }
                                ?>
                            </td>
                            <td class="text-center">
                                <span class="d-none d-md-block">
                                    <?php
                                    if ($this->Dados['botao']['ordem_sob_emp']) {
                                        echo "<a href='" . URLADM . "alt-ordem-sob-empresa/alt-ordem-sob-empresa/$id' class='btn btn-outline-secondary btn-sm'><i class='fas fa-angle-double-up'></i></a> ";
                                    }
                                    if ($this->Dados['botao']['vis_sob_emp']) {
                                        echo "<a href='" . URLADM . "ver-sob-empresa/ver-sob-empresa/$id' class='btn btn-outline-primary btn-sm'>Visualizar</a> ";
                                    }
                                    if ($this->Dados['botao']['edit_sob_emp']) {
                                        echo "<a href='" . URLADM . "editar-sob-empresa/edit-sob-empresa/$id' class='btn btn-outline-warning btn-sm'>Editar</a> ";
                                    }
                                    if ($this->Dados['botao']['del_sob_emp']) {
                                        echo "<a href='" . URLADM . "apagar-sob-empresa/apagar-sob-empresa/$id' class='btn btn-outline-danger btn-sm' data-confirm='Tem certeza de que deseja excluir o item selecionado?'>Apagar</a> ";
                                    }
                                    ?>
                                </span>
                                <div class="dropdown d-block d-md-none">
                                    <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Ações
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                                        <?php
                                        if ($this->Dados['botao']['vis_sob_emp']) {
                                            echo "<a class='dropdown-item' href='" . URLADM . "ver-sob-empresa/ver-sob-empresa/$id'>Visualizar</a>";
                                        }
                                        if ($this->Dados['botao']['edit_sob_emp']) {
                                            echo "<a class='dropdown-item' href='" . URLADM . "editar-sob-empresa/edit-sob-empresa/$id'>Editar</a>";
                                        }
                                        if ($this->Dados['botao']['del_sob_emp']) {
                                            echo "<a class='dropdown-item' href='" . URLADM . "apagar-sob-empresa/apagar-sob-empresa/$id' data-confirm='Tem certeza de que deseja excluir o item selecionado?'>Apagar</a>";
                                        }
                                        ?>


                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>

                </tbody>
            </table>
            <?php
            echo $this->Dados['paginacao'];
            ?>
        </div>
    </div>
</div>
