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

        for ($i = $num; $i>=2; $i--){
            $isPrime = 0; //0 == yes
            for ($j=2; $j<$i; $j++){
                if ($i % $j ==0){
                    $isPrime = 1; // no break
                    break;
                }
            }
            if ($isPrime == 0){
                echo "$i ";
            }
        }
    }
    ?>


</body>
</html>