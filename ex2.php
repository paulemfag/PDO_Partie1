<?php
$titles = 'Exercice 2';
require_once 'header.php';
require_once 'parameters.php';
$dsn = 'mysql:dbname=' . DB . '; host=' . HOST;
try {
    $db = new PDO($dsn, USER, PASSWORD);
} catch (Exception $ex){
    die('Connexion échoué');
} ?>
<h1>Exercice 2</h1>
<?php
$queryTwo = 'SELECT * FROM `showTypes`';
$showQueryStat = $db->query($queryTwo);
$showTypesList = $showQueryStat->fetchAll(PDO::FETCH_ASSOC);
foreach ($showTypesList AS $show): ?>
    <p><?= $show['type'] ?></p>
<?php endforeach;?>
</body>
</html>
