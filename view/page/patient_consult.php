<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Consultar pacientes</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="../../assets/css/reset.css">
    <link rel="stylesheet" href="../../assets/css/navbar.css">
    <link rel="stylesheet" href="../../assets/css/grid.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/style_consult.css">
    <link rel="stylesheet" href="../../assets/css/style_popup.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>

    <div class="grid-container">

        <div class="model" id="model">
            <div class="model-popup-delete">
                <span class="material-icons" id="btn-close" onclick="show()">cancel</span>

                <h1 class="h1-popup">Atenção</h1>
                <p class="p-popup">Tem certeza que deseja excluir esse cadastro?</p>

                <button class="btn-action" id="delete">
                    Confirmar exclusão
                </button>          
            </div>        
        </div>

        <div class="model" id="model-more">
            <div class="model-popup">
                <span class="material-icons" id="btn-close" onclick="showMore()">cancel</span>

                <h1 class="h1-popup">Detalhes</h1>

                <p><span class="span-bold">Número de identificação: </span>00</p>
                <p><span class="span-bold">Paciente: </span>Nome da pessoa</p>
                <p><span class="span-bold">CPF: </span>000.000.000-00</p>
                <p><span class="span-bold">RG: </span>000.000.000-0</p>
                <p><span class="span-bold">Gênero: </span>xxxxx</p>
                <p><span class="span-bold">Mãe: </span>Nome da mãe</p>
                <p><span class="span-bold">Pai: </span>Nome do pai</p>
                <p><span class="span-bold">Data de nascimento: </span>dd/mm/aaaa</p>
                <p><span class="span-bold">UF: </span>XX</p>
                <p><span class="span-bold">CEP: </span>00000-000</p>
                <p><span class="span-bold">Cidade: </span>xxxxxxxxxxx</p>
                <p><span class="span-bold">Bairro: </span>xxxxxxxxxxx</p>
                <p><span class="span-bold">Logradouro: </span>xxxxxxxxxxx</p>
                <p><span class="span-bold">Rua: </span>xxxxxxxxxxx</p>
                <p><span class="span-bold">Nº da casa: </span>xxx</p>
                <p><span class="span-bold">Email: </span>example@email.com</p>
                <p><span class="span-bold">Telefone principal: </span>000000000</p>
                <p><span class="span-bold">Telefone secundário: </span>00000000000</p>
                <p><span class="span-bold">Número do convênio: </span>000000000</p>

                <button class="btn-action" id="btn-edit">
                    <a href="" class="a-action">
                        <span class="material-icons icon-edit">edit</span>
                    </a>
                </button>         
            </div>        
        </div>

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

            <table class="table">
                <tr class="line">
                    <td class="col1">
                        <span class="material-icons">account_circle</span>     
                    </td>

                    <td class="col2">
                        <p><span class="span-bold">Paciente:</span> Nome do paciente</p>
                        <p><span class="span-bold">CPF:</span> 000.000.000-00</p>
                        <p><span class="span-bold">Idade:</span> 00</p>
                        <button class="more" onclick="showMore()">Clique aqui para ver os detalhes do paciente</button>
                    </td>

                    <td class="col3">
                        <button class="btn-action" id="btn-edit">
                            <a href="" class="a-action">
                                <span class="material-icons icon-edit">edit</span>
                            </a>
                        </button>
                        <button class="btn-action" id="btn-delete" onclick="show()">
                            <span class="material-icons" id="icon-delete">delete</span>
                        </button>
                    </td>
                </tr>
            </table>

        </div>

    </div>

    <script type="text/javascript" src="../../assets/js/navbar.js"></script>
    <script type="text/javascript" src="../../assets/js/popup.js"></script>
</body>
</html>