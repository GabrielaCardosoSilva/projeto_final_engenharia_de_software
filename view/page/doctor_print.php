<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Imprimir dados de médicos</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="../../assets/css/reset.css">
    <link rel="stylesheet" href="../../assets/css/navbar.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/grid.css">
    <link rel="stylesheet" href="../../assets/css/style_print.css">
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
            <h1 class="h1-title">Imprimir dados de médicos</h1>
        </div>

        <div class="info">
            <p class="preview">Pré visualização:</p>
        </div>

        <div class="body">

            <div class="div-print"> 

                <p class="p-title">Nome do médico</p>

                <div class="div-information">
                    <p><span class="bold">CPF: </span>000.000.000-00</p>
                    <p><span class="bold">CRM: </span>000000000</p>
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
                </div>
                
            </div>

            <div class="div-button">
                <button type="submit">Imprimir</button>
                <input type="button" value="Voltar" onClick="history.go(-1)" class="ipt-button"> 
            </div>
            
        </div>
    </div> 

</body>
</html>