<form method="post" action="">
    <input type="number" name="nombre1" required>
    <select name="operation">
        <option value="+">Addition</option>
        <option value="-">Soustraction</option>
        <option value="*">Multiplication</option>
        <option value="/">Division</option>
    </select>
    <input type="number" name="nombre2" required>
    <button type="submit">Calculer</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST['nombre1'];
    $b = $_POST['nombre2'];
    $op = $_POST['operation'];

    switch($op) {
        case '+': $resultat = $a + $b; break;
        case '-': $resultat = $a - $b; break;
        case '*': $resultat = $a * $b; break;
        case '/': 
            if ($b != 0) {
                $resultat = $a / $b;
            } else {
                $resultat = "Erreur : Division par zéro !";
            }
            break;
        default: $resultat = "Opération invalide.";
    }

    echo "<h3>Résultat : $resultat</h3>";
}
?>
