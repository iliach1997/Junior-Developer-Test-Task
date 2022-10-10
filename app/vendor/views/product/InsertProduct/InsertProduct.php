<?php

namespace Product\InsertProduct;

require_once realpath("../../../autoload.php");

use Product\CreateProduct\CreateProduct;

class InsertProduct extends CreateProduct
{
    public $object;

    public function inputData(): void
    {
        $this->data = json_decode(file_get_contents('php://input'));
    }

    public function getObject(): array
    {
        return array(
            "sku" => $this->sku,
            "name" => $this->name,
            "price" => $this->price,
            "option_type" => $this->option_type,
            "size" => $this->size,
            "weigth" => $this->weigth,
            "heigth" => $this->heigth,
            "width" => $this->width,
            "length" => $this->length
        );
    }

    public function setData(): void
    {
        $this->object = $this->getObject();
    }

    public function createData(): array
    {
        $query = "INSERT INTO products(sku,name,price,option_type,size,weigth,heigth,width,length)
        VALUES(:sku,:name,:price,:option_type,:size,:weigth,:heigth,:width,:length)";

        $data = array(
            ':sku' => $this->object['sku'],
            ':name' => $this->object['name'],
            ':price' => $this->object['price'],
            ':option_type' => $this->object['option_type'],
            ':size' => $this->object['size'],
            ':weigth' => $this->object['weigth'],
            ':heigth' => $this->object['heigth'],
            ':width' => $this->object['width'],
            ':length' => $this->object['length'],
        );

        $this->prepareQuery($query, $data);

        return array(
            "status" => "OK",
        );
    }
}

$insert = new InsertProduct();
$insert->createData();
