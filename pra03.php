<h2>字串練習</h2>
<h4>題目 : 將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”</h4>
<br>
<h5>方法1 使用mb_substr</h5>
<?php 

//使用 mb_substr(string $str,int $start , int $length , string $encoding)
//int $start = 初始的字串位置 ; int $length = 取得的字串結束位置 
//語法 : mb_substr(判斷的字串,初始的位置,結束的位置)
$str="The reason why a great man is great is that he resolves to be a great man";
echo mb_substr($str,0,10,)."...";

?>
<br>
<h5>方法2 使用substr</h5>
<?php 
$str="The reason why a great man is great is that he resolves to be a great man";
$newStr=substr($str,0,10);

echo $newStr."...";
//echo $newStr.str_repeat(".",3);


?>

<h5>番外題目 : 中文取字</h5>
<?php 

$str="有志者事竟成";
echo $str;
echo "<br>";

//一個中文字=3個字元(字符)
$newStr=substr($str,0,18);

echo $newStr;

?>