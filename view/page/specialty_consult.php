<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Consultar especialidades</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="../../assets/css/reset.css">
    <link rel="stylesheet" href="../../assets/css/navbar.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/style_consult.css">
    <link rel="stylesheet" href="../../assets/css/grid.css">
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
            <h1 class="h1-title">Consultar especialidades</h1>
        </div>

        <div class="info">
            <form action=" " method="post"> 
                <div class="div-search">  
                    <input type="search" class="ipt-search" name="ipt-search" placeholder="Buscar">
                    <button type="submit" class="btn-search">
                        <span class="material-icons" id="icon-search">search</span>
                    </button>
                </div>
            </form>
        </div>

        <div class="body">

            <form action="" method="post">
                <table class="table">
                    <tr class="line">
                        <td class="col1">
                        <span class="material-icons">star</span>     
                        </td>
    
                        <td class="col2">
                            <p><span class="span-bold">Número de identificação:</span> 00</p>
                            <p><span class="span-bold">Especialidade:</span> especialidade x</p>
                            <button class="more">Clique aqui para ver os detalhes do agendamento</button>
                        </td>
    
                        <td class="col3">
                            <button class="btn-action" id="btn-edit">
                                <span class="material-icons icon-edit">edit</span>
                            </button>
                            <button class="btn-action" id="btn-delete">
                                <span class="material-icons" id="icon-delete">delete</span>
                            </button>
                        </td>
                    </tr>
                </table>
            </form>

            <!-- <div class="div-header">
                <p>Especialidade X</p>
                <p>Número de identificação: 0001</p>
            </div>

            <div class="div-contents"> 

                <p><span class="bold">Descrição: </span>xxxxxxxx</p>
                <p><span class="bold">Médicos habilitados: </span>Nome do médico</p>
                <p><span class="bold">Número do consultório: </span>00</p>       

                <div class="div-button">
                    <a href="../page/specialty_alter.php" class="button">Alterar</a>
                    <a href="../page/specialty_print.php" class="button">Imprimir</a>
                    <a href="#" class="button">Excluir</a>

                </div>

            </div> -->
        </div>

    </div>

    <script type="text/javascript" src="../../assets/js/navbar.js"></script>
    <script type="text/javascript" src="../../assets/js/info_get.js"></script>
</body>
</html>