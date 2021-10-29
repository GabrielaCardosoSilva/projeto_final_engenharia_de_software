<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/reset.css">
    <link rel="stylesheet" href="../../assets/css/navbar.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>

    <div class="grid-container">

        <div class="grid-item navbar">
            <?php include('../layout/navbar.php')?>
        </div>

        <div class="grid-item title">
            <a href="#"><span class="material-icons help">help</span></a>
            <h1 class="h1-title">Cadastro de novas agendas</h1>
        </div>

        <div class="grid-item body">
            <form action="">
                <label for="cpf">Informe o CPF do paciente para buscá-lo</label>
                <input type="search" name="input_cpf" placeholder="CPF (apenas números)">
                <br><br>
                <input type="text" name="input_fullName" placeholder="Nome completo">
                <input type="text" name="input_specialty" placeholder="Especialidade">
                <input type="text" name="input_doctor" placeholder="Médico">
                <label for="opt_type">Tipo de consulta</label>
                <select name="opt_type" id="opt_type">
                    <option value="return">Retorno</option>
                    <option value="first">Primeria consulta</option>
                </select>
                <input type="date" name="input_date" placeholder="Data da consulta">
                <input type="text" name="input_hour" placeholder="Horário">
                <input type="number" name="input_number" placeholder="Número do consultório">
                <input type="number" name="input_price" placeholder="Valor">
                <input type="text" name="input_comments" placeholder="Observações">
        
                <button type="submit">Salvar</button>
                <button type="reset">Limpar</button>
            </form>
        </div>
    </div>
    



    <script type="text/javascript" src="../../assets/js/navbar.js"></script>
</body>
</html>