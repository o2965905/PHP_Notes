<h1>陣列</h1>

<h3>空陣列表示法:</h3>
<?php
$a=[];  //也有$a=array(); 寫法。

echo var_dump($a);
echo "<br>";
print_r($a);
echo "<br>";
?>
<h3>陣列宣告:</h3>
<?php
echo "例如:"."<br>";
$a[1]="A";
$a[5]="B";
$a["小明"]=59;
echo var_dump($a); //顯示較完整資訊
echo "<br>";
print_r($a); //顯示$資訊
echo "hr";
echo "<h3>取用方式</h3>";
echo 'a[5]=>'.$a[5];
echo "<br>";
echo '$a["小明"]=>'.$a["小明"];
?>
<?php
$a=[];
$a[]="紅茶";
$a[]="綠茶";
$a[]="奶茶";
echo "<h3>取用方式</h3>";
echo '$a[0]=>'.$a[0];
echo "<br>";
echo '$a[1]=>'.$a[1];
?>
