<h2>Listar todos os Cupom</h2>

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
    <?php foreach ($Cupom as $Cupom): ?>
    <tr>
        <td><?=$Cupom['IdCupom']?></td>
        <td><?=$Cupom['NomeCupom']?></td>
        <td><a href="./Cupom/visualizar/<?=$Cupom['IdCupom']?>" class="btn btn-secondary">Ver</a></td>
        <td><a href="./Cupom/editar/<?=$Cupom['IdCupom']?>" class="btn btn-info">Editar</a></td>
        <td><a href="./Cupom/deletar/<?=$Cupom['IdCupom']?>" class="btn btn-danger">Deletar</a></td>
    </tr>
    <?php endforeach; ?>
</table>

<a href="./Cupom/adicionar">Adicionar Cupom</a>
