<form action="" method="POST" enctype="multipart/form-data">
    <input type="text" placeholder="Nome produto..." name="nomeproduto" value ="<?=@$produto['NomeProduto']?>"><br>
    <input type="text" placeholder="Descricao..." name="descricao" value ="<?=@$produto['Descricao']?>"><br>
    <input type="number" placeholder="Preco..." name="preco" value ="<?=@$produto['Preco']?>"><br>
    <input type="text" placeholder="categoria" name="categoria" value ="<?=@$produto['categoria']?>"><br>

    Selecione uma imagem: <input type="file" name="arquivo">

    <button type="submit">Enviar</button>
</form>

<a href="./produto/listar">Listar produto</a>


