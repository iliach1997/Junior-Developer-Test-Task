<?php
$errors=[];

if(!$sku){
$errors[]='Product sku is required';
}
if(!$price){
    $errors[]='Product name is required';
}
if(!$sku){
    $errors[]='Product price is required';
}
if($option_type==='type-switcher'){
  $errors[]='Please choose type-switcher';
}
if($option_type==='dvd'){
    $errors[]='Product size is required';
}
if($option_type==='book'){
    $errors[]='Product weigth is required';
}
if($option_type==='furniture'){
if(!$heigth){
        $errors[]='Product heigth is required';
    }
    elseif(!$width){
        $errors[]='Product width is required';
    }
    elseif(!$length){
        $errors[]='Product length is required';
    }
}






return $errors;