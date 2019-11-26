<h2>Listar todas as categorias</h2>

<table class="table" border="1">
    <thead>
        <tr>
            <th>DESCRIÇÃO</th>
            <th>VER</th>
            <th>EDITAR</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <?php foreach ($categoria as $categorias): ?>
    <tr>
        <td><?=$categorias['Descricao']?></td>
        <td><a href="./categoria/ver/<?=$categorias['IdCategoria']?>" class="btn btn-secondary">Ver</a></td>
        <td><a href="./categoria/editar/<?=$categorias['IdCategoria']?>" class="btn btn-info">Editar</a></td>
        <td><a href="./categoria/deletar/<?=$categorias['IdCategoria']?>" class="btn btn-danger">Deletar</a></td>
    </tr>
    <?php endforeach; ?>
</table>

<a href="./categoria/adicionar" class="btn btn-primary">Adicionar nova categoria</a>