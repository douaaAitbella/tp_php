<form method="post" action="">
    Longueur du mot de passe : <input type="number" name="longueur" required>
    <button type="submit">Générer</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $longueur = $_POST['longueur'];
    $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
    $motdepasse = '';

    for ($i = 0; $i < $longueur; $i++) {
        $motdepasse .= $caracteres[rand(0, strlen($caracteres) - 1)];
    }

    echo "<h3>Mot de passe généré : $motdepasse</h3>";
}
?>
