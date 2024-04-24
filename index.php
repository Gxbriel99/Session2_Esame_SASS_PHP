<?php
$errorGeneric = '';
$succesfull = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $cognome = $_POST["cognome"];
    $email = $_POST["email"];
    $oggetto = $_POST["oggetto"];
    $textarea = $_POST["textarea"];

    switch(true){
        case($nome =='' || $cognome=='' || $email=='' || $oggetto=='' || $textarea==''):
            $errorGeneric = "   Attenzione I campi non possono essere lasciati vuoti";
            break;
        case(empty($nome)):
            $errorGeneric = "Attenzione! Il campo nome non può essere lasciato vuoto";
            break;
        case(empty($cognome)):
            $errorGeneric = "Attenzione! Il campo cognome non può essere lasciato vuoto";
            break;
        case(empty($oggetto)):
            $errorGeneric = "Attenzione! Il campo oggetto non può essere lasciato vuoto";
            break;
        case(empty($email)):
            $errorGeneric = "Attenzione! Il campo email non può essere lasciato vuoto";
            break;
        case(empty($textarea)):
            $errorGeneric = "Attenzione! Il campo textarea non può essere lasciato vuoto";
            break;
            default:
            $dati = [
                "nome" => $nome,
                "cognome" => $cognome,
                "email" => $email,
                "oggetto" => $oggetto,
                "textarea" => $textarea
            ];
    
            $json_dati = json_encode($dati);
            $file_json = "dati_form.json";
            file_put_contents($file_json, $json_dati);
            $succesfull = "I dati sono stati inviati correttamente";
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.min.css">
    <link rel="stylesheet" href="./form.php">
    <style>
        .error{
            color: red;
        }
        .succes{
            color: green;
       }
    </style>
    <title>Index</title>
</head>
<body>
    <!-- richiamo il menù creato nell'apposito file header.php -->
    <?php require("header.php") ;?>
    <main>
        <!-- definisco 6 container che andrò impostore con setup_container -->
        <div class="container1">
            <img class="logo_container1" src="./media/img/logo/yellowmoon_logo_01.svg" alt="logo_main">
            <p class="p1">Welcome to the yellow side of moon</p>
            <p class="p2">We do some creative stuff</p>
            <!-- punto di collegamento fra la ancora e il menù -->
            <a href="#top1">ESPLORA</a>
            <p class="p3">🡫</p> 
        </div>
        <div class="container2">
            <!-- punto di collegamento fra la ancora e il menù -->
            <h1 id="top1"></h1>
            <div class="text_container2">
                <div class="p1">ABOUT US</div>
                <div class="p2">YELLOW SIDE OF THE MOON IS NOT SECRET ANYMORE</div>
                <!-- dichiaro un altro container che userò per impostare gli _elementi al suo interno -->
                <div class="sub_text_container">
                    <p><span class="span1">01|</span>CREIAMO QUALCHE OPERA D'ARTE <br><span class="span2">SI TRATTA DI SPAZI VUOTI CON QUALCHE TESTO, IMMAGINI E ANCORA SPAZI VUOTI</span></p>
                    <p><span class="span1">02|</span>PROGRAMMIAMO QUALCHE APPLICAZIONE<br><span class="span2">TI BASTA CLICCARE E LA MAGIA AVVERRÀ,QUALCUNO DOVRÀ FARLO IN QUESTO MODO</span></p>
                    <p><span class="span1">03|</span>SCATTIAMO ANCHE DELLE FOTO<br><span class="span2">QUESTA È LA PARTE FACILE DEL LAVORO, BASTA PUNTARE LA FOTOCAMERA E PUFF</span></p>
                </div>
            </div>
        </div>
        <div class="container3">
            <p id="sub_p">
                QUESTO È UNO SPAZIO PER TESTO RANDOM CHE QUANDO <br> TI VERRÀ QUALCOSA IN MENTE POTRAI METTERE QUI.
            </p>
            <p id="sub_p2">NO...NON SONO PIGRO,OGNI SITO HA BISOGNO DI SPAZI GRANDI DA SFRUTTARE COSI</p>
        </div>
        <!-- punto di collegamento fra la ancora e il menù -->
        <h1 id="top2"></h1>
        <div class="container4">
            <div class="sub_container">
                <p>PORTFOLIO</p>
                <p>QUANDO NON HO NULLA DA FARE MI PIACE CREARE QUALCUNA DI QUESTE ROBE</p>
                <div class="gallery_container">
                    <!-- dichiaro un altro container che userò per impostare le img al suo interno -->
                    <ul>
                        <li> <a href="portfolio.php?id=1"><img class="gallery_element" src="./media/img/portfolio/portfolio_01.jpg" alt="img1" title="un uomo con un acconciatura bizzarra "></img></a></li>
                        <li> <a href="portfolio.php?id=2"><img class="gallery_element" src="./media/img/portfolio/portfolio_02.jpg" alt="img2" title="Una scimmia con in testa una buccia di banana "></img></a></li>
                        <li> <a href="portfolio.php?id=3"><img class="gallery_element" src="./media/img/portfolio/portfolio_03.jpg" alt="img3" title="Un uomo che sta per mangiare "></img></a></li>
                        <li> <a href="portfolio.php?id=4"><img class="gallery_element" src="./media/img/portfolio/portfolio_04.jpg" alt="img4" title=" una donna arrabbiata che si sfoga "></img></a></li> <br>
                        <li> <a href="portfolio.php?id=5"><img class="gallery_element" src="./media/img/portfolio/portfolio_05.jpg" alt="img5" title="un uomo che usa una banana come pistola" ></img></a></li>
                        <li> <a href="portfolio.php?id=6"><img class="gallery_element" src="./media/img/portfolio/portfolio_06.jpg" alt="img6" title="un uomo che sta assaggiando un limone"></img></a></li>
                        <li> <a href="portfolio.php?id=7"><img class="gallery_element" src="./media/img/portfolio/portfolio_07.jpg" alt="img7" title="un uomo con mai e testa spropositate "></img></a></li>
                        <li> <a href="portfolio.php?id=8"><img class="gallery_element" src="./media/img/portfolio/portfolio_08.jpg" alt="img8" title="un uomo che dorme sul tappeto in casa sua "></img></a></li>
                    </ul>
                </div>
                <p>.. E NE ABBIAMO MOLTE ALTRE</p>
                <p >🡫</p>
            </div>
        </div>
        <div class="container5">
            <!-- punto di collegamento fra la ancora e il menù -->
            <h1 id="top3"></h1>
            <p class="p1">CLIENTS</p>
            <p class="p2">QUALCUNO MI HA REALMENTE PAGATO PER QUESTA ROBA</p>
            <div class="icon_container">
                <!-- dichiaro un altro container che userò per impostare i loghi al suo interno -->
                <img class="logo" src="./media/img/clients/logo_01.svg" alt="logo1" title="questo è il logo n°1"></img>
                <img class="logo" src="./media/img/clients/logo_02.svg" alt="logo2" title="questo è il logo n°2"></img>
                <img class="logo" src="./media/img/clients/logo_03.svg" alt="logo3" title="questo è il logo n°3"></img>
                <img class="logo" src="./media/img/clients/logo_04.svg" alt="logo4" title="questo è il logo n°4"></img>
                <img class="logo" src="./media/img/clients/logo_05.svg" alt="logo5" title="questo è il logo n°5"></img>
                <img class="logo" src="./media/img/clients/logo_06.svg" alt="logo6" title="questo è il logo n°6"></img>
            </div>
        </div>
        <div class="container6">
            <div class="sub_container">
                <p>Contact Us</p>
                <h1 id="top4"></h1>
                <p class="p2">Possiamo prenderci del tempo per chattare insieme o per bere un caffè!</p>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <input type="text" name="nome" placeholder="Nome">
                    <input type="text" name="cognome" placeholder="Cognome"> <br> <br>
                    <input type="email" name="email" placeholder="Email" checked="checked">
                    <input type="text" name="oggetto" placeholder="Oggetto"> <br> <br>
                    <textarea name="textarea" placeholder="Ponimi il tuo quesito..."></textarea> <br>
                    <input class="form_button" type="submit" name="submit" value="Invia" >
                    <input class="form_button" type="reset" name="reset" value="Reset"><br>
                    <span class="error"><?php echo $errorGeneric; ?></span>
                    <span class="succes"><?php echo $succesfull; ?></span>
                </form>
            </div>
        </div>
    </main>
    <!-- richiamo il footer creato nell'apposito file footer.php -->
    <?php require("footer.php") ;?>
</body>
</html>
