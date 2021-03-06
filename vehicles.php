<!DOCTYPE html>
<html lang="pt" dir="ltr">
    <?php
        $title = "Viaturas";
        require "partials/header.php";
    ?>
    <body data-barba="wrapper">
        <div class="load-container">
            <div class="loading-screen"></div>
        </div>
        <main data-barba="container" data-barba-namespace="vehicles-section">
            <!-- Begin of navigation -->
            <div class="navbar">
                <div class="container">
                    <div class="row p-3">
                        <div class="col">
                            <a href="/">
                                <img src="/resources/media/logotipo.png" alt="Logótipo - Meiricarro">
                            </a>                        </div>
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
                                        <a href="/vehicles.php" class="active">Viaturas</a>
                                    </li>
                                    <li>
                                        <a href="/contacts.php">Contactos</a>
                                    </li>
                                    <li>
                                        <a href="/blog.php">Blog</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of navigation -->

            <!-- Begin of hero image -->
            <div class="hero-image-vehicles">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-md-6 ml-5 animate-this">
                            <h1 class="text-white font-weight-bold" id="hero-title">Conheça todas as viaturas Citroën disponíveis.</h1>
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
        </main>
    </body>
    <?php require "partials/footer.php"; ?>
</html>
