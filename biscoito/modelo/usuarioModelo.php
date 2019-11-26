<?php

function pegarTodosUsuarios() {
    $sql = "SELECT * FROM usuario";
    $resultado = mysqli_query(conn(), $sql);
    $usuarios = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $usuarios[] = $linha;
    }
    return $usuarios;
}

function pegarUsuarioPorId($Cpf) {
    $sql = "SELECT * FROM usuario WHERE CPF = $Cpf";
    $resultado = mysqli_query(conn(), $sql);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}

function adicionarUsuario($Cpf, $Nome, $Sobrenome, $Email, $Senha, $Data, $Sexo) {
    $sql = "INSERT INTO usuario (CPF, NomeUsuario, SobrenomeUsuario, Email, Senha, DataNascimento, Sexo) 
			VALUES ('$Cpf', '$Nome', '$Sobrenome', '$Email', '$Senha', '$Data', '$Sexo')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar usuário' . mysqli_error($cnx)); }
    return 'Usuario cadastrado com sucesso!';
    exibir("usuario/listar");
}

/*function editarUsuario($id, $nome, $email) {
    $sql = "UPDATE usuario SET nome = '$nome', email = '$email' WHERE id = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar usuário' . mysqli_error($cnx)); }
    return 'Usuário alterado com sucesso!';
}*/

function editarUsuario($Cpf, $Nome, $Sobrenome, $Email, $Senha, $Data, $Sexo) {
    $sql = "UPDATE usuario SET NomeUsuario = '$Nome', SobrenomeUsuario = '$Sobrenome', Email = '$Email', Senha = '$Senha',
    DataNascimento = '$Data', Sexo = '$Sexo' WHERE CPF = $Cpf";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar usuário' . mysqli_error($cnx)); }
    return 'Usuário alterado com sucesso!';
}

function deletarUsuario($Cpf) {
    $sql = "DELETE FROM usuario WHERE CPF = $Cpf";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar usuário' . mysqli_error($cnx)); }
    return 'Usuario deletado com sucesso!';
    Redirecionar("usuario/listar");
            
}
