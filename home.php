<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.min.css">
    <link rel="stylesheet" href="./dati.php">
    <title>Document</title>
</head>
<body>
     <!-- richiamo il menù creato nell'apposito file header.php -->
    <?php require("header.php") ;?>
    <main>
        <!-- definisco 6 container che andrò impostore con setup_container -->
       <div class="container1">
        <img src="./media/img/logo/yellowmoon_logo_01.svg" alt="logo_main">
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
                <p>PORFOLIO</p>
                <p>QUANDO NON HO NULLA DA FARE MI PIACE CREARE QUALCUNA DI QUESTE ROBE</p>
                <div class="gallery_container">
        <!-- dichiaro un altro container che userò per impostare le img al suo interno -->
                    <ul>
                        <li> <a href="./portfolio1.php"><img class="gallery_element" src="./media/img/portfolio/portfolio_01.jpg" alt="img1"></img></a></li>
                        <li> <a href="./portfolio2.php"><img class="gallery_element" src="./media/img/portfolio/portfolio_02.jpg" alt="img2"></img></a></li>
                        <li> <a href="./portfolio3.php"><img class="gallery_element" src="./media/img/portfolio/portfolio_03.jpg" alt="img3"></img></a></li>
                        <li> <a href="./portfolio4.php"><img class="gallery_element" src="./media/img/portfolio/portfolio_04.jpg" alt="img4"></img></a></li> <br>
                        <li> <a href="./portfolio5.php"><img class="gallery_element" src="./media/img/portfolio/portfolio_05.jpg" alt="img5"></img></a></li>
                        <li> <a href="./portfolio6.php"><img class="gallery_element" src="./media/img/portfolio/portfolio_06.jpg" alt="img6"></img></a></li>
                        <li> <a href="./portfolio7.php"><img class="gallery_element" src="./media/img/portfolio/portfolio_07.jpg" alt="img7"></img></a></li>
                        <li> <a href="./portfolio8.php"><img class="gallery_element" src="./media/img/portfolio/portfolio_08.jpg" alt="img8"></img></a></li>
                        
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
            <img class="logo" src="./media/img/clients/logo_01.svg" alt="logo1"></img>
            <img class="logo" src="./media/img/clients/logo_02.svg" alt="logo2"></img>
            <img class="logo" src="./media/img/clients/logo_03.svg" alt="logo3"></img>
            <img class="logo" src="./media/img/clients/logo_04.svg" alt="logo4"></img>
            <img class="logo" src="./media/img/clients/logo_05.svg" alt="logo5"></img>
            <img class="logo" src="./media/img/clients/logo_06.svg" alt="logo6"></img>
        </div>
       </div>
       <div class="container6">
        <div class="sub_container">
            <p>Contact Us</p>
            <h1 id="top4"></h1>
            <p class="p2">Possiamo prenderci del tempo per chattare insieme o per bere un caffè!</p>
            <!-- richiamo il form creato nell'apposito file form.php -->
            <?php require("form.php") ;?>
        </div>
       </div>
    </main>
      <!-- richiamo il footer creato nell'apposito file footer.php -->
    <?php require("footer.php") ;?>
</body>
</html>