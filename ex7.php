<?php
$titles = 'Exercice 7';
require_once 'header.php';
require_once 'parameters.php';
$dsn = 'mysql:dbname=' . DB . '; host=' . HOST;
try {
    $db = new PDO($dsn, USER, PASSWORD);
} catch (Exception $ex){
    die('Connexion échoué');
} ?> <h1>Exercice 7</h1>
<?php
$query = 'SELECT * FROM `clients`';
$clientsQueryStat = $db->query($query);
$clientsList = $clientsQueryStat->fetchAll(PDO::FETCH_ASSOC);
foreach ($clientsList AS $client):
    if($client['card'] == 1){
    ?>
    <p><?= $client['lastName'] .' '. $client['firstName'] .', '. $client['birthDate'] .', oui : '. $client['cardNumber'] .'.' ?></p>
<?php } else{ ?>
<p><?= $client['lastName'] .' '. $client['firstName'] .', '. $client['birthDate'] .', non.' ?></p>
 <?php   }
    endforeach; ?>
</body>
</html>
