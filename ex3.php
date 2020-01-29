<?php
$titles = 'Exercice 3';
require_once 'header.php';
require_once 'parameters.php';
$dsn = 'mysql:dbname=' . DB . '; host=' . HOST . ';';
try {
    $db = new PDO($dsn, USER, PASSWORD);
} catch (Exception $ex){
    die('Connexion échoué');
} ?>
<h1>Exercice 3</h1>
<?php
$queryThree = 'SELECT * FROM `clients` LIMIT 20';
$twentyClientsQueryStat = $db->query($queryThree);
$twentyFirstClientsList = $twentyClientsQueryStat->fetchAll(PDO::FETCH_ASSOC);
foreach ($twentyFirstClientsList AS $client): ?>
    <p><?= $client['id'] . ' ' . $client['firstName'] . ' ' . $client['lastName']  ?></p>
<?php endforeach; ?>
</body>
</html>
