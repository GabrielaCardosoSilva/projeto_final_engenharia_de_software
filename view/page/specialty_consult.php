<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Consultar especialidades</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="../../assets/css/reset.css">
    <link rel="stylesheet" href="../../assets/css/navbar.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/style_consult.css">
    <link rel="stylesheet" href="../../assets/css/grid.css">
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
            <h1 class="h1-title">Consultar especialidades</h1>
        </div>

        <div class="info">
            <div class="div-search">
                <input type="search" name="input_search" id="input_search" class="ipt_search" placeholder="Buscar">
                <span class="material-icons" id="icon-search">search</span>
            </div>
        </div>

        <div class="body">

            <div class="div-header">
                <p>Especialidade X</p>
                <p>Número de identificação: 0001</p>
            </div>

            <div class="div-contents"> 

                <p><span class="bold">Descrição: </span>xxxxxxxx</p>
                <p><span class="bold">Médicos habilitados: </span>Nome do médico</p>
                <p><span class="bold">Número do consultório: </span>00</p>       

                <div class="div-button">
                    <a href="../page/specialty_alter.php" class="button">Alterar</a>
                    <a href="../page/specialty_print.php" class="button">Imprimir</a>
                    <a href="#" class="button">Excluir</a>
                    <!-- O botão de exclusão deve abrir um pop-up de confirmação e não redirecionar a uma página -->
                </div>

            </div>
        </div>

    </div>

<script type="text/javascript" src="../../assets/js/navbar.js"></script>

</body>
</html>