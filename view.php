<?php
require_once 'connection.php';
$id = new \MongoDB\BSON\ObjectId($_GET['id']);
$filter = ['_id' => $id];
$query = new MongoDB\Driver\Query($filter);          
$article = $client->executeQuery("flori.flowers", $query);
$doc = current($article->toArray());
?>

<ul>
    <li><?php echo $doc->nume;?></li>
    <li><?php echo $doc->culoare;?></li>
    <li><?php echo $doc->marime;?></li>
    <li><?php echo $doc->pret;?></li>
</ul>
<a href="index.php">Back</a>
