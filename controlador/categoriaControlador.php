<?php
    require_once "modelo/categoriaModelo.php";

function adicionar(){
    if(ehPost()){
        $descricao = $_POST["descricao"];

        $msg = adicionarCategoria($descricao);
        redirecionar("categoria/adicionar");
    }else{
        exibir("categoria/categoriaformulario");
    }
}

function listar(){
    $dados["categoria"] = pegarTodasCategorias();
    exibir("categoria/categorialistar", $dados);
}

function deletar($id) {
    deletarCategoria($id);
    redirecionar("categoria/listar");
}

function ver($id){
    $dados["categoria"] = visualizarCategoria($id);
    exibir("categoria/categoriavisualizar", $dados);
} 

function editar($Idcategoria) {
    if (ehPost()) {
        $descricao = $_POST["descricao"];
        $msg = editarcategoria($Idcategoria,$nome, $descricao, $preco);
        redirecionar("categoria/listar");
    } else {
        $dados["categoria"] = PegarcategoriaPorId($Idcategoria);
        exibir("categoria/categoriaformulario", $dados);
    }
}
