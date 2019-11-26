<?php

function adicionarCategoria($descricao){
$sql = "INSERT INTO categoria(IdCategoria, Descricao)
        VALUES (NULL, '$descricao')";
    $resultado = mysqli_query($cnx = conn(), $sql); 
    if(!$resultado) { die('Erro ao cadastrar Categoria' . mysqli_error($cnx)); }
    return 'Categoria cadastrado com sucesso!';
}

function pegarTodasCategorias(){
    $sql = "SELECT * FROM categoria";
    $resultado = mysqli_query(conn(), $sql);
    $categorias = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $categorias[] = $linha;
    }
    return $categorias;
}

function deletarCategoria($id){
    $sql = "DELETE FROM categoria WHERE idCategoria = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar Categoria' . mysqli_error($cnx)); }
    return 'Categoria deletada com sucesso!';
    Redirecionar("categoria/categorialistar");
}

function visualizarCategoria($id){
$sql = "SELECT * FROM categoria WHERE idCategoria = $id";
$resultado = mysqli_query($cnx = conn(), $sql); 
$categoria = mysqli_fetch_assoc($resultado);
return $categoria;
}
function editarcategoria($Idcategoria,$nome, $descricao, $preco ) {
    $sql = "UPDATE categoria SET  Descricao  = '$descricao' 
     WHERE Idcategoria = '$Idcategoria'";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar categoria' . mysqli_error($cnx)); }
    return 'categoria alterado com sucesso!';
}
function pegarcategoriaPorId($Idcategoria) {
    $sql = "SELECT * FROM categoria WHERE Idcategoria = $Idcategoria";
    $resultado = mysqli_query(conn(), $sql);
    $categoria = mysqli_fetch_assoc($resultado);
    return $categoria;
}
?>