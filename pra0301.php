<h5>番外題目 : 中文夾雜英文取字</h5>
<?php 

$str="有志123者事abc竟成";
echo $str;
echo "<br>";

//一個中文字=3個字元(字符)
//中文夾雜英文時,使用mb_substr()
$newStr=mb_substr($str,0,18);

echo $newStr;

?>