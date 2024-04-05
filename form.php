<?php
if(isset($_POST ["submit"])){
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica che i dati siano stati inviati tramite POST

    // Estraggo i valori dai campi del form
    $nome = $_POST["nome"];
    $cognome = $_POST["cognome"];
    $oggetto = $_POST["oggetto"];
    $email = $_POST["email"];
    $textarea = $_POST["textarea"];

    // Creo un array associativo con i dati estratti
    $dati =[
        "nome" => $nome,
        "cognome" => $cognome,
        "oggetto" => $oggetto,
        "email"=> $email,
        "textarea"=> $textarea
    ];

    // Converto l'array in formato JSON
    $json_dati = json_encode($dati);

    // Specifico il percorso del file JSON in cui salvare i dati
    $file_json = "dati_form.json";

    // Scrivo i dati nel file JSON
    file_put_contents($file_json, $json_dati);

    echo "I dati sono stati salvati correttamente nel file JSON.";
    } else {
        // Se i dati non sono stati inviati tramite POST, mostra un messaggio di errore
        echo "Errore: I dati del form non sono stati inviati correttamente.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.min.css">
    <title>Form</title>
</head>
<body>
    <form action="./form.php" method="post">
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="cognome" placeholder="Cognome"> <br> <br>
        <input type="email" name="email" placeholder="Email" checked="checked">
        <input type="text" name="oggetto" placeholder="Oggetto"> <br> <br>
        <textarea name="textarea" placeholder="Ponimi il tuo quesito..."></textarea> <br>
        <input class="form_button" type="submit" name="submit" value="Invia" >
        <input class="form_button" type="reset" name="reset" value="Reset">
    </form>
</body>
</html>