<?php
    require_once "modelo/cupomModelo.php";

function adicionar(){
    if(ehPost()){
        $NomeCupom = $_POST["NomeCupom"];
        $Desconto = $_POST["Desconto"];

        $msg = adicionarCupom($NomeCupom, $Desconto);
        redirecionar("Cupom/adicionar");
    }else{
        exibir("Cupom/Cupomformulario");
    }
}

function listar(){
    $dados["Cupom"] = PegarTodosCupom();
    exibir("Cupom/Cupomlistar", $dados);
}

function deletar($id) {
    deletarCupom($id);
    redirecionar("Cupom/listar");
}

function visualizar($id){
    $dados["Cupom"] = visualizarCupom($id);
    exibir("cupom/cupomVis", $dados);
} 

function editar($IdCupom) {
    if (ehPost()) {
        $NomeCupom = $_POST["NomeCupom"];
        $msg = editarCupom($IdCupom, $NomeCupom, $Desconto);
        redirecionar("Cupom/listar");
    } else {
        $dados["Cupom"] = PegarCupomPorId($IdCupom);
        print_r($dados);
        exibir("Cupom/Cupomformulario", $dados);
    }
}
