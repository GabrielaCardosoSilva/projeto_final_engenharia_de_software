<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>cadastrar especialidades</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/reset.css">
    <link rel="stylesheet" href="../../assets/css/navbar.css">
    <link rel="stylesheet" href="../../assets/css/grid.css">
    <link rel="stylesheet" href="../../assets/css/create.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<body>

    <div class="grid-container">

        <div class="navbar">
            <?php include('../layout/navbar.php')?>
        </div>

        <div class="title">
            <a href="help.php">
                <span class="material-icons help">help</span>
            </a>
            <h1 class="h1-title">Cadastrar especialidades</h1>
        </div>

        <div class="info">
            <p class="text-info">Para agendar novas consultas, preencha os campos abaixo e clique em salvar.</p>
        </div>

        <div class="body">
            <form action="" class="form">
                <div class="single-input">
                    <input type="text" name="input_specialty" class="input" id="specialty" required>
                    <label for="specialty" class="label">Especialidade</label>
                </div>

                <div class="single-input">
                    <input type="text" name="input_description" class="input" id="description" required>
                    <label for="description" class="label">Descrição</label>
                </div>
            

                <button type="submit" class="center">Salvar</button>
                <button type="reset" class="center">Limpar</button>
            </form>
        </div>

    </div>
    
    <script type="text/javascript" src="../../assets/js/navbar.js"></script>
</body>
</html>