<?php

function conn() {
    $cnx = mysqli_connect("localhost", "root", "", "biscoito");
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}