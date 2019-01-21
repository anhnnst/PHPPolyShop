<?php

class Product{
    public $ProductId;
    public $Name;
    public $Quantity;
    public $Price;
    public $Description;

    public function RetrieveRequestParam()
    {
        $this->Name = filter_input(INPUT_POST, 'name');
        $this->Quantity = filter_input(INPUT_POST, 'quantity');
        $this->Price = filter_input(INPUT_POST, 'price');
        $this->Description = filter_input(INPUT_POST, 'description');

        $productId =  filter_input(INPUT_POST, 'productId');

        if ($productId != null) $this->ProductId = $productId;
    }
}