<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Consultar pacientes</title>
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
            <h1 class="h1-title">Consultar pacientes</h1>
        </div>

        <div class="info">
            <div class="div-search">
                <input type="search" name="input_search" id="input_search" class="ipt_search" placeholder="Buscar">
                <span class="material-icons" id="icon-search">search</span>
            </div>
        </div>

        <div class="subtitle">
            <span class="material-icons" id="icon">person_outline</span>
            <h3>Todas os pacientes:</h3>
        </div>

        <div class="body1">
            <div class="agenda">
                <div class="date-hour">
                    <p>Nome completo</p>
                    <p>id 0000</p>
                </div>
                
                <p><span class="bold">CPF:</span> 000.000.000-00</p>
                <p><span class="bold">Idade:</span> 00</p>
                <p><span class="bold">Gênero:</span> xxxxx</p>

                <button type="submit">Ver mais</button>
            </div>
        </div>

        <div class="body2">
            <div class="agenda">
                <div class="date-hour">
                    <p>Nome completo</p>
                    <p>id 0000</p>
                </div>
                
                <p><span class="bold">CPF:</span> 000.000.000-00</p>
                <p><span class="bold">Idade:</span> 00</p>
                <p><span class="bold">Gênero:</span> xxxxx</p>

                <button type="submit">Ver mais</button>
            </div>   
        </div>

        <div class="body3">
            <div class="agenda">
                <div class="date-hour">
                    <p>Nome completo</p>
                    <p>id 0000</p>
                </div>
                
                <p><span class="bold">CPF:</span> 000.000.000-00</p>
                <p><span class="bold">Idade:</span> 00</p>
                <p><span class="bold">Gênero:</span> xxxxx</p>

                <button type="submit">Ver mais</button>
            </div>   
        </div>

    </div>




    <!-- <a href="#">ajuda</a>
    
    <h1>Consulta de pacientes</h1>
    <hr>

    <h2>Selecione um filtro para realizar uma busca:</h2>
    <input type="checkbox" name="ipt_check_id" id="ipt_check_id" value="ipt_check_id">
    <label for="ipt_check_id">Código id</label>
    <input type="checkbox" name="ipt_check_cpf" id="ipt_check_cpf" value="ipt_check_cpf">
    <label for="ipt_check_cpf">CPF</label>
    <input type="checkbox" name="ipt_check_name" id="ipt_check_name" value="ipt_check_name">
    <label for="ipt_check_date">Nome</label>
    <input type="checkbox" name="ipt_check_age" id="ipt_check_age" value="ipt_check_age">
    <label for="ipt_check_hour">Idade</label>
    <input type="checkbox" name="ipt_check_gender" id="ipt_check_gender" value="ipt_check_gender">
    <label for="ipt_check_specialty">Gênero</label>

    <input type="search" name="input_search" id="input_search">

    <h2>(emoji) Todas os pacientes</h2>

    <div>
        <p>Nome completo</p>
        <p>id 0000</p>
        <p><strong>CPF:</strong>000.000.000-00</p>
        <p><strong>Idade:</strong>00</p>
        <p><strong>Gênero:</strong>xxx</p>

        <button type="submit">Ver detalhes</button>
    </div>  -->

    <script type="text/javascript" src="../../assets/js/navbar.js"></script>
</body>
</html>