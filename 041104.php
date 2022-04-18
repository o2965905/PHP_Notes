<h1>隨機選號</h1>
<h1>範例:威力彩</h1>
<h3>電腦隨機選號</h3>
<?php 

//random=隨機的
//rand(最小整數,最大整數)
echo rand(0,100); 

?>
<br>
<h3>範例1:威力彩選號</h3>
<h4>(有機率出現重複號碼)</h4>
<?php
$numbers = range(1,38);

echo "<h3>第一區</h3>";
echo rand(1,38).',';
echo rand(1,38).',';
echo rand(1,38).',';
echo rand(1,38).',';
echo rand(1,38).',';
echo rand(1,38).',';
echo "<h3>第二區</h3>";
echo rand(1,38);
?>
<br>
<h3>範例2:威力彩選號</h3>
<h4>沒有重覆號碼(利用while迴圈)</h4>
<?php
echo "<h3>第二區</h3>";
//設定樂透=變數$loto
$lotto=[];
//樂透每一區六個號碼
//當選滿六個號碼,就跳出迴圈
while(count($lotto)<6){
    $num=rand(1,38);
    if(!in_array($num,$lotto)){
        $lotto[]=$num;
    }
}
echo "開出順序:";
for($i=0;$i<count($lotto);$i++){
    echo $lotto[$i].",";
}
/*如果要大小排序
    echo"<br>大小順序";
    sort($lotto);
    for($i=0;$i<count($lotto);$i++){
        echo $lotto[$i].",";
}*/

echo "<h3>第二區</h3>";
echo rand(1,8);
?>
