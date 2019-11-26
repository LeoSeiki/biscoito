<h2>Visualizar</h2>
<img src="publico/upload/<?=$produtos['Imagem']?>">
<p>IdProduto: <?=$produtos['IdProduto']?></p>
<p>Nome: <?=$produtos['NomeProduto']?></p>
<p>Descricao: <?=$produtos['Descricao']?></p>
<p>Categoria: <?=$produtos['IdCategoria']?></p>
<p>Preco: <?=$produtos['Preco']?></p>

<a href="./produto/adicionar" class="btn btn-primary">Adicionar novo Produto</a><br>
<a href="./produto/listar" class="btn btn-primary">Voltar</a>