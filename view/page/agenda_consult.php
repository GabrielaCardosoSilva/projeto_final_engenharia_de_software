<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Consultar agendas</title>
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
            <h1 class="h1-title">Consultar agendas</h1>
        </div>

        <div class="info">
            <div class="div-search">
                <input type="search" name="input_search" id="input_search" class="ipt_search" placeholder="Buscar">
                <span class="material-icons" id="icon-search">search</span>
            </div>
        </div>

        <div class="subtitle">
            <span class="material-icons" id="icon-title">calendar_today</span>
            <h3>Todas as agendas:</h3>
        </div>

        <div class="body1">
            <div class="div-contents">
                <div class="div-header">
                    <p>dd/mm/aaaa</p>
                    <p>00:00</p>
                </div>

                <div class="div-consult">
                    <p><span class="span-bold">Médico:</span> Nome do médico</p>
                    <p><span class="span-bold">Especialidade:</span> Especialidade X</p>
                    <p><sapn class="span-bold">Paciente:</span> Nome do paciente</p>
                </div>
                
                <a href="../page/agenda_detail.php" class="button"> Ver mais</a>
            </div>
        </div>

        <div class="body2">
            <div class="div-contents">
                <div class="div-header">
                    <p>dd/mm/aaaa</p>
                    <p>00:00</p>
                </div>
                
                <div class="div-consult">
                    <p><span class="span-bold">Médico:</span> Nome do médico</p>
                    <p><span class="span-bold">Especialidade:</span> Especialidade X</p>
                    <p><sapn class="span-bold">Paciente:</span> Nome do paciente</p>
                </div>
                
                <a href="../page/agenda_detail.php" class="button"> Ver mais</a>
            </div>    
        </div>

        <div class="body3">
            <div class="div-contents">
                <div class="div-header">
                    <p>dd/mm/aaaa</p>
                    <p>00:00</p>
                </div>
                
                <div class="div-consult">
                    <p><span class="span-bold">Médico:</span> Nome do médico</p>
                    <p><span class="span-bold">Especialidade:</span> Especialidade X</p>
                    <p><sapn class="span-bold">Paciente:</span> Nome do paciente</p>
                </div>
                
                <a href="../page/agenda_detail.php" class="button"> Ver mais</a>
            </div>   
        </div>
    </div>

    <script type="text/javascript" src="../../assets/js/navbar.js"></script>
</body>
</html>