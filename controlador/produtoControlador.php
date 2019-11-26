<?php
    require_once "modelo/produtoModelo.php";


function listar(){
        $dados["produtos"] = listarProdutos();
        exibir("produto/produtolistar", $dados);
    }
    
function adicionar(){
    if(ehpost()){
        $nome = $_POST["nomeproduto"];
        $descricao = $_POST["descricao"];
        $preco = $_POST["preco"];
        $categoria = $_POST["categoria"];      
        $destino = 'publico/upload/' . $_FILES['arquivo']['name'];
       
        $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
        move_uploaded_file( $arquivo_tmp, $destino );

        $msg = adicionarProduto($nome, $descricao, $preco, $categoria, $_FILES['arquivo']['name']);
        redirecionar("produto/adicionar");
    }else{
        exibir("produto/produtoformulario");
    }
}


function visualizar($IdProduto){
    $dados["produtos"] = visualizarProduto($IdProduto);
    exibir("produto/produtovisualizar", $dados);
}

function deletar($IdProduto){
    deletarProduto($IdProduto);
    redirecionar("produto/listar");    
}
function editar($IdProduto) {
    if (ehPost()) {
        $nome = $_POST["nomeproduto"];
        $descricao = $_POST["descricao"];
        $preco = $_POST["preco"];
        $msg = editarProduto($IdProduto,$nome, $descricao, $preco);
        redirecionar("produto/listar");
    } else {
        $dados["produto"] = PegarProdutoPorId($IdProduto);
        print_r($dados);
        exibir("produto/produtoformulario", $dados);
    }
}