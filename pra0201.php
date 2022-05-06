<h2>字串分割</h2>
<br>
<h4>題目 : 將”this,is,a,book”依”,”切割後成為陣列</h4>

<?php 

$string="this,is,a,book";

//使用explode
$array=explode(",",$string);

echo "<pre>";
print_r($array);
echo "<pre>";

?>
<br>
<h3>題目 : 將上例陣列重新組合成“this is a book”</h3>

<?php 

$string="this,is,a,book";

//使用explode
$array=explode(",",$string);

echo "<pre>";
print_r($array);
echo "<pre>";

$newstr=implode(" ",$array);
echo $newstr;

?>
