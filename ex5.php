<form method="post" action="">
    Nom : <input type="text" name="nom" required><br>
    Message : <textarea name="message" required></textarea><br>
    <button type="submit">Laisser un message</button>
</form>

<?php
$fichier = "messages.txt";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST['nom']);
    $message = htmlspecialchars($_POST['message']);
    $date = date('Y-m-d H:i:s');
    $contenu = "$date - $nom : $message" . PHP_EOL;
    file_put_contents($fichier, $contenu, FILE_APPEND);
}

if (file_exists($fichier)) {
    echo "<h3>Messages :</h3>";
    $messages = file($fichier, FILE_IGNORE_NEW_LINES);
    foreach ($messages as $ligne) {
        echo nl2br(htmlspecialchars($ligne)) . "<br>";
    }
}
?>
