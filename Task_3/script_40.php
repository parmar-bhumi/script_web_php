<?php
$fruits=array("Apple","Guavava","Orange","Mango");
$fruit=array("Cherry","Kiwi");
array_splice($fruits,0,2,$fruit);
print_r($fruits);
?>