<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/reset.css">
    <link rel="stylesheet" href="../../assets/css/navbar.css">
    <link rel="stylesheet" href="../../assets/css/grid.css">
    <link rel="stylesheet" href="../../assets/css/calendar.css">
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
            <h1 class="h1-title">Cadastro de novas agendas (Agendamento de consultas)</h1>
        </div>

        <div class="grid-item body">

            <div class="single-input">
                <input type="search" class="input" id="cpf" required>
                <label for="cpf">Pesquisa por CPF (apenas números)</label>
            </div>
            
            <form action="">
                <div class="single-input">
                    <input type="text" name="input_name" class="input" id="name" required>
                    <label for="cpf">Nome completo</label>
                </div>
                <div class="single-input">
                    <input type="text" name="input_specialty" class="input" id="specialty" required>
                    <label for="specialty">Especialidade</label>
                </div>
                <div class="single-input">
                    <input type="text" name="input_specialty" class="input" id="specialty" required>
                    <label for="specialty">Especialidade</label>
                </div>
                <div class="single-input">
                    <input type="text" name="input_doctor" class="input" id="doctor" required>
                    <label for="doctor">Médico</label>
                </div>
                <div class="single-input">
                    <label for="opt_type">Tipo de consulta</label>
                    <select name="opt_type" id="opt_type">
                        <option value="return">Retorno</option>
                        <option value="first">Primeria consulta</option>
                    </select>
                </div>
                <div class="single-input">
                    <input type="date" name="input_date" class="input" id="date" required>
                    <label for="date">Data</label>
                </div>
                <div class="single-input">
                    <input type="text" name="input_hour" class="input" id="hour" required>
                    <label for="hour">horário</label>
                </div>
                <div class="single-input">
                    <input type="number" name="input_number" class="input" id="number" required>
                    <label for="number">Número do consultório</label>
                </div>
                <div class="single-input">
                    <input type="number" name="input_price" class="input" id="price" required>
                    <label for="price">Valor????</label>
                </div>
                <div class="single-input">
                    <input type="text" name="input_comments" class="input" id="comments">
                    <label for="comments">Observações</label>
                </div>

                

                

                
        
                <button type="submit">Salvar</button>
                <button type="reset">Limpar</button>
            </form>

        </div>
    </div>
    



    <script type="text/javascript" src="../../assets/js/navbar.js"></script>
</body>
</html>