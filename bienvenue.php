<?php
session_start();
if (!isset($_SESSION['utilisateur'])) {
    header('Location: login.php');
    exit();
}
?>

<h2>Bienvenue, <?php echo htmlspecialchars($_SESSION['utilisateur']); ?> !</h2>
<a href="deconnexion.php">Déconnexion</a>
