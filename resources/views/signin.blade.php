<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Study</title>
    <link rel="stylesheet" href="{{asset('css/homepage.css')}}">
</head>

<body>

    <form class="form" action="">

        <div class="top-image">
            <img src="/img/S s.gif" alt="">
        </div>

        <div class="login">

            <div class="top-login">
                <img class="img-login" src="/img/user.png" alt="">
                <h2>Faça o login ou se cadastre</h2>

            </div>

            <div class="dados-login">
                <label>Email</label>
                <input type="email" placeholder="Digite seu email" required><br />
            </div>
            <div class="dados-login">
                <label>Senha</label>
                <input type="password" placeholder="Digite sua senha " required><br />
            </div>
            <div class="dados-login">
                <label><input type="checkbox"> Lembrar Login </label>
            </div>

            <div class="botao-login">
                <a href="/feed/feed.html"><input type="button" value="Entrar"></a>
            </div>
            <div class="botao-cadastro">
                <a href="/pag_cadastro/cadastro.html"><input type="button" value="Criar nova conta"></a>
            </div>

        </div>

    </form>



</body>

</html>