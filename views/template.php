<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?$titulo?></title>
</head>
<body>
    <header>
        <h1>Logo</h1>
        <hr>
    </header>

    <?php $this->loadViewInTemplate($viewName, $viewData);?>

    <br>
    <br>
    <br>
    <br>
    <br>
    <footer>
        <hr>
        @direitos
    </footer>
</body>
</html>