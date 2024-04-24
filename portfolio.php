<?php
// Leggi il contenuto del file JSON
$json_data = file_get_contents('portfolio_data.json');

// Decodifica il JSON in un array associativo
$portfolio = json_decode($json_data, true);

// Controlla se l'ID del lavoro è stato passato come parametro nell'URL
if (isset($_GET['id'])) {
    $id_lavoro_selezionato = $_GET['id'];
    
    // Filtra il portfolio per l'ID del lavoro selezionato
    $lavoro_selezionato = array_filter($portfolio, function($lavoro) use ($id_lavoro_selezionato) {
        return $lavoro['id'] == $id_lavoro_selezionato;
    });

    // Se il lavoro è stato trovato, visualizza i dettagli
    if (!empty($lavoro_selezionato)) {
        $lavoro = reset($lavoro_selezionato); // Prendi il primo lavoro trovato
    } 
    else {
        echo "Lavoro non trovato.";
    }
} 
else {
    echo "Nessun ID del lavoro specificato.";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.min.css">
    <link rel="stylesheet" href="./portfolio_elements.min.css">
</head>
<body>
<?php require ("header_2.php") ;?>
<main>
    <div id="container">
        <div id="sub_container">
        <?php echo "<img src='{$lavoro['immagine']}' alt='{$lavoro['titolo']}' class='img'>"; ?>
            <ul> <span id="span1">Caratteristiche</span>
                <li>Creato con Photoshop <span id="span2">✔</span></li>
                <li>disponibile in PNG,SVG & JPG  <span id="span2">✔</span></li>
                <li>Risoluzione in 3840×2160(4k)  <span id="span2">✔</span></li>
                <li>Disponibilità immediata <span id="span2">✔</span></li>
            </ul>
        </div>
    </div>
</main>
<?php require("footer.php") ;?>
</body>
</html>