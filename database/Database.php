<?php 
// connection mysql 
// $pdo=new PDO('mysql:host=localhost;dbname=product_crud','root','');
// $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$pdo=new PDO('mysql:host=localhost;dbname=junior_developer','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

return $pdo;
