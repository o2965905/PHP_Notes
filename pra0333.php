<h2>利用迴圈來計算連續五個周一的日期</h2>

<?php

$today=date("Y-m-d l");
echo $today;
echo "<br>下周一";
$todaytime=strtotime(date("Y-m-d"));
//$nextweek=strtotime("+1 week",$todaytime);

$n=5;
for($i=0;$i<=$n;$i++){
    //當$i=1 +1 week
    //當$i=2 +2 week
    //當$i=3 +3 week
    $nextweek=strtotime("+$i week",$todaytime);
    echo date("Y-m-d l",$nextweek)."<br>";
}

?>