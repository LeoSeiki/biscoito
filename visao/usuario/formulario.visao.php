<form action="" method="POST">
    <input type="text" placeholder="CPF" name="cpf" value ="<?=@$usuario['CPF']?>"><br>
    <input type="text" placeholder="Nome..." name="nome" value = "<?=@$usuario['NomeUsuario']?>"><br>
    <input type="text" placeholder="Sobrenome..." name="sobrenome" value = "<?=@$usuario['SobrenomeUsuario']?>"><br>
    <input type="email" placeholder="Email.." name="email" value =<?=@$usuario['Email']?>><br>
    <input type="password" placeholder="Senha..." name="senha" value = "<?=@$usuario['Senha']?>"><br>
    <input type="date" name="data" value = "<?=@$usuario['DataNascimento']?>"><br>
    FEMENINO:<input type="radio" value="F" name="Sexo"><br>
    MASCULINO:<input type="radio" value="M" name="Sexo"><br>
    <button type="submit">Enviar</button>
</form>


<a href="./usuario/listar">Listar usuarios</a>