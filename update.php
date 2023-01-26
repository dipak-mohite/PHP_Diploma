<?php
$cookie_name = "user";
$cookie_value = "Computer Engg";
setcookie($cookie_name, $cookie_value, time() + 3600);
?>
<html>
<body>
<?php
echo " Cookie named:" . $cookie_name . " is updated";
?>
</body>
</html>