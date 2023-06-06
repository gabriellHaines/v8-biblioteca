<style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 90vh;
    }

    .form-container {
        background-color: #f2f2f2;
        padding: 20px;
        border-radius: 5px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .form-container label,
    .form-container input[type="text"],
    .form-container button {
        margin-bottom: 10px;
        display: block;
    }

    .form-container button {
        background-color: #4caf50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .form-container button:hover {
        background-color: #45a049;
    }

    .form-container button[name="cadastrar"] {
        background-color: #2196f3;
    }

    .form-container button[name="cadastrar"]:hover {
        background-color: #1e87dc;
    }

    .form-container .button-group {
        display: flex;
        gap: 10px;
    }
</style>

<title>Login</title>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <form method="post">
                <label for="titulo">Login</label>
                <label for="usuario">Usuário</label>
                <input type="text" name="usuario">
                <label for="senha">Senha</label>
                <input type="text" name="senha">
                <div class="button-group">
                    <button name="login">Logar</button>
                    <button name="cadastrar">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
    <?php
    if (isset($_POST["login"])) {
        require_once("./app/login.php");
    }
    if (isset($_POST["cadastrar"])) {
        header("location:./pages/cUsuario.php");
    }
    ?>