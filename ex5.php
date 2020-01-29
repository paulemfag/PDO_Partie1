<?php
$titles = 'Exercice 5';
require_once 'header.php';
require_once 'parameters.php';
$dsn = 'mysql:dbname=' . DB . '; host=' . HOST;
try {
    $db = new PDO($dsn, USER, PASSWORD);
} catch (Exception $ex){
    die('Connexion échoué');
} ?>
<h1>Exercice 5</h1>
<?php
$queryFive = 'SELECT * FROM `clients` WHERE `lastName` LIKE \'M%\' ORDER BY `lastName` ASC';
$likeMClientsQueryStat = $db->query($queryFive);
$likeMClientsList = $likeMClientsQueryStat->fetchAll(PDO::FETCH_ASSOC);
foreach ($likeMClientsList AS $client): ?>
    <p><?= $client['lastName'] . ' ' . $client['firstName']?></p>
<?php endforeach; ?>
</body>
</html>
