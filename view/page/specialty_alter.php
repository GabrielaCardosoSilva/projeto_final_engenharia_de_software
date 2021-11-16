<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Alterar especialidade</title>
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
            <h1 class="h1-title">Alterar especialidades</h1>
            <p class="p-title">Para alterar a especialidade, redigite os campos desejados abaixo e clique em alterar.</p>
        </div>

        <div class="info">
            <p class="text-info">Os campos marcados com um * são obrigatórios.</p>
        </div>

        <div class="body">
            <form action="" method="post" class="form">

                <div class="single-input">
                    <label for="specialty">* Nome da especialidade</label>
                    <input type="text" name="input_specialty" class="input" id="specialty" required>
                </div>

                <div class="single-input">
                    <label for="descripition">Descrição da especialidade</label>
                    <input type="text" name="input_description" class="input" id="description">
                </div>  

                <button type="button" class="button">Salvar</button>
                <button type="reset" class="button">Limpar</button>

            </form>
        </div>

    </div>

    <script type="text/javascript" src="../../assets/js/navbar.js"></script>
    <script type="text/javascript" src="../../assets/js/info_post.js"></script>
</body>
</html>