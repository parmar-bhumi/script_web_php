<?php
$a=array("a"=>"red","b"=>"green","c"=>"blue");
$b=array("a"=>"red","b"=>"green");
array_shift($a);
array_unshift($b,"blue");
print_r($a);
echo "<br>";
print_r ($b);
?>


