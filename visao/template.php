<html>
    <head>
        <title>template MVC</title>
        <base href="<?= URL_BASE ?>"><!--Esta instrução é super importante e não deve ser mudada!-->

        <link rel="stylesheet" href="./publico/css/app.css">
    </head>
    <body class="container">
    <?php require "./visao/cabecalho.php"; ?>
            <li><a href="./">Inicial</a></li>
        <main class="container">
            <?php require $viewFilePath; ?>
        </main>
        <body bgcolor="#FFD702">
    </body>
</html>
