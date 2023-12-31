<?php
// Conexão
require_once 'connect_db.php';

// Sessão
//session_start();

// include 'include_session_home.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Buscar / Editar Cliente</title>
</head>

<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-12">
                <div>
                    <h4>Listar Cliente</h4>
                </div>
            </div>
        </div>
        <hr>

        <!-- SELETOR "msgAlerta" responsavel em receber a mensagem de sucesso ou erro -->
        <span id="msgAlerta"></span>

        <div class="row">
            <div class="col-lg-12">
                <!-- SELETOR "listar-usuarios" responsavel em receber os registros do banco de dados -->
                <span class="listar-usuarios"></span>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="src/js/script_pesquisa.js"></script>
</body>

</html>
