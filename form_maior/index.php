<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tarefa.css">
    <title>Document</title>
</head>
<body>
    <div id="formulario">
        <div id="title-formulario"> 
            <h1>Calcular média</h1>
        </div>
        <div id="campos">
            <form action="maior.php" method="GET">
                <input required="required" type="number" id="campo" name="campo1" placeholder="Digite um número" min="0" step="any">
                <input required="required" type="number" id="campo" name="campo2" placeholder="Digite um número" min="0" step="any">
                <input required="required" type="number" id="campo" name="campo3" placeholder="Digite um número" min="0" step="any">
                <input type="submit" id="botao" value="Calcular">
            </form>
        </div>
    </div>
</body>
</html>