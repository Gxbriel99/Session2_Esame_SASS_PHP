<?php
// Variabili per gestire errori e messaggi di successo
$errorGeneric = '';
$succesfull = '';
$error=0;
$nome=$cognome=$oggetto=$email=$textarea='';
// Verifica se la richiesta è di tipo POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera i dati dal form
    $nome = $_POST["nome"];
    $cognome = $_POST["cognome"];
    $email = $_POST["email"];
    $oggetto = $_POST["oggetto"];
    $textarea = $_POST["textarea"];

    // Valuta le condizioni dei dati inseriti
    switch(true){
        // Se uno dei campi è vuoto, genera un errore generico
        case($nome =='' && $cognome=='' && $email=='' && $oggetto=='' && $textarea==''):
            $errorGeneric = "I campi non possono essere lasciati vuoti";
            $error++;
            break;
        // Se il campo nome è vuoto, genera un errore specifico per il campo nome
        case(empty($nome)):
            $errorGeneric = "Attenzione! Il campo nome non può essere lasciato vuoto";
            $error++;
            break;
        // Se il campo cognome è vuoto, genera un errore specifico per il campo cognome
        case(empty($cognome)):
            $errorGeneric = "Attenzione! Il campo cognome non può essere lasciato vuoto";
            $error++;
            break;
        // Se il campo oggetto è vuoto, genera un errore specifico per il campo oggetto
        case(empty($oggetto)):
            $errorGeneric = "Attenzione! Il campo oggetto non può essere lasciato vuoto";
            $error++;
            break;
        // Se il campo email è vuoto, genera un errore specifico per il campo email
        case(empty($email)):
            $errorGeneric = "Attenzione! Il campo email non può essere lasciato vuoto";
            $error++;
            break;
        // Se il campo textarea è vuoto, genera un errore specifico per il campo textarea
        case(empty($textarea)):
            $errorGeneric = "Attenzione! Il campo textarea non può essere lasciato vuoto";
            $error++;
            break;
        // Se tutti i campi sono stati compilati, memorizza i dati e mostra un messaggio di successo
        default:
            // Crea un array associativo con i dati del form
            $dati = [
                "nome" => $nome,
                "cognome" => $cognome,
                "email" => $email,
                "oggetto" => $oggetto,
                "textarea" => $textarea
            ];
    
            // Converti l'array in formato JSON
            $json_dati = json_encode($dati);
            // Nome del file JSON in cui verranno memorizzati i dati
            $file_json = "dati_form.json";
            // Scrivi i dati nel file JSON
            file_put_contents($file_json, $json_dati);
            // Mostra un messaggio di successo
            $succesfull = "I dati sono stati inviati correttamente";
            break;
    }
}
// Fine del codice PHP
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.min.css">
    <script>
        function ShowMenu(){
            const sidebar=document.querySelector('.sidebar');
            sidebar.style.display = 'flex';
        }
        function HideMenu(){
            const sidebar=document.querySelector('.sidebar');
            sidebar.style.display = 'none';
        }
    </script>
    <style>
         .icon-menu{
                display: none;
            }
        .error{
            color: red;
        }
        .error_input{
            border: solid red 2px;
            height: 30px;
            width: 70%;
            margin-top: 6px; 
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
        <div id="top0" class="container1">
            <img class="logo_container1" src="./media/img/logo/yellowmoon_logo_01.svg" alt="logo_main">
            <p class="p1">Welcome to the yellow side of moon</p>
            <p class="p2">We do some creative stuff</p>
            <!-- punto di collegamento fra la ancora e il menù -->
            <a  class="container1_btn" href="#top1">ESPLORA</a>
        </div>
        <div id="top1" class="container2">
            <!-- punto di collegamento fra la ancora e il menù -->
            <div class="text_container2">
                <div class="p1">ABOUT US</div>
                <div class="p2">YELLOW SIDE OF THE MOON IS NOT SECRET ANYMORE</div>
                <!-- dichiaro un altro container che userò per impostare gli _elementi al suo interno -->
                <div class="sub_text_container">
                    <p><span class="span1">01|</span>CREIAMO QUALCHE OPERA D'ARTE <br><span class="span2">SI TRATTA DI SPAZI VUOTI CON QUALCHE TESTO, IMMAGINI E ANCORA SPAZI VUOTI.</span></p>
                    <p><span class="span1">02|</span>PROGRAMMIAMO QUALCHE APPLICAZIONE<br><span class="span2">TI BASTA CLICCARE E LA MAGIA AVVERRÀ,QUALCUNO DOVRÀ FARLO IN QUESTO MODO.</span></p>
                    <p><span class="span1">03|</span>SCATTIAMO ANCHE DELLE FOTO<br><span class="span2">QUESTA È LA PARTE FACILE DEL LAVORO, BASTA PUNTARE LA FOTOCAMERA E PUFF.</span></p>
                </div>
            </div>
        </div>
        <div class="container3">
            <p id="sub_p">
                QUESTO È UNO SPAZIO PER TESTO RANDOM CHE QUANDO <br> TI VERRÀ QUALCOSA IN MENTE POTRAI METTERE QUI.
            </p>
            <p id="sub_p2">NO...NON SONO PIGRO,OGNI SITO HA BISOGNO DI SPAZI GRANDI DA SFRUTTARE COSI.</p>
        </div>
        <!-- punto di collegamento fra la ancora e il menù -->
        <div id="top2" class="container4">
            <div class="sub_container">
                <p>PORTFOLIO</p>
                <p>QUANDO NON HO NULLA DA FARE MI PIACE CREARE QUALCUNA DI QUESTE ROBE</p>
                <div class="gallery_container">
                    <!-- dichiaro un altro container che userò per impostare le img al suo interno -->
                    <ul>
                        <li> <a href="portfolio.php?id=1"><img class="gallery_element" src="./media/img/portfolio/portfolio_01.jpg" alt="img1" title="un uomo con un acconciatura bizzarra "></a></li>
                        <li> <a href="portfolio.php?id=2"><img class="gallery_element" src="./media/img/portfolio/portfolio_02.jpg" alt="img2" title="Una scimmia con in testa una buccia di banana "></a></li>
                        <li> <a href="portfolio.php?id=3"><img class="gallery_element" src="./media/img/portfolio/portfolio_03.jpg" alt="img3" title="Un uomo che sta per mangiare "></a></li>
                        <li> <a href="portfolio.php?id=4"><img class="gallery_element" src="./media/img/portfolio/portfolio_04.jpg" alt="img4" title=" una donna arrabbiata che si sfoga "></a></li>
                        <li> <a href="portfolio.php?id=5"><img class="gallery_element" src="./media/img/portfolio/portfolio_05.jpg" alt="img5" title="un uomo che usa una banana come pistola" ></a></li>
                        <li> <a href="portfolio.php?id=6"><img class="gallery_element" src="./media/img/portfolio/portfolio_06.jpg" alt="img6" title="un uomo che sta assaggiando un limone"></a></li>
                        <li> <a href="portfolio.php?id=7"><img class="gallery_element" src="./media/img/portfolio/portfolio_07.jpg" alt="img7" title="un uomo con mai e testa spropositate "></a></li>
                        <li> <a href="portfolio.php?id=8"><img class="gallery_element" src="./media/img/portfolio/portfolio_08.jpg" alt="img8" title="un uomo che dorme sul tappeto in casa sua "></a></li>
                    </ul>
                </div>
                <p>.. E NE ABBIAMO MOLTE ALTRE</p>
            </div>
        </div>
        <div id="top3" class="container5">
            <!-- punto di collegamento fra la ancora e il menù -->
            <p class="p1">CLIENTS</p>
            <p class="p2">QUALCUNO MI HA REALMENTE PAGATO PER QUESTA ROBA</p>
            <div class="icon_container">
                <!-- dichiaro un altro container che userò per impostare i loghi al suo interno -->
                <img class="logo" src="./media/img/clients/logo_01.svg" alt="logo1" title="questo è il logo n°1">
                <img class="logo" src="./media/img/clients/logo_02.svg" alt="logo2" title="questo è il logo n°2">
                <img class="logo" src="./media/img/clients/logo_03.svg" alt="logo3" title="questo è il logo n°3">
                <img class="logo" src="./media/img/clients/logo_04.svg" alt="logo4" title="questo è il logo n°4">
                <img class="logo" src="./media/img/clients/logo_05.svg" alt="logo5" title="questo è il logo n°5">
                <img class="logo" src="./media/img/clients/logo_06.svg" alt="logo6" title="questo è il logo n°6">
            </div>
        </div>
        <div id="top4" class="container6">
            <div class="sub_container">
                <form method="post" action="./index.php" novalidate>
                <p>Contact Us</p>
                <p class="p2">Possiamo prenderci del tempo per chattare insieme o per bere un caffè!</p>
                <input type="text" class="<?php if($error > 0 && isset($_POST['submit']) && empty($nome)) echo 'error_input'; else echo 'form_input'; ?>" name="nome" required  value="<?php echo $nome ?>" placeholder="Nome">
                <input type="text" class="<?php if($error > 0 && isset($_POST['submit']) && empty($cognome)) echo 'error_input'; else echo 'form_input'; ?>" name="cognome" required value="<?php echo $cognome ?>" placeholder="Cognome">
                <input type="email" class="<?php if($error > 0 && isset($_POST['submit']) && empty($email) ) echo 'error_input'; else echo 'form_input'; ?>" name="email" required value="<?php echo $email ?>" placeholder="Email">
                <input type="text" class="<?php if($error > 0 && isset($_POST['submit']) && empty($oggetto) ) echo 'error_input'; else echo 'form_input'; ?>" name="oggetto" required value="<?php echo $oggetto ?>" placeholder="Oggetto">
                <textarea name="textarea" class="<?php if($error > 0 && isset($_POST['submit']) && empty($textarea)) echo 'error_input'; else echo $textarea; ?>"required rows="5" cols="20" placeholder="Ponimi il tuo quesito..."><?php echo $textarea ?></textarea>
                <div class="container_form_button">
                    <input class="form_button" type="submit" name="submit" value="Invia" >
                    <input class="form_button" type="reset"  name="reset" value="Reset" >
                </div>
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
