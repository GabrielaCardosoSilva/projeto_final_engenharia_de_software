<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Consultar agendas</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="../../assets/css/reset.css">
    <link rel="stylesheet" href="../../assets/css/navbar.css">
    <link rel="stylesheet" href="../../assets/css/grid.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/style_consult.css">
    <link rel="stylesheet" href="../../assets/css/style_popup.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>

    <div class="grid-container">

        <div class="model" id="model-help">
            <div class="model-popup-help">
                <span class="material-icons" id="btn-close" onclick="showHelp()">cancel</span>

                <h1 class="h1-popup">Ajuda</h1>
                <p class="p-popup">Você pode buscar agendas pela data, nome do médico e pelo nome do paciente usando o campo "Buscar". Após inserir o valor desejado, clique na lupa para procurá-lo.</p>
                <p class="p-popup">Ao lado de cada agenda há os botões de editar e excluir. Se você precisar fazer alguma mudança na agenda, clique no botão com o símbolo de um lápis. Se for necessário excluir, clique no botão com o símbolo de uma lixeira.</p>
            </div>        
        </div>

        <div class="model" id="model">
            <div class="model-popup-delete">
                <span class="material-icons" id="btn-close" onclick="show()">cancel</span>

                <h1 class="h1-popup">Atenção</h1>
                <p class="p-popup">Tem certeza que deseja excluir essa consulta?</p>

                <button class="btn-action" id="delete">
                    Confirmar exclusão
                </button>          
            </div>        
        </div>

        <div class="navbar">
            <?php include('../layout/navbar.php')?>
        </div>

        <div class="title">
            <span class="material-icons help" onclick="showHelp()">help</span>
            <h1 class="h1-title">Consultar agendas</h1>
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
            
            <div class="div-header">
                <p>Consultas agendadas para hoje</p>
                <p>dd/mm/aaaa</p>
            </div>

            <table class="table">
                <tr class="line">
                    <td class="col1">
                        <p>00:00</p>     
                    </td>

                    <td class="col2">
                        <p><span class="span-bold">Paciente:</span> Nome do paciente</p>
                        <p><span class="span-bold">Médico:</span> Nome do médico</p>
                        <p><span class="span-bold">Especialidade:</span> Especialidade X</p>
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