<?php session_start(); ?>

<form method="post" action="">
    Identifiant : <input type="text" name="identifiant" required><br>
    Mot de passe : <input type="password" name="motdepasse" required><br>
    <button type="submit">Se connecter</button>
</form>

<?php
$identifiantCorrect = "admin";
$motdepasseCorrect = "1234";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['identifiant'] === $identifiantCorrect && $_POST['motdepasse'] === $motdepasseCorrect) {
        $_SESSION['utilisateur'] = $_POST['identifiant'];
        header('Location: bienvenue.php');
        exit();
    } else {
        echo "<p style='color:red;'>Identifiants incorrects.</p>";
    }
}
?>
