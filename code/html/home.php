<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../../img/logo_rosa.png">
    <title>Namorada - Home</title>
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
</head>
<body>
    <?php 
    if(!isset($_SESSION)){
        session_start();
    }
    ?>
    <header>
        <h1 id="go-top" class="cursor" title="Meu amor, minha namorada, minha vida!">
            <a id="link-home" href="home.html">My Love</a>
        </h1>
    </header>
    <div style="text-align: center;">
        <p style="color: red; font-size: 100px;">Em processo de Desenvolvimento da Home-pag...</p>
    </div>
    <footer>
        <section id="developer">
            <a id="dev-name" title="Desenvolvedor e criador de MyLove!" href="https://linktr.ee/guh_sander" target="_blank"><span>Dev:</span> Gustavo Henrique Sander</a>
            <ul id="media">
                <li class="contat">
                    <a class="social-media" href="https://www.instagram.com/guh_sander/" target="_blank">
                        <img src="../../img/insta.png" title="Instagram" alt="Instagram do desenvolvedor."/>
                    </a>
                </li>
                <li class="contat">
                    <a class="social-media" href="https://www.linkedin.com/in/guh-sander/" target="_blank">
                        <img src="../../img/linkdin.png" title="Linkedin" alt="Linkedin do desenvolvedor."/>
                    </a>
                </li>
                <li class="contat">
                    <a class="social-media" href="https://www.facebook.com/GuhSander/" target="_blank">
                        <img src="../../img/face.png" title="Facebook" alt="Facebook do desenvolvedor."/>
                    </a>
                </li>
                <li class="contat">
                    <a class="social-media" href="https://github.com/Guh-Sander" target="_blank">
                        <img src="../../img/github.png" title="Git Hub" alt="Github do desenvolvedor."/>
                    </a>
                </li>
            </ul>
        </section>
        <section id="go-top">
            <a title="voltar ao topo!" href="#go-top">
                <img style="width: 30px;" src="../../img/logo_rosa.png" title="voltar ao topo!" alt="voltar ao topo!"/>
            </a>
        </section>
    </footer>
</body>
</html>