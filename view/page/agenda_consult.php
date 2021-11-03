<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Consultar agendas</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="../../assets/css/reset.css">
    <link rel="stylesheet" href="../../assets/css/navbar.css">
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
            <div class="search">
                <input type="search" name="input_search" id="input_search" class="ipt_search" placeholder="Buscar">
                <span class="material-icons" id="search">search</span>
            </div>
        </div>

        <div class="subtitle">
            <span class="material-icons" id="calendar">calendar_today</span>
            <h3>Todas as agendas:</h3>
        </div>

        <div class="body1">
            <div class="agenda">
                <div class="date-hour">
                    <p>dd/mm/aaaa</p>
                    <p>00:00</p>
                </div>
                
                <p><span class="bold">Médico:</span> Nome do médico</p>
                <p><span class="bold">Especialidade:</span> Especialidade X</p>
                <p><sapn class="bold">Paciente:</span> Nome do paciente</p>

                <button type="submit">Ver mais</button>
            </div>
        </div>

        <div class="body2">
            <div class="agenda">
                <div class="date-hour">
                    <p>dd/mm/aaaa</p>
                    <p>00:00</p>
                </div>
                
                <p><span class="bold">Médico:</span> Nome do médico</p>
                <p><span class="bold">Especialidade:</span> Especialidade X</p>
                <p><span class="bold">Paciente:</span> Nome do paciente</p>

                <button type="submit">Ver mais</button>
            </div>    
        </div>

        <div class="body3">
            <div class="agenda">
                <div class="date-hour">
                    <p>dd/mm/aaaa</p>
                    <p>00:00</p>
                </div>
                
                <p><span class="bold">Médico:</span> Nome do médico</p>
                <p><span class="bold">Especialidade:</span> Especialidade X</p>
                <p><span class="bold">Paciente:</span> Nome do paciente</p>

                <button type="submit">Ver mais</button>
            </div>   
        </div>

    </div>
    

    <div>
        <p>dd/mm/aaaa</p>
        <p>00:00</p>
        <p><strong>Médico:</strong>Nome do médico</p>
        <p><strong>Especialidade:</strong>Nome da especialidade</p>
        <p><strong>Paciente:</strong>Nome do paciente</p>

        <button type="submit">Salvar</button>
    </div>  -->
    <script type="text/javascript" src="../../assets/js/navbar.js"></script>
</body>
</html>