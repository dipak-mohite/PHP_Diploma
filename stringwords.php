<?php
$wordcount=0;
$str = "Hello My Name is Dipak";
$length = strlen($str);
for($i=0; $i<$length; $i++){   
    if ($str[$i]==' ')
    {
        $wordcount=$wordcount+1;
    }
}
$wordcount=$wordcount+1;
echo $str."<br> words in given string = ".$wordcount;
?>