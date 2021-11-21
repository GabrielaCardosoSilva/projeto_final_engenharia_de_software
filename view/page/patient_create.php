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
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/style_create.css">
    <link rel="stylesheet" href="../../assets/css/style_popup.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src='main.js'></script>
</head>
<body>

    <div class="grid-container">

        <div class="model" id="model-help">
            <div class="model-popup-help">
                <span class="material-icons" id="btn-close" onclick="showHelp()">cancel</span>

                <h1 class="h1-popup">Ajuda</h1>
                <p class="p-popup">Para cadastrar novos pacientes, preencha os campos que aparecem na tela e clique no botão inferior direito escrito "Salvar".</p>
                <p class="p-popup">Atenção aos campos marcados com um asterisco (*), pois eles são de preenchimento obrigatório e não será possível cadastrar um paciente se eles estiverem vazios.</p>
          
            </div>        
        </div>


        <div class="navbar">
            <?php include('../layout/navbar.php')?>
        </div>

        <div class="title">
            <span class="material-icons help" onclick="showHelp()">help</span>
            <h1 class="h1-title">Cadastrar pacientes</h1>
            <p class="p-title">Para cadastrar novos pacientes, preencha os campos abaixo e clique em salvar.</p>
        </div>

        <div class="info">
            <p class="text-info">Os campos marcados com um * são obrigatórios.</p>
        </div>

        <div class="body">

            <div class="div-success">
                <span class="material-icons">check_circle</span>
                <p class="p-success">Cadastro concluído com sucesso.</p>
            </div>

            <div class="div-fail">
                <span class="material-icons">error</span>
                <p>Falha no cadastro, tente novamente.</p>
            </div>


            <form action="" class="form" method="POST">

                <div class="single-input">
                    <label for="name">* Nome completo</label>
                    <input type="text" name="input_name" class="input" id="name" required>
                </div>
                
                <div class="single-input">
                    <label for="cpf">* CPF</label>
                    <input type="numbers" name="input_cpf" class="input" id="cpf" placeholder="Apenas números" required>
                </div>

                <div class="single-input">
                    <label for="rg">RG</label>
                    <input type="numbers" name="input_rg" class="input" id="rg">
                </div>

                <div class="single-input">
                    <label for="mother_name">Nome da mãe</label>
                    <input type="text" name="input_mother" class="input" id="mother_name" placeholder=" ">
                </div>

                <div class="single-input">
                    <label for="father_name">Nome do Pai</label>
                    <input type="text" name="input_father" class="input" id="father_name">
                </div>

                <div class="single-input">
                    <select name="opt_gender" id="opt_type">
                        <option value="" disable selected>* Gênero - selecione:</option>
                        <option value="f">Feminino (cisgênero)</option>
                        <option value="m">Masculino (cisgênero)</option>
                        <option value="t">Transgênero</option>
                        <option value="nb">Não binário</option>
                    </select>
                </div>
                
                <div class="single-input">
                    <label for="date" class="date">* Data de Nascimento</label>
                    <input type="date" name="input_date" class="input" id="date" required>  
                </div>

                <div class="single-input">
                    <select name="opt_uf" id="opt_uf">
                        <option value="" disable selected>* UF - selecione:</option>
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
                    <label for="cep">* CEP</label>
                    <input type="number" name="input_cep" class="input" id="cep" placeholder="Apenas números" required>
                </div>

                <div class="single-input">
                    <label for="city">* Cidade</label>
                    <input type="text" name="input_city" class="input" id="city" required>
                </div>

                <div class="single-input">
                    <label for="neighborhood">* Bairro</label>
                    <input type="text" name="input_neighborhood" class="input" id="neighborhood" required>
                </div>

                <div class="single-input">
                    <label for="address">* Logradouro</label>
                    <input type="text" name="input_address" class="input" id="address" required>
                </div>

                <div class="single-input">
                    <label for="number">* Número da casa</label>
                    <input type="number" name="input_number" class="input" id="number" required>
                </div>

                <div class="single-input">
                    <label for="email">Email</label>
                    <input type="email" name="input_email" class="input" id="email" placeholder="nome@exemplo.com">

                </div>

                <div class="single-input">
                    <label for="tel1">* Telefone principal</label>
                    <input type="tel" name="input_tel1" class="input" id="tel1" required>
                </div>

                <div class="single-input">
                    <label for="tel2">Telefone Secundário</label>
                    <input type="tel" name="input_tel2" class="input" id="tel2">
                </div>

                <div class="single-input">
                    <label for="healthInsurance">Número do convênio</label>
                    <input type="number" name="input_healthInsurance" class="input" id="healthInsurance">
                </div>

                <button type="submit" class="button">Salvar</button>
                <button type="reset" class="button">Limpar</button>
            </form>
        </div>
        
    </div>

    <script type="text/javascript" src="../../assets/js/navbar.js"></script>
    <script type="text/javascript" src="../../assets/js/popup.js"></script>
</body>
</html>