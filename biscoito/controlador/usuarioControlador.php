<?php

require_once "modelo/usuarioModelo.php";

function listar() {
    $dados["usuarios"] = pegarTodosUsuarios();
    exibir("usuario/listar", $dados);
}

function adicionar() {
    if (ehPost()) {
        $Cpf = $_POST["cpf"];
        $Nome = $_POST["nome"];
        $Sobrenome = $_POST["sobrenome"];
        $Email = $_POST["email"];
        $Senha = $_POST["senha"];
        $Data = $_POST["data"];
        $Sexo = $_POST ["Sexo"];

        $msg = adicionarUsuario($Cpf, $Nome, $Sobrenome, $Email, $Senha, $Data, $Sexo);
        redirecionar("usuario/adicionar");
    } else {
        exibir("usuario/formulario");
    }
}
function visualizar($id) {
    $dados["usuario"] = pegarUsuarioPorId($id);
    exibir("usuario/visualizar", $dados);
}

function deletar($Cpf) {
    deletarUsuario($Cpf);
    redirecionar("usuario/listar");
}

function editar($Cpf) {
    if (ehPost()) {
        $Cpf = $_POST["cpf"];
        $Nome = $_POST["nome"];
        $Sobrenome = $_POST["sobrenome"];
        $Email = $_POST["email"];
        $Senha = $_POST["senha"];
        $Data = $_POST["data"];
        $Sexo = $_POST ["Sexo"];
        $msg = editarUsuario($Cpf, $Nome, $Sobrenome, $Email, $Senha, $Data, $Sexo);
        redirecionar("usuario/listar");
    } else {
        $dados["usuario"] = pegarUsuarioPorId($Cpf);
        exibir("usuario/formulario", $dados);
    }
}


