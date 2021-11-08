<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Alterar paciente</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/reset.css">
    <link rel="stylesheet" href="../../assets/css/navbar.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/grid.css">
    <link rel="stylesheet" href="../../assets/css/style_create.css">
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
            <h1 class="h1-title">Alterar dados cadastrais do paciente</h1>
        </div>

        <div class="info">
            <p class="text-info">Para alterar os dados do paciente, redigite os campos desejados abaixo e clique em alterar.</p>
        </div>

        <div class="body">
            <form action="" class="form">
                <div class="single-input">
                    <input type="text" name="input_name" class="input" id="name" required>
                    <label for="name" class="label">Nome completo</label>
                </div>

                <div class="single-input">
                    <input type="number" name="input_cpf" class="input" id="cpf" required>
                    <label for="cpf" class="label">CPF</label>
                </div>

                <div class="single-input">
                    <label for="opt_gender">Gênero:</label>
                    <select name="opt_gender" id="opt_type">
                        <option value="select">selecione</option>
                        <option value="f">Feminino (cisgênero)</option>
                        <option value="m">Masculino (cisgênero)</option>
                        <option value="t">Transgênero</option>
                        <option value="nb">Não binário</option>
                    </select>
                </div>

                <div class="single-input">
                    <input type="text" name="input_motherName" class="input" id="motherName" required>
                    <label for="motherName" class="label">Nome da mãe</label>
                </div>

                <div class="single-input">
                    <input type="text" name="input_fatherName" class="input" id="fatherName" required>
                    <label for="fatherName" class="label">Nome do pai</label>
                </div>

                <div class="single-input">
                    <input type="text" name="input_uf" class="input" id="uf" required>
                    <label for="uf" class="label">Estado</label>
                </div>

                <div class="single-input">
                    <input type="number" name="input_cep" class="input" id="cep" required>
                    <label for="cep" class="label">CEP (apenas números)</label>
                </div>

                <div class="single-input">
                    <input type="text" name="input_city" class="input" id="city" required>
                    <label for="city" class="label">Cidade</label>
                </div>

                <div class="single-input">
                    <input type="text" name="input_beighborhood" class="input" id="neighborhood" required>
                    <label for="neighborhood" class="label">Bairro</label>
                </div>

                <div class="single-input">
                    <label for="city">Logradouro: </label>
                    <select name="opt_gender" id="opt_type">
                        <option value="select">selecione</option>
                        <option value="m">Avenida</option>
                        <option value="t">Condimínio</option>
                        <option value="t">Conjunto</option>
                        <option value="f">Rua</option>
                        <option value="t">Travessa</option>
                        <option value="t">Via</option>
                        <option value="t">Viela</option>
                    </select>
                </div>

                <div class="single-input">
                    <input type="text" name="input_street" class="input" id="street" required>
                    <label for="street" class="label">Nome da rua</label>
                </div>

                <div class="single-input">
                    <input type="number" name="input_houseNumber" class="input" id="houseNumber" required>
                    <label for="houseNumber" class="label">Número da casa</label>
                </div>

                <div class="single-input">
                    <input type="date" name="input_date" class="input" id="date" required>
                </div>

                <div class="single-input">
                    <input type="email" name="input_email" class="input" id="email" required>
                    <label for="email" class="label">Email</label>
                </div>

                <div class="single-input">
                    <input type="tel" name="input_tel1" class="input" id="tel1" required>
                    <label for="tel1" class="label">Telefone principal</label>
                </div>

                <div class="single-input">
                    <input type="tel" name="input_tel2" class="input" id="tel2" required>
                    <label for="tel2" class="label">Telefone secundário</label>
                </div>

                <div class="single-input">
                    <input type="number" name="input_healtyInsurance" class="input" id="healtyInsurance" required>
                    <label for="healtyInsurance" class="label">Número do convênio</label>
                </div>

                <button type="submit">Salvar</button>
                <button type="reset">Cancelar</button>
            </form>
        </div>
    </div>

    <script type="text/javascript" src="../../assets/js/navbar.js"></script>
</body>
</html>