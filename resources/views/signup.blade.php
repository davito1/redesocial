<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Study</title>
    <link rel="stylesheet" href="{{asset('css/signup.css')}}">
</head>

<body>
    <div class="tela-cadastro">
        <div class="cad-image">
            <img src="/img/753210.png" alt="">
        </div>
        <div class="cad">
            <form action="{{ url('sendForm')}}" method="POST">
                {{ csrf_field() }}
                @if(session('status'))
                    <div class="alert alert-success">
                {{ session('status') }}
                @endif

                <div class="cad-inicio">
                    <h1>Cadastre-se</h1>
                </div>

                <div class="cadastro">
                    <div class="dados-cadastro">
                        <label>Primeiro Nome</label>
                        <input type="text" name="first_name" placeholder="Digite seu primeiro nome" required>
                    </div>

                    <div class="dados-cadastro">
                        <label>Sobrenome</label>
                        <input type="text" name="last_name" placeholder="Digite seu sobrenome" required>
                    </div>
                    <div class="dados-cadastro">
                        <label>E-mail</label>
                        <input type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>

                    <div class="dados-cadastro">
                        <label>Celular</label>
                        <input type="tel" name="phone" placeholder="(xx) xxxx-xxxx" required>
                    </div>

                    <div class="dados-cadastro">
                        <label>Senha</label>
                        <input type="password" name="password" placeholder="Digite sua senha" required>
                    </div>


                    <div class="dados-cadastro">
                        <label>Confirme sua Senha</label>
                        <input type="password" name="confirmPassword" placeholder="Digite sua senha novamente" required>
                    </div>
                </div>
                <input type="submit" value="enviar"/>
            </form>
        </div>
    </div>
</body>

</html>