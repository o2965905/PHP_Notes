<h2>利用date()函式的格式化參數，完成以下的日期格式呈現</h2>
<!-- php+echo 縮寫方法-->

<h3>題目:2022/04/25</h3>
<?php date_default_timezone_set("Asia/Taipei");?>
<?=date("Y/m/d");?>

<h3>題目:04月25日 Monday</h3>
<?=date("m月j日 l");?>

<h3>題目:2022-04-25 12:9:5(沒有顯示0的分跟秒)</h3>
<?=date("Y-n-j G:").(int)date("i").":".(int)date("s");?>

<h3>題目:2022-04-25 12:09:05(有顯示0的分跟秒)</h3>
<?=date("Y-m-j").date("H:i:s");?>

<h3>題目:今天是西元2022年04月25日 上班日(或假日)</h3>
<?php

$workday="";
$w=date("w");

if($w==0 || $w==6){
    $workday="休假日";
}else{
    $workday="上班日";
}
echo date("今天是西元Y年n月j日").$workday;

?>