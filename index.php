<!DOCTYPE html>
<html lang="pt" dir="ltr">
    <?php
        $title = "Página Inicial";
        $style = "/resources/css/index.css";
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
                                    <a href="/" class="active">Início</a>
                                </li>
                                <li>
                                    <a href="/services.php">Serviços</a>
                                </li>
                                <li>
                                    <a href="#">Viaturas</a>
                                </li>
                                <li>
                                    <a href="#">Contactos</a>
                                </li>
                                <li>
                                    <a href="#">Blog</a>
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
                        <h1 class="text-white font-weight-bold" id="hero-title">Conheça a Meiricarro,<br>o seu reparador citroën de Leiria.</h1>
                        <p class="text-white pt-3 pb-3" id="hero-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consectetur.</p>
                        <div class="button-div">
                            <a href="#" class="text-decoration-none">
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
    <?php
        require "partials/footer.php";
    ?>
    </body>
</html>
