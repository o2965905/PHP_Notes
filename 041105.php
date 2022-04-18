<h3>題目:閏年</h3>
<?php
//leapyear=閏年英文
$leapYear=[];
$start=2022;
$end=$start+500;

for($year=$start;$year<=$end;$year++){
    if((($year%4==0) && ($year%100!=0))||($year%400==0)){
    $leapYear[]=$year;
    }
}
$leap=2400;
if(in_array($leap,$leapYear)){
    echo $leap.'年是閏年';
}else{
    echo $leap.'年 不是閏年';
}
?>