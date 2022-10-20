<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Cadastro.css">
    <title>Cadastro Miadote</title>
</head>
<body>
    <div class="container">
        <div class="form-image">
            <img src="undraw_good_doggy_re_eet7.svg">
        </div>

    
        <div class="form">
            <form action="cadastro.php" method="post">
                
                <div class="logo">
                    <img src="logogato.png" width="160" height="65" />
                    <div class="login-button">
                        <button> <a href="login.php"> Entrar </a></button>
                    </div>
                </div>
                <div class="form-header">
                    <div class="title">
                        <h1>Criar conta </h1>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="name">Nome</label>
                        <input id="name" type="text" name="name" placeholder="Digite seu nome" required>
                    </div>
                    <div class="input-box">
                        <label for="lastname">Sobrenome</label>
                        <input id="lastname" type="text" name="lastname" placeholder="Digite seu sobrenome" required>
                    </div>
                    <div class="input-box">
                        <label for="email">Email</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu email" required>
                    </div>
                    <div class="input-box">
                        <label for="number">Celular</label>
                        <input id="number" type="tel" name="number" placeholder="(xx) xxxx-xxxx" required>
                    </div>
                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="password" placeholder="Digite sua senha" required>
                    </div>
                    <div class="input-box">
                        <label for="Confirmpassword">Confirme sua senha</label>
                        <input id="Confirmpassword" type="password" name="Confirmpassword" placeholder="Digite sua senha" required>
                    </div>
                </div>
                     <div class="gender-group">
                        <div class="input-box">
                        <label for="gender">Gênero Sexual</label>
                        <input id="gender" type="text" name="gender" placeholder="Digite seu gênero" required>
                     </div>
                    </div>
                    <div class="continue-button">
                    <button><a href="">Cadastrar</a></button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
