<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Consultar especialidades</title>
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

        <div class="model" id="model-help">
            <div class="model-popup-help">
                <span class="material-icons" id="btn-close" onclick="showHelp()">cancel</span>

                <h1 class="h1-popup">Ajuda</h1>
                <p class="p-popup">Você pode buscar especialidades pelo nome usando o campo "Buscar". Após inserir o valor desejado, clique na lupa para procurá-lo.</p>    
                <p class="p-popup">Ao lado das informações de cada especialidade há os botões de editar e excluir. Se você precisar fazer alguma mudança no cadastro da especialidade, clique no botão com o símbolo de um lápis. Se for necessário excluir, clique no botão com o símbolo de uma lixeira.</p>
                <p class="p-popup">Caso queira ver mais informações sobre a especialidade, clique no texto em azul embaixo de suas informações principais.</p>
            </div>        
        </div>

        <div class="model" id="model">
            <div class="model-popup-delete">
                <span class="material-icons" id="btn-close" onclick="show()">cancel</span>

                <h1 class="h1-popup">Atenção</h1>
                <p class="p-popup">Tem certeza que deseja excluir essa especialidade?</p>

                <button class="btn-action" id="delete">
                    Confirmar exclusão
                </button>          
            </div>        
        </div>

        <div class="model" id="model-more">
            <div class="model-popup">
                <span class="material-icons" id="btn-close" onclick="showMore()">cancel</span>

                <h1 class="h1-popup">Detalhes</h1>

                <p><span class="span-bold">Especialidade: </span>especialidade x</p>
                <p><span class="span-bold">Descrição: </span>xxxxxxxx</p>
                <p><span class="span-bold">Médicos habilitados: </span>
                    <ul>
                        <li class="list-doctor">Nome do médico</li>
                    </ul>
                </p>
                <p><span class="span-bold">Número do consultório: </span>00</p>
                <button class="btn-action" id="btn-edit-help">
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
            <span class="material-icons help" onclick="showHelp()">help</span>
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

            <table class="table">
                <tr class="line">
                    <td class="col1">
                        <span class="material-icons">star</span>     
                    </td>

                    <td class="col2">
                        <p><span class="span-bold">Número de identificação:</span> 00</p>
                        <p><span class="span-bold">Especialidade:</span> especialidade x</p>
                        <button class="more" onclick="showMore()">Clique aqui para ver os detalhes da especialidade</button>
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