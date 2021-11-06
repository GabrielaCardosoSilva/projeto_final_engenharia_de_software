<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Consultar médicos</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="../../assets/css/reset.css">
    <link rel="stylesheet" href="../../assets/css/navbar.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/consult.css">
    <link rel="stylesheet" href="../../assets/css/grid_consult.css">
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
            <h1 class="h1-title">Consultar médicos</h1>
        </div>

        <div class="info">
            <div class="div-search">
                <input type="search" name="input_search" id="input_search" class="ipt_search" placeholder="Buscar">
                <span class="material-icons" id="icon-search">search</span>
            </div>
        </div>

        <div class="subtitle">
            <span class="material-icons" id="icon-title">medication</span>
            <h3>Todas os médicos:</h3>
        </div>

        <div class="body1">
            <div class="div-contents">
                <div class="div-header">
                    <p>Nome completo</p>
                    <p>id 0000</p>
                </div>
                
                <div class="div-consult">
                    <p><span class="bold">CPF:</span> 000.000.000-00</p>
                    <p><span class="bold">Idade:</span> 00</p>
                    <p><span class="bold">Gênero:</span> xxxxx</p>
                </div>
                
                <a href="../page/agenda_detail.php" class="button"> Ver mais</a>
            </div>
        </div>

        <div class="body2">
        <div class="div-contents">
                <div class="div-header">
                    <p>Nome completo</p>
                    <p>id 0000</p>
                </div>
                
                <div class="div-consult">
                    <p><span class="bold">CPF:</span> 000.000.000-00</p>
                    <p><span class="bold">Idade:</span> 00</p>
                    <p><span class="bold">Gênero:</span> xxxxx</p>
                </div>
                
                <a href="../page/agenda_detail.php" class="button"> Ver mais</a>
            </div>   
        </div>

        <div class="body3">
        <div class="div-contents">
                <div class="div-header">
                    <p>Nome completo</p>
                    <p>id 0000</p>
                </div>
                
                <div class="div-consult">
                    <p><span class="bold">CPF:</span> 000.000.000-00</p>
                    <p><span class="bold">Idade:</span> 00</p>
                    <p><span class="bold">Gênero:</span> xxxxx</p>
                </div>

                <a href="../page/agenda_detail.php" class="button"> Ver mais</a>
            </div>  
        </div>
    </div>

    <script type="text/javascript" src="../../assets/js/navbar.js"></script>

</body>
</html>