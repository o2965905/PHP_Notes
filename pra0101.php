<h2>字串轉成時間</h2>
<!--string to time 字串轉成時間-->
<h3>strtotime():基本功能</h3>
<?php

//日期字串格式 yyyy-mm-dd
//時間字串格式 hh:mm:ss
$time="2021-10-10 10:10:10";
$s=strtotime($time);

echo $time;
echo "<br>";
echo $s;
echo "<br>";
// l=星期幾
echo date("西元Y年m月d日l",$s)

?>
<br>
<h3>strtotime():增加/減少天數功能</h3>
<?php

$time="2021-10-10 10:10:10";
$s=strtotime($time);

echo $time;
echo "<br>";
echo $s;
echo "<br>";
echo date("西元Y年m月d日l",$s);
echo "<br>";

//"+2 days" 加兩天
$splus=strtotime("+2 days",$s);
echo "<br>";
echo date("西元Y年m月d日l",$splus);
//"+1 month" 加一個月
$splus=strtotime("+1 month",$s);
echo "<br>";
echo date("西元Y年m月d日l",$splus);
//"-1 month" 減一個月
$splus=strtotime("-1 month",$s);
echo "<br>";
echo date("西元Y年m月d日l",$splus);
?>
