<?php

    require_once __DIR__."/../../models/CrudProdutos.php";
    $crud = new CrudProdutos();

    $produto = $crud->getProduto($_GET['codigo']);

require_once "cabecalho.php";
?>
<h2>Editar Produtos</h2>
<form action="../../controllers/controladorProduto.php?acao=editar" method="post">
    <div class="form-group">
        <label for="produto">Produto:</label>
        <input value="<?= $produto->nome ?>" name="nome" type="text" class="form-control" id="produto" aria-describedby="nome produto" placeholder="">
    </div>

    <div class="form-group">
        <label for="preco">Preco</label>
        <input value="<?= $produto->preco ?>" name="preco" type="number" step="0.01" class="form-control" id="preco" placeholder="">
    </div>

    <div class="form-group">
        <label for="estoque">Estoque</label>
        <input value="<?= $produto->estoque ?>" name="estoque" type="number" class="form-control" id="estoque" placeholder="">
    </div>

    <div class="form-group">
        <label for="Categoria">Categoria</label>
        <select name="categoria" class="form-control" id="Categoria">
            <option <?php if ($produto->categoria== "Vestido") echo "selected"; ?>>Vestido</option>
            <option <?php if ($produto->categoria== "Coroa") echo "selected"; ?>>Coroa</option>
            <option <?php if ($produto->categoria== "Tiara") echo "selected"; ?>>Tiara</option>
            <option <?php if ($produto->categoria== "Sapato") echo "selected"; ?>>Sapato</option>
        </select>
    </div>

    <div class="form-group">
        <label for="imagem">Imagem</label>
        <input name="imagem" type="file" class="form-control" id="imagem" placeholder="<?= $produto->imagem ?>">
    </div>

    <input type="hidden" name="codigo" value="<?= $produto->codigo?>">

    <button type="submit" class="btn btn-primary" href="">Atualizar Produto</button>

</form>

<?php require_once "rodape.php";?>