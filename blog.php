<!DOCTYPE html>
<html lang="pt" dir="ltr">
    <?php
        $title = "Blog";
        $style = "/resources/css/blog.css";
        require "partials/header.php";
    ?>
    <body>
        <!-- Begin of navigation -->
        <div class="navbar">
            <div class="container">
                <div class="row p-3">
                    <div class="col">
                        <img src="/resources/media/logotipo.png" alt="Logótipo - Meiricarro">
                    </div>
                    <div class="col d-flex flex-row-reverse align-items-center">
                        <div class="nav-itens">
                            <ul>
                                <li>
                                    <a href="/">Início</a>
                                </li>
                                <li>
                                    <a href="/services.php">Serviços</a>
                                </li>
                                <li>
                                    <a href="/vehicles.php">Viaturas</a>
                                </li>
                                <li>
                                    <a href="/contacts.php">Contactos</a>
                                </li>
                                <li>
                                    <a href="/blog.php" class="active">Blog</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of navigation -->

        <!-- Begin of hero image -->
        <div class="hero-image">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-md-6 ml-5">
                        <h1 class="text-white font-weight-bold" id="hero-title">Descubra todas as novidades que a Citroën têm para si.</h1>
                        <p class="text-white pt-3 pb-3" id="hero-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consectetur.</p>
                        <div class="button-div">
                            <a href="#info-empresa" class="text-decoration-none">
                                <button type="button" name="button" id="button-saber">Saber mais</button>
                            </a>
                            <a href="#" class="text-decoration-none">
                                <button type="button" name="button" id="button-contactar" class="ml-4">Contactar</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of hero image -->

        <div id="container">
            <div id="main">
                CONTENT
            </div>
        </div>
    </body>
    <?php
        require "partials/footer.php";
    ?>
</html>
