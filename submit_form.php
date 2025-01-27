<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Hier kun je de gegevens opslaan in een database of een e-mail sturen
    // Voorbeeld: opslaan in een tekstbestand
    $file = 'responses.txt';
    $current = file_get_contents($file);
    $current .= "Naam: $name\nE-mail: $email\nBericht: $message\n\n";
    file_put_contents($file, $current);

    // Redirect of bevestiging
    echo "Bedankt voor je bericht!";
}
?>
