<?php
/**
 * Created by PhpStorm.
 * User: JEFFERSON
 * Date: 09/11/2017
 * Time: 10:40
 */

require_once "Conexao.php";

class Produto {

    public $codigo;
    public $nome;
    public $preco;
    public $categoria;
    public $estoque;
    public $imagem;

    /**
     * Produto constructor.
     * @param null $codigo
     * @param $nome
     * @param $preco
     * @param $categoria
     */
    public function __construct($nome, $preco, $categoria, $estoque, $codigo = null, $imagem = null){
        $this->nome      = $nome;
        $this->preco     = $preco;
        $this->categoria = $categoria;
        $this->estoque   = $estoque;
        $this->codigo    = $codigo;
        $this->imagem    = $imagem;
    }

    public function verificarDisponibilidade(){

        if ($this->estoque > 10 ){
            echo "Produto ainda disponível ";
        }elseif($this->estoque <= 0){
            echo "Produto não disponível no momento";
        }else{
            echo "Corra! Está acabando";
        }

    }
}