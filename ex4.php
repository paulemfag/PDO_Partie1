<?php
$titles = 'Exercice 4';
require_once 'header.php';
require_once 'parameters.php';
$dsn = 'mysql:dbname=' . DB . '; host=' . HOST;
try {
    $db = new PDO($dsn, USER, PASSWORD);
} catch (Exception $ex){
    die('Connexion échoué');
} ?>
<h1>Exercice 4</h1>
<?php
$queryFour = 'SELECT * FROM `clients` WHERE `card` = 1';
$cardClientsQueryStat = $db->query($queryFour);
$cardClientsList = $cardClientsQueryStat->fetchAll(PDO::FETCH_ASSOC);
foreach ($cardClientsList AS $client): ?>
    <p><?= $client['firstName'] . ' ' . $client['lastName']  ?></p>
<?php endforeach; ?>
</body>
</html>
