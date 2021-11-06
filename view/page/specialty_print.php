<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Imprimir especialidades</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="../../assets/css/reset.css">
    <link rel="stylesheet" href="../../assets/css/navbar.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/grid.css">
    <link rel="stylesheet" href="../../assets/css/style_print.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>

    <div class="grid-container">

        <div class="navbar">
            <?php include('../layout/navbar.php')?>
        </div>

        <div class="title">
            <a href="help.php">
                <span class="material-icons help">help</span>
            </a>
            <h1 class="h1-title">Imprimir especialidades</h1>
        </div>

        <div class="info">
            <p class="preview">Pré visualização:</p>
        </div>

        <div class="body">

            <div class="div-print">

                <p class="p-title">Especialidade X</p>

               <div class="div-header">
                    <p>Número de identificação: 001</p>
                </div>

                <div class="div-information">
                     <p><span class="bold">Descrição: </span>xxxxxxxx</p>
                    <p><span class="bold">Médicos habilitados: </span>Nome do médico</p>
                    <p><span class="bold">Número do consultório: </span>00</p>
                </div>
                
            </div>

            <div class="div-button">
                <button type="submit">Imprimir</button>
                <button type="submit">Cancelar</button>
            </div>
            
        </div>
    </div> 

    <script type="text/javascript" src="../../assets/js/navbar.js"></script>

</body>
</html>