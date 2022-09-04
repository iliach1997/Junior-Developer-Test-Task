<?php

if(isset($_POST['submit'])){
    if($_SERVER['REQUEST_METHOD']==='POST'){
$sku=$_POST['sku'];
$name=$_POST['name'];
$price=$_POST['price'];
$option_type=$_POST['option_type'];
$size=$_POST['size'];
$weigth=$_POST['weigth'];
$heigth=$_POST['heigth'];
$width=$_POST['width'];
$length=$_POST['length'];
$errors=include_once './Errors/errors.php';
include_once './abstract/CreateProduct.php';
class Product extends CreateProduct{
   

    public function create()
    {
        $this->addProduct();
      
    }
}
if (empty($errors)){
$ProductCreate=new Product($sku,$name,$price,$option_type,$size,$weigth,$heigth,$width,$length);

$ProductCreate->create();
}
var_dump($errors);
}
}






