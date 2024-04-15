<!DOCTYPE html>
<html lang="en">
<?php
session_start();
require_once "./utils/utils.php";
require_once "./controllers/habilidades.php";
require_once "./controllers/formacoes.php";
require_once "./controllers/contato.php";
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <?php
    $my_option = DEVOPCOES[2];
    ?>
    <title> <?php echo DEVNOME;  ?> - <?php print($my_option); ?> Developer</title>
</head>

<body>
    <header class="header">
        <div class="container header-content">
            <div><a href="./index.html#" tabindex="1">
                    <h1><?= DEVNOME ?></h1>
                </a></div>
            <div class="header-menu">
                <div>
                    <ul>
                        <li><a href="#habilidades" tabindex="2">Habilidades</a></li>
                        <li><a href="#formacao" tabindex="3">Formação</a></li>
                        <li><a href="#contato" tabindex="4">Contato</a></li>
                    </ul>
                </div>
                <div class="header-menu-theme">
                    <img id="theme-icon" src="./images/moon.svg" alt="Icone de tema do site">
                </div>
            </div>
        </div>
    </header>
    <section class="introducao">
        <div class="container">
            <div class="intro-left">
                <h2>Olá, sou o <?= DEVNOME ?></h2>
                <h3>Desenvolvedor <?= $my_option ?></h3>
                <div data-target="contato" class="btn-big scroll-target">
                    <p tabindex="4">Entre em contato<img src="./images/submit.svg" alt="Entre em contato"></p>
                </div>
            </div>
            <div class="intro-right">
                <div>
                    <img src="./images/prof.png" id="prof-img" alt="Imagem profile">
                </div>
                <div id="redes-sociais" class="redes">
                    <ul>
                        <li><a href="https://www.instagram.com/alexmartins16_" target="_blank"><img src="./images/instagram.svg" tabindex="5"></a></li>
                        <li><a href="https://www.linkedin.com/in/alex-martins-475834228/" target="_blank"><img src="./images/linked.svg" tabindex="6"></a></li>
                        <li><a href="https://github.com/TheAnswer16" target="_blank"><img src="./images/github.svg" tabindex="7"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="habilidades" id="habilidades">
        <div class="container">
            <div class="left">
                <h2>Habi<br>lida<br>des</h2>
            </div>
            <div class="right">
                <div>
                    <p tabindex="8">Tecnologias</p>
                    <ul class="hab-list" id="list-tecnologias">
                        <?php
                        $tecnologias = getTecnologias();
                        for ($i = 0; $i < count($tecnologias); $i++) {
                            echo "<li>" . $tecnologias[$i]['val'] . "</li>";
                        }
                        ?>
                    </ul>
                </div>
                <div>
                    <p tabindex="9">Em aprendizado...</p>
                    <ul class="hab-list" id="list-aprendizado">
                        <?php
                        $aprendizado = getAprendizado();
                        for ($i = 0; $i < count($aprendizado); $i++) {
                            echo "<li>" . $aprendizado[$i]['val'] . "</li>";
                        }
                        ?>
                    </ul>
                </div>
                <div>
                    <p tabindex="10">Planos de aprender</p>
                    <ul class="hab-list" id="list-planos-de-aprender">
                        <?php
                        $planos = getPlanosDeAprender();
                        for ($i = 0; $i < count($planos); $i++) {
                            echo "<li>" . $planos[$i]['val'] . "</li>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="formacao" id="formacao">
        <div class="container">
            <div class="left">
                <h2>For<br>ma<br>ção</h2>
            </div>
            <div class="right">
                <p tabindex="11">Além de toda essa minha formação, eu me mantenho sempre atualizado por meio de cursos intensivos online.</p>
                <div class="form-list form-list-grid-2">
                    <div class="item-verde item">
                        <?php
                        $formacoes = getFormacaoAcademica();
                        foreach ($formacoes as $formacao) {
                        ?>
                            <p> <?php echo $formacao->getTipo();  ?></p>
                            <h4> <?php echo $formacao->getNome(); ?> </h4>
                            <span> <?php echo $formacao->getInstituicao(); ?> </span>
                        <?php } ?>
                    </div>
                </div>
                <div>
                    <h3 id="cursos" tabindex="12">Cursos Intensivos</h3>
                    <div class="form-list">
                        <div class="item-roxo item">
                            <?php
                            $cursos = getCursos();
                            foreach ($cursos as $curso) {
                            ?>
                                <h4> <?php echo $curso->getNome(); ?> </h4>
                                <span> <?php echo $curso->getObs(); ?> </span>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 id="idiomas" tabindex="13">Idiomas</h3>
                    <div class="form-list">
                        <div class="item-roxo item">
                            <?php
                            $idiomas = getIdiomas();
                            foreach ($idiomas as $idioma) {
                            ?>
                                <h4> <?php echo $idioma->getNome(); ?> </h4>
                                <span> <?php echo $idioma->getObs() ?? ''; ?> </span>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contato" id="contato">
        <div class="contato-title">
            <h2>Contato</h2>
        </div>
        <div class="container">
            <div class="contato-conteudo">
                <div class="left">
                    <h1>Ultimo contato:</h1>

                    <?php
                    $contato = getUltimaMensagem();
                    echo $contato;
                    ?>
                </div>
                <div class="right">
                    <h3>Vamos lá?</h3>
                    <div class="contato-form">
                        <h4>Entrar em contato</h4>
                        <form action="./services/salvar_contato.php" method="GET">
                            <input type="text" name="nome" placeholder="Nome*" tabindex="14" required>
                            <input type="text" name="email" placeholder="Email*" tabindex="15" required>
                            <textarea name="mensagem" placeholder="Mensagem*" tabindex="16" required></textarea>
                            <button class="btn-contato">
                                <span tabindex="17">ENVIAR</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container footer-content">
            <div class="first">
                <h1><a href="./index.php#" tabindex="18"><?= DEVNOME ?></a></h1>
                <h2 tabindex="19"><?= $my_option ?> Developer</h2>
            </div>
            <div class="topics">
                <ul>
                    <li><a href="#habilidades" tabindex="20">Habilidades</a></li>
                    <li><a href="#formacao" tabindex="21">Formação</a></li>
                </ul>
            </div>
            <div>
                <ul>
                    <li><a href="https://www.instagram.com/alexmartins16_alexmartins16_" target="_blank"><img src="./images/instagram-white.svg" tabindex="22"></a></li>
                    <li><a href="https://www.linkedin.com/in/alex-martins-475834228/in/alex-martins-475834228/" target="_blank"><img src="./images/linkedin-white.svg" tabindex="23"></a></li>
                    <li><a href="https://github.com/TheAnswer16TheAnswer16" target="_blank"><img src="./images/github-white.svg" tabindex="24"></a></li>
                </ul>
            </div>
        </div>
        <div class="container">
            <?php
                $ano = date('Y');
            ?>
            <p tabindex="25"> <?=$ano?>© Desenvolvido por <?= DEVNOME ?>. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
<script src="./js/home.js"></script>

</html>