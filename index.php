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
                            <a href="#">Início</a>
                            <a href="#">Serviços</a>
                            <a href="#">Viaturas</a>
                            <a href="#">Contactos</a>
                            <a href="#">Blog</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of navigation -->

        <!-- Begin of hero image -->
        <div class="hero-image"></div>
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
