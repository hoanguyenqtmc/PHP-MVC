$(function(){
        $updatecart = $(".updatecart");
        $updatecart.click(function(e){
            e.preventDefault();
            $qty= $(this).parents("tr").find("#qty").val();
            console.log($qty);
            $key = $(this).attr("data-key");
            $.ajax({
                url: 'http://localhost:81/HOC_KY_5/cake_shop/Controller/Frontend.php?action=upcart',
                type: 'GET',
                data:{'qty':$qty,'key':$key},
                success:function(data)
                {
                    if(data ==1)
                    {
                        alert("Cập nhật giỏ hàng thành công !");
                        location.href='http://localhost:81/HOC_KY_5/cake_shop/Controller/Frontend.php?action=showcart';
                    }
                }
            });
        });
    });