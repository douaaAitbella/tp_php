<form method="post" action="">
    Nom : <input type="text" name="nom" required><br>
    Email : <input type="email" name="email" required><br>
    Message : <textarea name="message" required></textarea><br>
    <button type="submit">Envoyer</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['message'])) {
        echo "<h3>Merci pour votre message :</h3>";
        echo "Nom : " . htmlspecialchars($_POST['nom']) . "<br>";
        echo "Email : " . htmlspecialchars($_POST['email']) . "<br>";
        echo "Message : " . nl2br(htmlspecialchars($_POST['message']));
    } else {
        echo "<p style='color:red;'>Veuillez remplir tous les champs.</p>";
    }
}
?>
