<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Alterar agenda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/reset.css">
    <link rel="stylesheet" href="../../assets/css/navbar.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/grid.css">
    <link rel="stylesheet" href="../../assets/css/style_create.css">
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
            <h1 class="h1-title">Agenda 001</h1>
        </div>

        <div class="info">
            <p class="text-info">Para alterar a consulta, redigite os campos desejados abaixo e clique em alterar.</p>
        </div>

        <div class="body">
            <form action="" class="form">

                <div class="single-input">
                    <input type="text" name="input_name" class="input" id="name" placeholder="Nome completo" required>
                </div>

                <div class="single-input">
                    <input type="text" name="input_specialty" class="input" id="specialty" placeholder="Especialidade" required>
                </div>
                
                <div class="single-input">
                    <input type="text" name="input_doctor" class="input" id="doctor" placeholder="Médico" required>
                </div>

                <div class="single-input">
                    <label for="date">Data da consulta:</label>
                    <input type="date" name="input_date" class="input" id="date" required>
                </div>

                <div class="single-input">
                    <label for="hour">Horário da consulta</label>
                    <input type="time" name="input_hour" class="input" id="hour" required>
                </div>

                <div class="single-input">
                    <input type="number" name="input_number" class="input" id="number" placeholder="Número do consultório" required>
                </div>

                <button type="submit">Alterar</button>
                <button type="submit">Cancelar</button>
            </form> 
        </div>
    </div>

    <script type="text/javascript" src="../../assets/js/navbar.js"></script>
</body>
</html>