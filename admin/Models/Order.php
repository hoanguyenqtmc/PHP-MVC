<?php

class Order
{
    public $Id;
    public $Name;
    public $Email;
    public $Telephone;
    public $Note;
    public $Price_order;
    public $Status;
    // public $Pro_id;
    // public $Pro_name;
    // public $Pro_price;
    // public $Pro_sale;
    // public $Pro_qua;
    public $Order_id;
    public function RetrieveRequestParam()
    {   
        $this->Name = filter_input(INPUT_POST, 'name');
        $this->Email = filter_input(INPUT_POST, 'email');
        $this->Telephone = filter_input(INPUT_POST, 'telephone');
        $this->Note = filter_input(INPUT_POST, 'note');
        $this->Price_order = filter_input(INPUT_POST, 'price_order');
        $this->Status = filter_input(INPUT_POST, 'status');
        // $this->Pro_id = filter_input(INPUT_POST, 'pro_id');
        // $this->Pro_name = filter_input(INPUT_POST, 'pro_name');
        // $this->Pro_price = filter_input(INPUT_POST, 'pro_price');
        // $this->Pro_sale = filter_input(INPUT_POST, 'pro_sale');
        // $this->Pro_qua = filter_input(INPUT_POST, 'pro_qua');
        $id =  filter_input(INPUT_POST, 'id');

        if ($id != null) $this->Id = $id;
        $this->Order_id = $id;
    }
}