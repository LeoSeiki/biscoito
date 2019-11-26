<form action="" method="POST">
    <input type="text" placeholder="Nome Cupom..." name="NomeCupom" value ="<?=@$Cupom['NomeCupom']?>"><br>
    <input type="number" placeholder="Desconto..." name="Desconto" value ="<?=@$Cupom['Desconto']?>"><br>
    <button type="submit">Enviar</button>
</form>

<a href="./Cupom/listar">Listar Cupom</a>