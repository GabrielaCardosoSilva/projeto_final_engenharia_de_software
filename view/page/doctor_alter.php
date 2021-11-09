<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Alterar médico</title>
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
            <h1 class="h1-title">Alterar dados cadastrais do médico</h1>
        </div>

        <div class="info">
            <p class="text-info">Para alterar os dados do médico, redigite os campos desejados abaixo e clique em alterar.</p>
        </div>

        <div class="body">
        <form action="" class="form">
                <div class="single-input">
                    <input type="text" name="input_name" class="input" id="name" placeholder="Nome completo" required>
                </div>

                <div class="single-input">
                    <input type="number" name="input_cpf" class="input" id="cpf" placeholder="CPF" required>
                </div>

                <div class="single-input">
                    <input type="number" name="input_crm" class="input" id="crm" placeholder="CRM" required>
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
                    <input type="text" name="input_motherName" class="input" id="motherName" placeholder="Nome da mãe" required>
                </div>

                <div class="single-input">
                    <input type="text" name="input_fatherName" class="input" id="fatherName" placeholder="Nome do pai" required>
                </div>

                <div class="single-input">
                    <label for="opt_uf">UF:</label>
                    <select name="opt_uf" id="opt_uf">
                        <option value="select">Selecione:</option>
                        <option value="AC">AC - Acre</option>
                        <option value="AL">AL - Alagoas</option>
                        <option value="AP">AP - Amapá</option>
                        <option value="AM">AM - Amazonas</option>
                        <option value="BA">BA - Bahia</option>
                        <option value="CE">CE - Ceará</option>
                        <option value="DF">DF - Distrito Federal</option>
                        <option value="ES">ES - Espírito Santo</option>
                        <option value="GO">GO - Goiás</option>
                        <option value="MA">MA - Maranhão</option>
                        <option value="MT">MT - Mato Grosso</option>
                        <option value="MS">MS - Mato Grosso do Sul</option>
                        <option value="MG">MG - Minas Gerais</option>
                        <option value="PA">PA - Pará</option>
                        <option value="PB">PB - Paraíba</option>
                        <option value="PR">PR - Paraná</option>
                        <option value="PE">PE - Pernambuco</option>
                        <option value="PI">PI - Piauí</option>
                        <option value="RJ">RJ - Rio de Janeiro</option>
                        <option value="RN">RN - Rio Grande do Norte</option>
                        <option value="RS">RS - Rio Grande do Sul</option>
                        <option value="RO">RO - Rondônia</option>
                        <option value="RR">RR - Roraima</option>
                        <option value="SC">SC - Santa Catarina</option>
                        <option value="SP">SP - São Paulo</option>
                        <option value="SE">SE - Sergipe</option>
                        <option value="TO">TO - Tocantins</option>
                    </select>
                </div>

                <div class="single-input">
                    <input type="number" name="input_cep" class="input" id="cep" placeholder="CEP" required>
                </div>

                <div class="single-input">
                    <input type="text" name="input_city" class="input" id="city" placeholder="Cidade" required>
                </div>

                <div class="single-input">
                    <input type="text" name="input_beighborhood" class="input" id="neighborhood" placeholder="Bairro" required>
                </div>

                <div class="single-input">
                    <input type="text" name="input_address" class="input" id="address" placeholder="Logradouro" required>
                </div>

                <div class="single-input">
                    <input type="text" name="input_street" class="input" id="street" placeholder="Nome da rua" required>
                </div>

                <div class="single-input">
                    <input type="number" name="input_houseNumber" class="input" id="houseNumber" placeholder="Número da casa" required>
                </div>

                <div class="single-input">
                    <input type="date" name="input_date" class="input" id="date" placeholder="Data de nascimento" required>
                </div>

                <div class="single-input">
                    <input type="email" name="input_email" class="input" id="email" placeholder="Email" required>
                </div>

                <div class="single-input">
                    <input type="tel" name="input_tel1" class="input" id="tel1" placeholder="telefone principal" required>
                </div>

                <div class="single-input">
                    <input type="tel" name="input_tel2" class="input" id="tel2" placeholder="Telefone secundário" required>
                </div>

                <div class="single-input">
                    <input type="number" name="input_healtyInsurance" class="input" id="healtyInsurance" placeholder="Número do convênio" required>
                </div>

                <button type="submit" onclick="createDoctor()">Salvar</button>
                <input type="button" value="Voltar" onClick="history.go(-1)" class="ipt-button"> 
            </form>
        </div>
    </div>

    <script type="text/javascript" src="../../assets/js/navbar.js"></script>
    <script type="text/javascript" src="../../assets/js/info_post.js"></script>
</body>
</html>