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
        $third = 2;
        $sum =1;


        for ($i=0; $i<$num; $i++){

            if ($i == 0 || $i == 1 || $i ==2){
                if ($i == 0 || $i == 1){
                    $sum = 1;
                }
                if ($i ==2){
                    $sum = 2;
                }
            }
            else{
                $sum = $first+$second+$third;
                $first = $second;
                $second = $third;
                $third = $sum;
            }
            echo "$sum , ";
        }
    }
    ?>
</body>
</html>