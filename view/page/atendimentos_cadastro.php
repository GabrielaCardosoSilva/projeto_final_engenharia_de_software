<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Cadastro de atendimentos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/reset.css">
    <link rel="stylesheet" href="../../assets/css/navbar.css">
    <link rel="stylesheet" href="../../assets/css/grid.css">
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
            <a href="#">
                <span class="material-icons help">help</span>
            </a>
            <h1 class="h1-title">Cadastro de atendimentos</h1>
        </div>

        <div class="info">
            <p class="text-info">Para agendar novas consultas, preencha os campos abaixo e clique em salvar.</p>
        </div>

        <div class="body">
        <form action="" class="form">
             
             <div class="single-input">
                 <input type="numbers" name="input_cpf" class="input" id="cpf" required>
                 <label for="specialty" class="label">CPF</label>
             </div>

             <div class="single-input">
                 <input type="text" name="input_name" class="input" id="name" required>
                 <label for="cpf" class="label">Nome completo</label>
             </div>

             <div class="single-input">
                 <input type="text" name="input_specialty" class="input" id="specialty" required>
                 <label for="specialty" class="label">Especialidade</label>
             </div>

             <div class="single-input">
                 <input type="text" name="input_doctor" class="input" id="doctor" required>
                 <label for="doctor" class="label">Médico</label>
             </div>

             <div class="single-input">
                 <input type="date" name="input_date" class="input" id="date" required>
             </div>

             <div class="single-input">
                 <input type="time" name="input_hour" class="input" id="hour" required>
             </div>

             <div class="single-input">
                 <input type="number" name="input_number" class="input" id="number" required>
                 <label for="number" class="label">Número do consultório</label>
             </div>

             <div class="single-input">
                 <input type="radio" name="type" id="first" value="Primeira consulta">
                 <label for="first">Primeira consulta</label>
                 <input type="radio" name="type" id="return" value="Retorno">
                 <label for="return">Retorno</label>
             </div>

         <button type="submit" class="center">Salvar</button>
         <button type="reset" class="center">Limpar</button>
     </form>
        </div>

    </div>

    <!-- <a href="#">ajuda</a>
    
    <hr>
    <h1>Cadastro de novos atendimentos</h1>

    <form action="">
        <label for="cpf">Informe o CPF do paciente para buscá-lo</label>
        <input type="search" name="input_cpf" placeholder="CPF (apenas números)">
        <br><br>
        <input type="text" name="input_fullName" placeholder="Nome do paciente">
        <input type="text" name="input_specialty" placeholder="Especialidade">
        <input type="text" name="input_doctor" placeholder="Médico">
        <input type="date" name="input_date" placeholder="Data da consulta">
        <input type="text" name="input_hour" placeholder="Horário">
        <input type="number" name="input_number" placeholder="Número do consultório">
   
        <button type="submit">Salvar</button>
        <button type="reset">Limpar</button>
    </form> -->

    <script type="text/javascript" src="../../assets/js/navbar.js"></script>
</body>
</html>