<?php
$cookie_name="user";
$cookie_value="Yahoo Baba ";


setcookie($cookie_name,$cookie_value,time()+(86400),"/");


?>
<html>
    <body>
    <?php
    if(!isset($_COOKIE[$cookie_name])){
        echo"cookie not set";
    }else{
    echo $_COOKIE[$cookie_name];
    }
    ?>
</body>
</html>