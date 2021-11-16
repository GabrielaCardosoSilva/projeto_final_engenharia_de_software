<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Consultar médicos</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="../../assets/css/reset.css">
    <link rel="stylesheet" href="../../assets/css/navbar.css">
    <link rel="stylesheet" href="../../assets/css/grid.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/style_consult.css">
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
            <h1 class="h1-title">Consultar médicos</h1>
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
                        <span class="material-icons">local_hospital</span>     
                        </td>
    
                        <td class="col2">
                            <p><span class="span-bold">Médico:</span> Nome do médico</p>
                            <p><span class="span-bold">CPF:</span> 000.000.000-00</p>
                            <p><span class="span-bold">CRM:</span> 000000000</p>
                            <p class="p-more"><a href="#" class="more">Clique aqui para ver os detalhes do médico</a></p>
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
                <p>Nome do médico</p>
                <p>Número de identificação: 000</p>
            </div>

            <div class="div-contents"> 
                
                <p><span class="bold">CPF: </span>000.000.000-00</p>
                <p><span class="bold">CRM: </span>0000000000</p>
                <p><span class="bold">Gênero: </span>xxxxx</p>
                <p><span class="bold">Mãe: </span>Nome da mãe</p>
                <p><span class="bold">Pai: </span>Nome do pai</p>
                <p><span class="bold">Data de nascimento: </span>dd/mm/aaaa</p>
                <p><span class="bold">UF: </span>XX</p>
                <p><span class="bold">CEP: </span>00000-000</p>
                <p><span class="bold">Cidade: </span>xxxxxxxxxxx</p>
                <p><span class="bold">Bairro: </span>xxxxxxxxxxx</p>
                <p><span class="bold">Logradouro: </span>xxxxxxxxxxx</p>
                <p><span class="bold">Rua: </span>xxxxxxxxxxx</p>
                <p><span class="bold">Nº da casa: </span>xxx</p>
                <p><span class="bold">Email: </span>example@email.com</p>
                <p><span class="bold">Telefone principal: </span>000000000</p>
                <p><span class="bold">Telefone secundário: </span>00000000000</p>

                <div class="div-button">
                    <a href="../page/doctor_alter.php" class="button">Alterar</a>
                    <a href="../page/doctor_print.php" class="button">Imprimir</a>
                    <a href="#" class="button">Excluir</a>
                </div>
            </div> -->

        </div>
        
    </div>

    <script type="text/javascript" src="../../assets/js/navbar.js"></script>
    <script type="text/javascript" src="../../assets/js/info_get.js"></script>
</body>
</html>