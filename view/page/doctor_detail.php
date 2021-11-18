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
            <h1 class="h1-title">Consultar cadastro de médico</h1>
        </div>

        <div class="info">
            <div class="div-header">
                <p>Nome do médico</p>
                <p>Número de identificação: 000</p>
            </div>
        </div>

        <div class="body">
            <div class="div-contents"> 
                
                <p><span class="span-bold">CPF: </span>000.000.000-00</p>
                <p><span class="span-bold">CRM: </span>0000000000</p>
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

                <div class="div-button">
                    <a href="../page/agenda_alter.php" class="button">Alterar</a>
                    <a href="../page/agenda_print.php" class="button">Imprimir</a>
                    <a href="#" class="button">Excluir</a>
                </div>

            </div>
        </div>
    </div> 

    <script type="text/javascript" src="../../assets/js/navbar.js"></script>
</body>
</html>