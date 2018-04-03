<?php
require_once 'connection.php';
$bulk = new MongoDB\Driver\BulkWrite;
if(isset($_POST["submit"])){
    $data=array(
        '_id' => new MongoDB\BSON\ObjectID,
        'nume'=>$_POST['nume'],
        'age'=>$_POST['age'],
        'culoare'=>$_POST['culoare'],
        'movie'=>$_POST['movie'],
        'marime'=>$_POST['marime'] ,
        'pret'=>$_POST['pret'] 
    );
    $bulk->insert($data);
}
$client->executeBulkWrite('flori.flowers',$bulk);
        
header('location:index.php');
?>
