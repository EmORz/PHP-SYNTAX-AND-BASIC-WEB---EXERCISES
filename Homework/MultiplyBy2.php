<?php
    if (isset($_GET['num'])){
        $number = intval($_GET['num'])*2;
        echo "$number";
    }
?>
<form>
    N: <input type="text" name="num"/>
       <input type="submit" name="submit">
</form>
