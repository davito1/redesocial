<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/feed.css')}}">
    <title>Social Study</title>
</head>


<body>
    <header>
        <h3>Social Study</h3>
    </header>
    <main class="main">

        <div class="post">

            <div class="user">
                <div class="img-user">

                </div>
                <strong>David Torres</strong>
            </div>

            <form action="" class="form-post" id="formPost">
                <textarea name="textarea" placeholder="No que você esta pensando?" id="textarea"></textarea>
                <div class="icones-header">
                    <div class="icones">
                        <button class="img-icones"><img src="/img/img.svg" alt="Adicionar uma imagem"></button>
                        <button class="img-icones"><img src="/img/video.svg" alt="Adicionar um vídeo"></button>
                    </div>
                    <button type="submit" id="botao" class="botao-pub">Publicar</button>

                </div>

            </form>
        </div>

        <ul class="postagens">
            <li class="postagem">
                <div class="user-post">
                    <div class="img-user-post">

                        <div class="nome-user">
                            <strong>David Luiz</strong>
                            <p>15h</p>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, iusto omnis explicabo magnam nostrum blanditiis, molestias mollitia exercitationem quisquam officiis animi et eligendi saepe quo autem minus quam numquam ratione.</p>
                <div class="botoes-reacoes">
                    <button type="button" class="botoes"></button>
                </div>
            </li>



        </ul>


    </main>

</body>

</html>