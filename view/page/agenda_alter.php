<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Alterar agenda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/reset.css">
    <link rel="stylesheet" href="../../assets/css/navbar.css">
    <link rel="stylesheet" href="../../assets/css/grid.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/style_create.css">
    <link rel="stylesheet" href="../../assets/css/style_popup.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>

    <div class="grid-container">

        <div class="model" id="model-help">
            <div class="model-popup-help">
                <span class="material-icons" id="btn-close" onclick="showHelp()">cancel</span>

                <h1 class="h1-popup">Ajuda</h1>
                <p class="p-popup">Para alterar agendas, preencha os campos que aparecem na tela e clique no botão inferior direito escrito "Salvar".</p>
                <p class="p-popup">Atenção aos campos marcados com um asterisco (*), pois eles são de preenchimento obrogatório e não será possível alterar uma agenda se eles estiverem vazios.</p>
          
            </div>        
        </div>

        <div class="navbar">
            <?php include('../layout/navbar.php')?>
        </div>

        <div class="title">
            <span class="material-icons help" onclick="showHelp()">help</span>
            <h1 class="h1-title">Alterar consultas</h1>
            <p class="p-title">Para aterar consultas, preencha os campos abaixo e clique em salvar.</p>
        </div>
        
        <div class="info">
            <p class="text-info">Os campos marcados com um * são obrigatórios.</p>
        </div>

        <div class="body">

            <div class="div-success">
                <span class="material-icons">check_circle</span>
                <p class="p-success">Alteração concluída com sucesso.</p>
            </div>

            <div class="div-fail">
                <span class="material-icons">error</span>
                <p>Falha na alteração, tente novamente.</p>
            </div>

            <form action="" class="form">

                <div class="single-input">
                    <label for="cpf" class="date">* CPF</label>
                    <input type="numbers" name="input_cpf" class="input" id="cpf" placeholder="Insira apenas os números" required>
                </div>

                <div class="single-input">
                    <label for="name" class="date">* Nome completo</label>
                    <input type="text" name="input_name" class="input" id="name" required>
                </div>

                <div class="single-input">
                    <select name="opt_doctor" id="opt_doctor">
                        <option value="" disable selected>Médico - selecione:</option>
                        <option value="d1">médico 1</option>
                        <option value="d2">médico 2</option>
                        <option value="d3">médico 3</option>
                        <option value="d4">médico 4</option>
                    </select>
                </div>

                <div class="single-input">
                    <select name="opt_specialty" id="opt_specialty">
                        <option value="" disable selected>Especialidade - selecione:</option>
                        <option value="s1">especialidade 1</option>
                        <option value="s2">especialidade 2</option>
                        <option value="s3">especialidade 3</option>
                        <option value="s4">especialidade 4</option>
                    </select>
                </div>

                <div class="single-input">
                    <label for="date" class="date">* Data da consulta</label>
                    <input type="date" name="input_date" class="input" id="date" required>
                </div>

                <div class="single-input">
                    <label for="hour" class="date">* Horário da consulta</label>
                    <input type="time" name="input_hour" class="input" id="hour" required>
                </div>

                <div class="single-input">
                    <label for="number" class="date">Número do consultório</label>
                    <input type="number" name="input_number" class="input" id="number">
                </div>

                <button type="button" class="button">Salvar</button>
                <button type="reset" class="button">Limpar</button>
            </form>
            
        </div>
        
    </div>

    <script type="text/javascript" src="../../assets/js/navbar.js"></script>
    <script type="text/javascript" src="../../assets/js/popup.js"></script>
</body>
</html>