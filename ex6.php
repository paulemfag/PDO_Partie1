<?php
$titles = 'Exercice 6';
require_once 'header.php';
require_once 'parameters.php';
$dsn = 'mysql:dbname=' . DB . '; host=' . HOST;
try {
    $db = new PDO($dsn, USER, PASSWORD);
} catch (Exception $ex){
    die('Connexion échoué');
} ?> <h1>Exercice 6</h1>
<?php
    $querySix = 'SELECT * FROM `shows` ORDER BY `title` ASC';
    $showsInformationsQueryStat = $db->query($querySix);
    $showsInformationsList = $showsInformationsQueryStat->fetchAll(PDO::FETCH_ASSOC);
    foreach ($showsInformationsList AS $show): ?>
    <p><?= $show['title'] . ' par ' . $show['performer'] . ', le ' . $show['date'] . ' à ' . $show['startTime'] ?></p>
<?php endforeach; ?>
</body>
</html>
