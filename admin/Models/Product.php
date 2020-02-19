<?php

class Product{
    public $ProductId;
    public $Name;
    public $Price;
    public $Sale;
    public $Image;
    public $Date;
    public $Detail;
    public $Special;
    public $Type_id;
    public $Quantity;

    public function RetrieveRequestParam()
    {
        $this->Name = filter_input(INPUT_POST, 'name');
        $this->Price = filter_input(INPUT_POST, 'price');
        $this->Sale = filter_input(INPUT_POST, 'sale');
        $this->Image = $_FILES['image']['name'];
        $this->Date = filter_input(INPUT_POST, 'date');
        $this->Detail = filter_input(INPUT_POST, 'detail');
        $this->Special = filter_input(INPUT_POST, 'special');
        $this->Type_id = filter_input(INPUT_POST, 'type_id');
        $this->Quantity = filter_input(INPUT_POST, 'quantity');

        $ProductId =  filter_input(INPUT_POST, 'productid');
        if ($ProductId != null) $this->ProductId = $ProductId;
    }
}