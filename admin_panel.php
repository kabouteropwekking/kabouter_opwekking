<?php
$responses = file_get_contents('responses.txt');
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Medewerkers Controlepaneel</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Ontvangen Berichten</h1>
    <pre><?php echo htmlspecialchars($responses); ?></pre>
</body>
</html>
