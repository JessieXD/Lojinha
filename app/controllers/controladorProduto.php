<?php

// O Controlador é a peça de código que sabe qual classe chamar, para onde redirecionar e etc.
// Use o método $_GET para obter informações vindas de outras páginas.

    require_once "../models/Produto.php";
    require_once "../models/CrudProdutos.php";

if ( $_GET['acao'] == 'cadastrar'){

    $produto = new Produto($_POST['nome'], $_POST['preco'], $_POST['categoria'], $_POST['estoque'],  $_POST['imagem']);

    $crud = new CrudProdutos();
    $crud->salvar($produto);

    //redireciona para a página de produtos
    header('location: ../views/admin/produtos.php');
}

//quando um valor da URL for igual a editar faça isso
if ( $_GET['acao'] == 'editar'){

    $produto = new Produto($_POST['nome'], $_POST['preco'], $_POST['categoria'], $_POST['estoque'], $_POST['codigo'],  $_POST['imagem'] );

    $crud = new CrudProdutos();
    $crud->editar($produto);

    header('location: ../views/admin/produtos.php');


}

//quando um valor da URL for igual a excluir faça isso
if ( $_GET['acao'] == 'excluir'){

    //algoritmo para excluir

    $crud = new CrudProdutos();
    $crud->excluirProduto($_GET['codigo']);

    header('location: ../views/admin/produtos.php?=msg=Excluido com sucesso');
    //redirecione para a página de produtos

}

if ($_GET['acao'] == 'comprar'){

    $crud = new CrudProdutos();
    $msg = $crud->comprar($_POST['codigo'], $_POST['quantidade']);
    header("location: ../views/produto.php?codigo=$_POST[codigo]&msg=$msg");

}

