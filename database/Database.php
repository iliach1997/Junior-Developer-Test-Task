<?php 
// connection mysql 
// $pdo=new PDO('mysql:host=localhost;dbname=product_crud','root','');
// $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$pdo=new PDO('mysql:host=localhost;dbname=junior_developer','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$statement=$pdo->prepare('SELECT * FROM products');
$statement->execute();
$products=$statement->fetchAll(PDO::FETCH_ASSOC);
return $pdo;
