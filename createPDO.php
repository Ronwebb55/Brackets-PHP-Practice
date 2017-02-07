<?php


//PDO Introduction - Lesson 1

$host = "localhost";
$dbname = "publications";
$user = "root";
$password = "";

$mt = "Mark Twain";
$id = 1;

$pdo = new PDO("mysql:dbname=$dbname; host=$host" , $user, $password);

if($pdo)
{
    echo "<pre>";
   /* foreach($pdo->query("select * from classics where author like 'Mark Twain' ") as $k)
    {
        print_r($k);
    }

    $smt = $pdo->query("select * from classics where author like 'Mark Twain' ");

    print_r($smt);*/

    $smt = $pdo->prepare("select * from classics");

   // $smt->bindParam(":ID", $id);

    if ($smt->execute())
    {
        $rows = $smt->fetchAll(PDO::FETCH_OBJ);
      print_r($rows);
    }

}

?>
