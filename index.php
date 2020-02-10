<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Landing Page-Israel Barbosa</title>
</head>

<body class="bg-info">
    <main class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <section class="row">
            <section class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h1><b>Israel Barbosa</b></h1>
                <h2 class="subTitulo"><b>Desenvolvedor Front-end</b></h2>
                <div class="apresentacao">
                    <h3 class="text-success tituloDaApresentacao"> - Quem sou eu</h3>
                    <p class="descApresentacao">Olá, meu nome é Israel Barbosa, sou estudante do curso tecnólogo em
                        sistemas de internet, na faculdade São Miguel.</p>
                    <h3 class="text-success tituloDaApresentacao"> - Objetivo</h3>
                    <p class="descApresentacao">Estágio como desenvolvedor Front-end.</p>
                    <h3 class="text-success tituloDaApresentacao"> - Habilidades</h3>
                    <p class="descApresentacao">Tenho uma base em HTML, CSS e noções em bootstrap e, pretendo adquirir
                        mais conhecimentos
                        daqui pra frente me aprofundado cada vez mais. Também iniciei os meus estudos em JavaScript,
                        e possuo noções de desenvolvimento de programas básicos.
                    </p>
                </div>
            </section>

            <section class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="IdTec">
                <h1 class="text-center" style="color: white;">Minha tecnologia</h1>
                <div id="tecnologias">
                    <img src="" alt="ImgBootstrap" id="imagemRep">
                    <ul class="list-group" id="listaDesc">
                        <li class="list-group-item text-center" id="IdNome"></li>
                        <li class="list-group-item">Repositórios: <span class="label label-warning" id="IdRepos"></span>
                        </li>
                    </ul>
                    <a href="" class="btn btn-success" id="linkPerfil">Ver Perfil</a>
                </div>
            </section>
        </section>
    </main>

    <script src="script.js"></script>
    <?php 
    $var = "ola mundo";
    ?>
</body>

</html>