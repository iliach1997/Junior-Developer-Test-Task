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
    include_once '../views/product/Errors/errors.php';
    include_once '../views/product/abstract/CreateProduct.php';
    class Book extends CreateProduct {
    
       
        public function __construct($sku,$name,$price,$option_type,$size,$weigth)
      { 
        $this->sku=$sku;
        $this->name=$name;
        $this->price=$price;
        $this->option_type=$option_type;
        $this->size=$size;
        $this->weigth=$weigth;
        // $this->heigth=$heigth;
        // $this->width=$width;
        // $this->length=$length;
  
      }
          
      
          
    public function book(){
        return $this->createdata($this->sku,$this->name,$this->price,$this->option_type,null,$this->weigth,null,null,null);
    }}
    $ProductCreate=new Book($sku,$name,$price,$option_type,$size,$weigth,$heigth,$width,$length);
    $ProductCreate->book();
    }}