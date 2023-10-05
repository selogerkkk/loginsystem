<!DOCTYPE html>
<html lang="br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    body {
        background-color: #F2F2F2;
    }

    .login {
        width: 100%;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>

<body>
    <div class="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h3>Acesso restrito</h3>
                            <form action="dblogin.php" method="POST">
                                <div>
                                    <div class="mb-3">
                                        <label for="user">Usuário</label>
                                        <input type="text" name="user" id="user" class="form-control" required>
                                    </div>
                                </div>
                                <div>
                                    <div class="mb-3">
                                        <label for="password">Senha</label>
                                        <input type="password" name="password" id="password" class="form-control" required>
                                    </div>
                                </div>
                                <div>
                                    <div class="mb-3">
                                        <button class="btn btn-primary">Entrar</button>
                                        <a href="signup.php" class="position-absolute end-0 p-2">Registrar</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>