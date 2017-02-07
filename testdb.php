<?php

require 'classes\database.php';

$database = new database;

$database->query('SELECT * FROM posts WHERE numid = :id');
$database->bin(':id', 1);
$rows = $database->resultset();
//print_r($rows);

?>


<h1>Posts</h1>
<div>
    <?php foreach($rows as $row) : ?>
    <div>
        <h3><?php echo $row['title']; ?></h3>
        <p><?php echo $row['body']; ?></p>
    </div>
<?php endforeach; ?>
</div>
