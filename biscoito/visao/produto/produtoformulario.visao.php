<form action="" method="POST">
    <input type="text" placeholder="Nome produto..." name="nomeproduto" value ="<?=@$produto['NomeProduto']?>"><br>
    <input type="text" placeholder="Descricao..." name="descricao" value ="<?=@$produto['Descricao']?>"><br>
    <input type="number" placeholder="Preco..." name="preco" value ="<?=@$produto['Preco']?>"><br>
    <input type="text" placeholder="categoria" name="categoria" value ="<?=@$produto['categoria']?>"><br>
    <button type="submit">Enviar</button>
</form>

<a href="./produto/listar">Listar produto</a>