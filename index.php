<html>
    <head>
    
    <title>King Burger</title>

    <meta charset="UTF-8">

    <meta name="description" content="O mais Maravilhoso Hamburguer de Iraceminha">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="shortcut icon" href="images/logo.png">

    </head>
    <body>
        <header>
            <nav>
                <a href="index.php" title="home" class="logo">
                    <img src="images/kingburger.png" alt="King Burger" title="King Burger">
                </a>

                <a href="#" id="menu" > 
                    <i class="fas fa-bars"></i>
                </a>

                <ul>
                    <li>
                        <a href="home" title="Home">Home</a>
                    </li>
                    <li>
                        <a href="sobre" title="Sobre">Sobre</a>
                    </li>
                    <li>
                        <a href="cardapio" title="Cardápio">Cardápio</a>
                    </li>
                    <li>
                        <a href="contato" title="Contato">Contato</a>
                    </li>
                </ul>
 
            </nav>

            <div class="clear"></div>

            <div class="msg">
                <h1>Mega Max Burger</h1>
                <p>Hamburguers de Carne, com bastante bacon</p>
                <p><a href="cardapio" title="Cardápio" class="btn">Cardápio</a></p>
            </div>

            <img src="images/6.png" alt="Mega Max Burguer" title="Mega Max Burger" class="max">

        </header>

        <main>
            <?php 
            if (isset ($_GET["param"])) {
                $pagina = $_GET["param"];
            } else {
                $pagina = "home";
            }

            $pagina="paginas/".$pagina.".php";

            if(file_exists($pagina)){
                include $pagina;
            }else{
                include "paginas/erro.php";
            }

            ?>
        </main>

        <footer>

        </footer>

        <script type="text/javascript">
        $("#menu").click(function(){
            $("nav ul").toggle();
        });
        </script>
    
    </body>

</html>