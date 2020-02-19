<?php

class ProductDao
{

	var $dbu;

    public function __construct() {
        $this->dbu = new DatabaseUtil();
        $this->dbu->Open();
    }

	public function Find()
    {
        $sql = "select * from product";

        $products = $this->dbu->Query($sql, array());

        return $products;
    }

    public function InsertP(Product $product)
    {
        $sql = "insert into product(product_name, price,sale, image, date) values(:name, :price, :sale, :image, :date)";

        $args = array(
            "name"=>$product->Name,
            "price"=>$product->Price,
            "sale"=>$product->Sale,
            "image"=>$product->Image,
            "date"=>$product->Date,

        );

        $this->dbu->Execute($sql, $args);

        $product->Id = $this->dbu->GetLastInsertedId();

        return $product;
    }
     public function FindOne($id)
    {
        $sql = "select * from product where product_id = :id";

        $args = array(
            'id'=>$id
        );

        $product = $this->dbu->Query($sql, $args, true);

        return $product;
    }
    public function Update(Product $product)
    {
        $sql = "update product set product_name =:name, price =:price, sale = :sale ,image = :image ,date = :date where product_id =:id";

        $args = array(
            'id'=>$product->ProductId,
            "name"=>$product->Name,
            "price"=>$product->Price,
            "sale"=>$product->Sale,
            "image"=>$product->Image,
            "date"=>$product->Date,
        );

        $result = $this->dbu->Execute($sql, $args);

        return $result;
    }
    public function Delete($id)
    {
        $sql = "Delete from product where product_id = :id";

        $args = array(
            'id'=>$id
        );

        $result = $this->dbu->Execute($sql, $args);

        return $result;
    }
    public function file_upload(){
        $tmp_name=$_FILES['image']['tmp_name']; 
        $error=$_FILES['image']['error']; 
        $path=$_SERVER['DOCUMENT_ROOT'].'/HOC_KY_5/cake_shop/admin/images'; 
        $name= $path.DIRECTORY_SEPARATOR.$_FILES['image']['name'];
        $success=move_uploaded_file($tmp_name,$name);
        
        
        if ($success) {
            $ul_mec= $name.'has been uploaded';
        }  
    }

}