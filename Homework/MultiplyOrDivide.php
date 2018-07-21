<?php
    if (isset($_GET['num1'])&&isset($_GET['num2'])){
        $num1 = intval($_GET['num1']);
        $num2 = intval($_GET['num2']);
        $product =0;
        //•	Multiplies num1 * num2 if num2 is greater than or equal to num1
        if ($num2>=$num1){
            $product = $num1*$num2;
        }
        else{
            $product = $num1/$num2;
        }
        echo $product;
    }

?>

<form>
    N: <input type="text" name="num1" />
    M: <input type="text" name="num2" />
    <input type="submit" />
</form>
