<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Excluir cadastros de pacientes</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="../../assets/css/reset.css">
    <link rel="stylesheet" href="../../assets/css/navbar.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/grid.css">
    <link rel="stylesheet" href="../../assets/css/style_delete_select.css">
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
            <h1 class="h1-title">Selecionar cadastros de pacientes para exclusão</h1>
        </div>

        <div class="info">
            <div class="div-search">
                <input type="search" name="input_search" id="input_search" class="ipt_search" placeholder="Buscar">
                <span class="material-icons" id="icon-search">search</span>
            </div>
        </div>

        <div class="body">
            <div class="div-contents"> 
                
                <div class="div-check">
                    <input type="checkbox" name="ipt_check" id="ipt_check1" value="ipt_check1" class="ipt-delete">
                    <label for="ipt_check1">Paciente 1</label>
                </div>

                <div class="div-check">
                    <input type="checkbox" name="ipt_check" id="ipt_check2" value="ipt_check2" class="ipt-delete">
                    <label for="ipt_check2">Paciente 2</label>
                </div>

                <div class="div-check">
                    <input type="checkbox" name="ipt_check" id="ipt_check3" value="ipt_check3" class="ipt-delete">
                    <label for="ipt_check3">Paciente 3</label>
                </div>

                <div class="div-check">
                    <input type="checkbox" name="ipt_check" id="ipt_check4" value="ipt_check4" class="ipt-delete">
                    <label for="ipt_check4">Paciente 4</label>
                </div>

                <div class="div-check">
                    <input type="checkbox" name="ipt_check" id="ipt_check5" value="ipt_check5" class="ipt-delete">
                    <label for="ipt_check5">Paciente 5</label>
                </div>

                <div class="div-check">
                    <input type="checkbox" name="ipt_check" id="ipt_check6" value="ipt_check6" class="ipt-delete">
                    <label for="ipt_check6">Paciente 6</label>
                </div>

                <button type="submit">Excluir</button>
                <button type="submit">Voltar</button>

            </div>
        </div>
    </div> 

    <script type="text/javascript" src="../../assets/js/navbar.js"></script>

</body>
</html>