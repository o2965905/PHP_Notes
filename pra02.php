<h2>字串分割</h2>
<br>
<h4>題目 : 將”this,is,a,book”依”,”切割後成為陣列</h4>

<?php 

$string="this,is,a,book";

//使用explode
$array=explode(",",$string);

//讀取出來的Array陣列 , 輸入 echo "<pre>";
echo "<pre>";
print_r($array);
echo "<pre>";

?>
