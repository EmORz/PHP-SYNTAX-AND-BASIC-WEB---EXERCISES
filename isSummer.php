<?php
$month = intval(date("m")); ?>
<?php if ($month >=6 && $month<=8){
   echo date("F")." is summer time!";
}
else{
    echo "$month Sorry, not summer.";
}
