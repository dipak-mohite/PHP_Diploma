<?php
$a=array('Shivam','Rahul','Vilas');
$s=serialize($a);
print_r($s);
$s1=unserialize($s);
echo "<br>";
print_r($s1);
?>