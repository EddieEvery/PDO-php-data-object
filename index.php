<?php
#variables for the database
$host = 'local';
$user = 'root';
$password = '123456';
$dbname = 'pdoposts';

//set the data source name 'DSN'
$dsn = 'mysql:host='.$host.';dbname='.$dbname;

//Create a PDO instance/correction
$pdo = new PDO ($dsn,$user,$password);

#
/**
 * $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,
 * PDO::FETCH_OBJ);
 */

//PDO QUERY

$search =$pdo->query('SELECT * FROM posts');

while($row = $search->fetch(PDO::FETCH_ASSOC)){
    echo $row['title'].'<br>';
}


