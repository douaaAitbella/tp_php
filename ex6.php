<form method="post" action="">
    <p>1. Quelle est la capitale de la France ?</p>
    <input type="radio" name="q1" value="Paris" required> Paris
    <input type="radio" name="q1" value="Lyon"> Lyon
    <input type="radio" name="q1" value="Marseille"> Marseille

    <p>2. 2 + 2 = ?</p>
    <input type="radio" name="q2" value="3" required> 3
    <input type="radio" name="q2" value="4"> 4
    <input type="radio" name="q2" value="5"> 5

    <p>3. Quelle est la couleur du ciel ?</p>
    <input type="radio" name="q3" value="Bleu" required> Bleu
    <input type="radio" name="q3" value="Vert"> Vert
    <input type="radio" name="q3" value="Rouge"> Rouge

    <br><br><button type="submit">Valider</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $score = 0;
    $reponses = [
        'q1' => 'Paris',
        'q2' => '4',
        'q3' => 'Bleu'
    ];

    foreach ($reponses as $question => $bonneReponse) {
        if (isset($_POST[$question]) && $_POST[$question] == $bonneReponse) {
            $score++;
        }
    }

    echo "<h3>Votre score : $score / " . count($reponses) . "</h3>";
}
?>
