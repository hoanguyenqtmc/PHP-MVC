<?php

class OrderDao
{
	 var $dbu;

    public function __construct() {
        $this->dbu = new DatabaseUtil();
        $this->dbu->Open();
    }
 public function Find()
    {
        $sql = "select * from orders";

        $orders = $this->dbu->Query($sql, array());

        return $orders;
    } 
public function FindOrder($id)
    {
        $sql = "select * from order_detail where order_id = :id ";


        $args = array(
            'id'=>$id
        );
        $order = $this->dbu->Query($sql, $args);
        return $order;
    } 
public function Insert_order(Order $order)
    {
        $sql = "insert into orders(name, email, telephone, note, price_order, status) values(:name, :email, :telephone, :note, :price_order, :status)";

        $args = array(
            "name"=>$order->Name,
            "email"=>$order->Email,
            "telephone"=>$order->Telephone,
            "note"=>$order->Note,
            "price_order"=>$order->Price_order,
            "status"=>$order->Status,

        );

        $this->dbu->Execute($sql, $args);

        $order->Id = $this->dbu->GetLastInsertedId();

        return $order;
    }
    public function Insert_pro_order(Order $order)
    {
        $sql = "insert into order_detail(order_id, product_id, product_name, price, sale, quantity) values(:order_id,:product_id, :product_name, :price, :sale, :qty)";
        if (isset($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $key => $value) {
            extract($value);
            $args = array(
            "order_id"=>$order->Id,
            "product_id"=>$product_id,
            "product_name"=>$product_name,
            "price"=>$price,
            "sale"=>$sale,
            "qty"=>$qty,

        );
        $this->dbu->Execute($sql, $args);

            }
        $order->Id = $this->dbu->GetLastInsertedId();

        return $order;
        }

    }
     public function Delete($id)
    {
        $sql = "Delete from orders where id = :id";

        $args = array(
            'id'=>$id
        );

        $result = $this->dbu->Execute($sql, $args);

        return $result;
    }
    public function Process( $id)
    {
        $sql = "update orders set status=:status where id=:id";

        $args = array(
            "id"=>$id,
            "status"=>1,
        );

        $result = $this->dbu->Execute($sql, $args);

        return $result;
    }
    public function  getInput($string)
    {
        return isset($_GET[$string]) ? $_GET[$string] : '';
    }

    public function Update($id,$status)
    {
        $sql = "update product set status = :status where product_id =:id";

        $args = array(
            'id'=>$id,
            'status'=>$status
        );

        $result = $this->dbu->Execute($sql, $args);

        return $result;
    }
}