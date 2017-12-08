<?php require_once "cabecalho.php"; ?>
<!-- Use o controladorProduto.php para encaminhar os dados do seu cadastro -->

<h2>Cadastro de Produtos</h2>
<form action="../../controllers/controladorProduto.php?acao=cadastrar" method="post">
    <div class="form-group">
        <label for="produto">Produto:</label>
        <input name="nome" type="text" class="form-control" id="produto" aria-describedby="nome produto" placeholder="">
    </div>

    <div class="form-group">
        <label for="preco">Preco</label>
        <input name="preco" type="number" step="0.01" class="form-control" id="preco" placeholder="">
    </div>

    <div class="form-group">
        <label for="estoque">Estoque</label>
        <input name="estoque" type="number" class="form-control" id="estoque" placeholder="">
    </div>

    <div class="form-group">
        <label for="Categoria">Categoria</label>
        <select name="categoria" class="form-control" id="Categoria">
            <option>Vestido</option>
            <option>Coroa</option>
            <option>Tiara</option>
            <option>Sapato</option>
        </select>
    </div>

    <div class="form-group">
        <label for="imagem">Imagem</label>
        <input name="imagem" type="file" class="form-control" id="imagem" placeholder="">
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>

</form>

<?php require_once "rodape.php"; ?>
