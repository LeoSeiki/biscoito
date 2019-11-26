<h2>Listar usuários todos</h2>

<table class="table" border="1">
    <thead>
        <tr>
            <th>CPF</th>
            <th>NOME</th>
            <th>SOBRENOME</th>
            <th>VER</th>
            <th>EDITAR</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <?php foreach ($usuarios as $usuario): ?>
    <tr>
        <td><?=$usuario['CPF']?></td>
        <td><?=$usuario['NomeUsuario']?></td>
        <td><?=$usuario['SobrenomeUsuario']?></td>
        <td><a href="./usuario/visualizar/<?=$usuario['CPF']?>" class="btn btn-secondary">Ver</a></td>
        <td><a href="./usuario/editar/<?=$usuario['CPF']?>" class="btn btn-info">Editar</a></td>
        <td><a href="./usuario/deletar/<?=$usuario['CPF']?>" class="btn btn-danger">Deletar</a></td>
    </tr>
    <?php endforeach; ?>
</table>

<a href="./usuario/adicionar" class="btn btn-primary">Adicionar novo usuario</a>

