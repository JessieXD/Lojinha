<?php

    require_once __DIR__."/../../models/CrudProdutos.php";
    $crud = new CrudProdutos();

    $listaProdutos = $crud->getProdutos();

    require_once "cabecalho.php";
?>

<!--Barra de busca-->
<br>
<div class="row">
    <div class="col-md-12">
        <div class="input-group">
            <input name="nome" type="text" class="form-control" placeholder="digite o nome do produto" aria-describedby="basic-addon2">
            <button class="input-group-addon" id="basic-addon2">buscar</button>
        </div>
    </div>
</div>
<br>

<table class="table table-bordered">
    <thead>
    <tr>
        <th>Código</th>
        <th>Título</th>
        <th>Preço</th>
        <th>Estoque</th>
        <th>Categoria</th>
        <th>imagem</th>
        <th>Ações</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($listaProdutos as $produto): ?>
    <tr>
        <th scope="row"><?= $produto->codigo ?></th>
        <td><?= $produto->nome ?></td>
        <td><?= $produto->preco ?></td>
        <td><?= $produto->estoque ?></td>
        <td><?= $produto->categoria ?></td>
        <td><img src="../../../assets/imagens/<?= $produto->imagem ?>" width="50px" height="50px"></td>
        <td><a href="editar-produto.php?codigo=<?=$produto->codigo?>">Editar</a> |
            <a href="../../controllers/controladorProduto.php?acao=excluir&codigo=<?=$produto->codigo?>"> Excluir</a></td>
    </tr>
   <?php endforeach; ?>

    </tbody>
</table>

<?php require_once "rodape.php";?>