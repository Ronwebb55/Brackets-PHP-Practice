<?php
$host="localhost";
$username="root";
$password="";
$databasename="publications";


$pdo = new PDO("mysql:dbname=$dbname; host=$host" , $user, $password);

if($pdo){



if(isset($_POST['edit_row']))
{
 $row=$_POST['row_id'];
 $name=$_POST['name_val'];
 $email=$_POST['email_val'];
 $pnumber=$_POST['pnumber_val'];

 $statement = $link->prepare("INSERT INTO user_detail(name, email, pnumber)
    VALUES(?, ?, ?)");

$statement->execute(array("$name", "$email", "$pnumber"));
 exit();
}

if(isset($_POST['delete_row']))
{
$row=$_POST['row_id'];
$sql = "DELETE FROM user_detail WHERE id = :ID";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':ID', $row, PDO::PARAM_INT);
$stmt->execute();
 echo "success";
 exit();
}

if(isset($_POST['insert_row']))
{
echo "Hello World";
 $name=$_POST['name_val'];
 $email=$_POST['email_val'];
 $pnumber=$_POST['pnumber_val'];

 $query("insert into user_detail(name,email,pnumber)VALUES(:NAME,:EMAIL,:PNUMBER)";
 $stmt = $pdo->prepare($query);
 $stmt->bindParam(':NAME', $name);
 $stmt->bindParam(':EMAIL', $email);
 $stmt->bindParam(':PNUMBER',$pnumber);

 $stmt->execute();
 exit();
}
}
?>

