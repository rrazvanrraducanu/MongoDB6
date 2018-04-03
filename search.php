 <?php
require_once 'connection.php';
$nume=$_POST['nume'];
$filter = ['nume' => $nume];
    $query = new MongoDB\Driver\Query($filter);          
    $article = $client->executeQuery("flori.flowers", $query);
     $doc = current($article->toArray());
if($doc){
?>
<ul>
    <li><?php echo $doc->nume;?></li>
    <li><?php echo $doc->culoare;?></li>
    <li><?php echo $doc->marime;?></li>
    <li><?php echo $doc->pret;?></li>
</ul>
<?php
}else
    echo "No results. Please try again!";
?>
