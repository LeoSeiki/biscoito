<h2>Listar todos os produtos</h2>

<table class="table" border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>VER</th>
            <th>EDITAR</th>
            <th>DELETAR</th>

        </tr>
    </thead>
    <?php foreach ($produtos as $produto): ?>
    <tr>
        <td><?=$produto['IdProduto']?></td>
        <td><?=$produto['NomeProduto']?></td>
        <td><a href="./produto/visualizar/<?=$produto['IdProduto']?>" class="btn btn-secondary">Ver</a></td>
        <td><a href="./produto/editar/<?=$produto['IdProduto']?>" class="btn btn-info">Editar</a></td>
        <td><a href="./produto/deletar/<?=$produto['IdProduto']?>" class="btn btn-danger">Deletar</a></td>
    </tr>
    <?php endforeach; ?>
</table>

<a href="./produto/adicionar">Adicionar Produto</a>
