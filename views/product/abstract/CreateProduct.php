<?php
abstract class CreateProduct{

    public function createdata($sku,$name,$price,$option_type,$size,$weigth,$heigth,$width,$length){
      $pdo = require_once '../database/Database.php';

      $statement=$pdo->prepare("INSERT INTO products(sku,name,price,option_type,size,weigth,heigth,width,length)
      VALUES(:sku,:name,:price,:option_type,:size,:weigth,:heigth,:width,:length)"
    );
    $statement->bindValue(':sku',$sku);
    $statement->bindValue(':name',$name);
    $statement->bindValue(':price',$price);
    $statement->bindValue(':option_type',$option_type);
    $statement->bindValue(':size',$size);
    $statement->bindValue(':weigth',$weigth);
    $statement->bindValue(':heigth',$heigth);
    $statement->bindValue(':width',$width);
    $statement->bindValue(':length',$length);
    $statement->execute();
    }
        public $sku;
        public $name; 
        public $price;
        public $option_type;
        public $size;
        public $weigth;
        public $heigth;
        public $width;
        public $length;
        public function __construct($sku,$name,$price,$option_type,$size,$weigth,$heigth,$width,$length)
      { 
        $this->sku=$sku;
        $this->name=$name;
        $this->price=$price;
        $this->option_type=$option_type;
        $this->size=$size;
        $this->weigth=$weigth;
        $this->heigth=$heigth;
        $this->width=$width;
        $this->length=$length;
  
      }
    
      public function addProduct(){
      if($this->option_type==='dvd'){
      $this->createdata($this->sku,$this->name,$this->price,$this->option_type,$this->size,null,null,null,null);
      }
      else if($this->option_type==='book'){
      $this->createdata($this->sku,$this->name,$this->price,$this->option_type,null,$this->weigth,null,null,null);
       }
      else if($this->option_type==='furniture'){
      $this->createdata($this->sku,$this->name,$this->price,$this->option_type,null,null,$this->heigth,$this->width,$this->length);
     }
      }
      abstract public function create();
    };