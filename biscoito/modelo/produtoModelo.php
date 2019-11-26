<?php
function adicionarProduto($nome, $descricao, $preco, $categoria) {
    $sql = "INSERT INTO produto (IdProduto, IdCategoria, NomeProduto, Descricao, preco) 
			VALUES (NULL,'$categoria', '$nome', '$descricao', '$preco')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar usuário' . mysqli_error($cnx)); }
    return 'Usuario cadastrado com sucesso!';
}

function listarProdutos(){
    $sql = "SELECT * FROM produto";
    $resultado = mysqli_query(conn(), $sql);
    $produtos = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $produtos[] = $linha;
    }
    return $produtos;
}

function visualizarProduto($IdProduto){
    $sql = "SELECT * FROM produto WHERE IdProduto = $IdProduto";
    $resultado = mysqli_query(conn(), $sql);
    $produto = mysqli_fetch_assoc($resultado);
    return $produto;
}

function deletarProduto($IdProduto){
    $sql = "DELETE FROM produto WHERE IdProduto = $IdProduto";
    $resultado = mysqli_query(conn(), $sql);
    $produto = mysqli_fetch_assoc($resultado);
    return $produto;
}
function editarProduto($IdProduto,$nome, $descricao, $preco ) {
    $sql = "UPDATE produto SET NomeProduto = '$nome',  Descricao  = '$descricao', Preco = '$preco'
     WHERE IdProduto = '$IdProduto'";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar usuário' . mysqli_error($cnx)); }
    return 'Usuário alterado com sucesso!';
}
function pegarProdutoPorId($IdProduto) {
    $sql = "SELECT * FROM produto WHERE IdProduto = $IdProduto";
    $resultado = mysqli_query(conn(), $sql);
    $produto = mysqli_fetch_assoc($resultado);
    return $produto;
}