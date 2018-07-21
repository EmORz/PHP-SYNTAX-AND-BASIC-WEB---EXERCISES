<?php
     if (isset($_GET['num1'])&&isset($_GET['num2'])&&isset($_GET['num3'])){
         $num1 = intval($_GET['num1']);
         $num2 = intval($_GET['num2']);
         $num3 = intval($_GET['num3']);
         $count =0;
         //•	Multiplies num1 * num2 if num2 is greater than or equal to num1
         if (0<$num1){
             $count++;
         }
         if (0<$num2){
             $count++;
         }
         if (0<$num3){
             $count++;
         }
         if ($count % 2 == 0){
             echo "Negative";
         }
         else{
             echo "Positive";
         }
     }

?>


<form>
    X: <input type="text" name="num1" />
    Y: <input type="text" name="num2" />
    Z: <input type="text" name="num3" />
    <input type="submit" />
</form>
