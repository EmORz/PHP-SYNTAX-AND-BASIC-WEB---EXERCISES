<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
    <form>
        N: <input type="text" name="num" />
        <input type="submit" />
    </form>
	<!--Write your PHP Script here-->
    <?php
    if (isset($_GET['num'])){
        $num = intval($_GET['num']);
        $first = 1;
        $second = 1;
        $sum =1;


            for ($i=0; $i<$num; $i++){

                if ($i == 0 || $i == 1){
                    $sum = 1;
                }
                else{
                    $sum = $first+$second;
                    $first = $second;
                    $second = $sum;
                }
                echo "$sum , ";


            }





    }
    ?>
</body>
</html>