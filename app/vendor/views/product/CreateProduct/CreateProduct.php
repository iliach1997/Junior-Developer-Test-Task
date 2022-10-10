<?php

namespace Product\CreateProduct;

use Product\DbConnect\DbConnect;

abstract class CreateProduct extends DbConnect
{
  public $sku;
  public $name;
  public $price;
  public $option_type;
  public $size;
  public $weigth;
  public $heigth;
  public $width;
  public $length;
  public $data;

  public function __construct()
  {
    $this->inputData();
    $this->sku = $this->data->sku;
    $this->name = $this->data->name;
    $this->price = $this->data->price;
    $this->option_type = $this->data->option_type;
    $this->size = $this->data->size;
    $this->weigth = $this->data->weigth;
    $this->heigth = $this->data->heigth;
    $this->width = $this->data->width;
    $this->length = $this->data->length;
    $this->setData();
  }

  abstract public function getObject(): array;
  abstract public function createData(): array;
  abstract public function setData(): void;
  abstract public function inputData(): void;
};
