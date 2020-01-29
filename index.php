<?php
$titles = 'Exercice 1';
require_once 'header.php';
require_once 'parameters.php';
$dsn = 'mysql:dbname=' . DB . '; host=' . HOST . ';';
try {
     $db = new PDO($dsn, USER, PASSWORD);
} catch (Exception $ex){
     die('Connexion échoué');
} ?> <h1>Exercice 1</h1>
<?php
$query = 'SELECT * FROM `clients`';
$clientsQueryStat = $db->query($query);
$clientsList = $clientsQueryStat->fetchAll(PDO::FETCH_ASSOC);
foreach ($clientsList AS $client): ?>
     <p><?= $client['firstName'] . ' ' . $client['lastName']  ?></p>
<?php endforeach; ?>
</body>
</html>
