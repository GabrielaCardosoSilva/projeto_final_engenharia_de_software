<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Cadastrar pacientes</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="../../assets/css/reset.css">
    <link rel="stylesheet" href="../../assets/css/navbar.css">
    <link rel="stylesheet" href="../../assets/css/grid.css">
    <link rel="stylesheet" href="../../assets/css/create.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src='main.js'></script>
</head>
<body>

    <div class="grid-container">

        <div class="navbar">
            <?php include('../layout/navbar.php')?>
        </div>

        <div class="title">
            <a href="#">
                <span class="material-icons help">help</span>
            </a>
            <h1 class="h1-title">Cadastrar pacientes</h1>
        </div>

        <div class="info">
            <p class="text-info">Para cadastrar novos pacientes, preencha os campos abaixo e clique em salvar.</p>
        </div>

        <div class="body">
            <form action="" class="form">
                <div class="single-input">
                    <input type="text" name="input_name" class="input" id="name" required>
                    <label for="name" class="label">Nome completo</label>
                </div>
                
                <div class="single-input">
                    <input type="numbers" name="input_cpf" class="input" id="cpf" required>
                    <label for="cpf" class="label">CPF</label>
                </div>

                <div class="single-input">
                    <input type="numbers" name="input_rg" class="input" id="rg" required>
                    <label for="rg" class="label">RG</label>
                </div>

                <div class="single-input">
                    <input type="text" name="input_mother" class="input" id="mother_name" required>
                    <label for="mother_name" class="label">Nome da mãe</label>
                </div>

                <div class="single-input">
                    <input type="text" name="input_father" class="input" id="father_name" required>
                    <label for="father_name" class="label">Nome do pai</label>
                </div>

                <select name="opt_gender" id="opt_type">
                    <option value="select">Gênero - selecione:</option>
                    <option value="f">Feminino (cisgênero)</option>
                    <option value="m">Masculino (cisgênero)</option>
                    <option value="t">Transgênero</option>
                    <option value="nb">Não binário</option>
                </select>
                
                <div class="single-input">
                    <input type="date" name="input_date" class="input" id="date" placeholder="Data de nascimeneto" required>
                </div>

                <select name="opt_uf" id="opt_uf">
                    <option value="select">UF - selecione:</option>
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

                <div class="single-input">
                    <input type="number" name="input_cep" class="input" id="cep" required>
                    <label for="cep" class="label">CEP (apenas números)</label>
                </div>

                <div class="single-input">
                    <input type="text" name="input_city" class="input" id="city" required>
                    <label for="city" class="label">Cidade</label>
                </div>

                <div class="single-input">
                    <input type="text" name="input_neighborhood" class="input" id="neighborhood" required>
                    <label for="neighborhood" class="label">Bairro</label>
                </div>

                <div class="single-input">
                    <input type="text" name="input_address" class="input" id="address" required>
                    <label for="address" class="label">Logradouro</label>
                </div>

                <div class="single-input">
                    <input type="number" name="input_number" class="input" id="number" required>
                    <label for="number" class="label">Número da casa</label>
                </div>

                <div class="single-input">
                    <input type="file" name="input_home" class="input" id="home" required>
                    <label for="home" class="label">Comprovante de residência</label>
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
                    <label for="tel2" class="label">Telefone Secundário</label>
                </div>

                <div class="single-input">
                    <input type="number" name="input_healthInsurance" class="input" id="healthInsurance" required>
                    <label for="healthInsurance" class="label">Número do convênio</label>
                </div>

                <!-- inserir rg e comprovante de residência -->

                <button type="submit" class="center">Salvar</button>
                <button type="reset" class="center">Limpar</button>
            </form>
        </div>
    </div>

    <script type="text/javascript" src="../../assets/js/navbar.js"></script>
</body>
</html>