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
    <link rel="stylesheet" href="../../assets/css/create.css">
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
            <h2 class="text-info">Selecione um filtro para realizar uma busca:</h2>
            <div class="search">
                <input type="checkbox" name="ipt_check_id" id="ipt_check_id" value="ipt_check_id">
                <label for="ipt_check_id" class="lbl_search">Código id</label>
                <input type="checkbox" name="ipt_check_patient" id="ipt_check_patient" value="ipt_check_patient">
                <label for="ipt_check_patient" class="lbl_search">Paciente</label>
                <input type="checkbox" name="ipt_check_date" id="ipt_check_date" value="ipt_check_date">
                <label for="ipt_check_date" class="lbl_search">Data</label>
                <input type="checkbox" name="ipt_check_hour" id="ipt_check_hour" value="ipt_check_hour">
                <label for="ipt_check_hour" class="lbl_search">Horário</label>
                <input type="checkbox" name="ipt_check_specialty" id="ipt_check_specialty" value="ipt_check_specialty">
                <label for="ipt_check_specialty" class="lbl_search">Especialidade</label>
                <input type="checkbox" name="ipt_check_doctor" id="ipt_check_doctor" value="ipt_check_doctor">
                <label for="ipt_check_doctor" class="lbl_search">Médicos</label>

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
                
                <p>Médico: Nome do médico</p>
                <p>Especialidade: Especialidade X</p>
                <p>Paciente: Nome do paciente</p>

                <button type="submit">Ver mais</button>
            </div>
        </div>

        <div class="body2">
            <div class="agenda">
                <div class="date-hour">
                    <p>dd/mm/aaaa</p>
                    <p>00:00</p>
                </div>
                
                <p>Médico: Nome do médico</p>
                <p>Especialidade: Especialidade X</p>
                <p>Paciente: Nome do paciente</p>

                <button type="submit">Ver mais</button>
            </div>    
        </div>

        <div class="body3">
            <div class="agenda">
                <div class="date-hour">
                    <p>dd/mm/aaaa</p>
                    <p>00:00</p>
                </div>
                
                <p>Médico: Nome do médico</p>
                <p>Especialidade: Especialidade X</p>
                <p>Paciente: Nome do paciente</p>

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