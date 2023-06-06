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

    .form-container button[name="login"] {
        background-color: #2196f3;
    }

    .form-container button[name="login"]:hover {
        background-color: #1e87dc;
    }
    .button-group {
        display: flex;
        gap: 10px;
    }
</style>

<title>Cadastro de Usuário</title>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <form method="post">
                <label for="cadUsuario">Cadastro de Usuário</label>
                <label for="usuario">Usuário</label>
                <input type="text" name="usuario">
                <label for="senha">Senha</label>
                <input type="text" name="senha">
                <label for="nome">Nome</label>
                <input type="text" name="nome">
                <label for="cpf">CPF</label>
                <input type="text" name="cpf">
                <label for="endereco">Endereço</label>
                <input type="text" name="endereco">
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone">
                <label for="data_nascimento">Data de Nascimento</label>
                <input type="text" name="data_nascimento">
                <div class="button-group">
                    <button name="cadastrar">Cadastrar</button>
                    <button name="login">Login</button>
                </div>
            </form>
        </div>
    </div>
<?php
if (isset($_POST["cadastrar"])) {
    require_once("../app/cUsuario.php");
}
if (isset($_POST["login"])) {
    header("location:../index.php");
}
?>