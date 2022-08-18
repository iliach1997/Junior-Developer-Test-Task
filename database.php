<?php 
// connection mysql 
$pdo=new PDO('mysql:host=localhost;dbname=forms-crud','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

return $pdo;