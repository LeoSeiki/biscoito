<?php

function adicionarCupom($NomeCupom, $Desconto){
$sql = "INSERT INTO Cupom(IdCupom, Desconto, NomeCupom)
        VALUES (NULL, '$Desconto','$NomeCupom')";
    $resultado = mysqli_query($cnx = conn(), $sql); 
    if(!$resultado) { die('Erro ao cadastrar Cupom' . mysqli_error($cnx)); }
    return 'Cupom cadastrado com sucesso!';
}

function pegarTodosCupom(){
    $sql = "SELECT * FROM Cupom";
    $resultado = mysqli_query(conn(), $sql);
    $Cupom = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $Cupom[] = $linha;
    }
    return $Cupom;
}

function deletarCupom($id){
    $sql = "DELETE FROM Cupom WHERE IdCupom = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar Cupom' . mysqli_error($cnx)); }
    return 'Cupom deletado com sucesso!';
    Redirecionar("Cupom/Cupomlistar");
}

function visualizarCupom($id){
$sql = "SELECT * FROM Cupom WHERE IdCupom = $id";
$resultado = mysqli_query($cnx = conn(), $sql); 
$Cupom = mysqli_fetch_assoc($resultado);
return $Cupom;
}
function editarCupom($IdCupom, $NomeCupom, $Desconto) {
    $sql = "UPDATE Cupom SET  NomeCupom  = '$NomeCupom' 
     WHERE IdCupom = '$IdCupom'";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar Cupom' . mysqli_error($cnx)); }
    return 'Cupom alterado com sucesso!';
}
function pegarCupomPorId($IdCupom) {
    $sql = "SELECT * FROM Cupom WHERE IdCupom = $IdCupom";
    $resultado = mysqli_query(conn(), $sql);
    $Cupom = mysqli_fetch_assoc($resultado);
    return $Cupom;
}
?>