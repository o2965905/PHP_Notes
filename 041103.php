<h1>04月11日-陣列練習</h1>

<h3>利用程式產生陣列</h3>
<?php
$name=['juby','amo','john','peter','hebe'];
$subject=['國文','英文','數學','地理','歷史'];
$score_a=[95,88,45,59,71];
$score_b=[64,78,60,32,62];
$score_c=[70,54,68,77,80];
$score_d=[90,81,70,54,62];
$score_e=[84,71,62,42,64];

echo '名字='.$name[0].'<br>'.'科目='.$subject[0].'<br>'.'分數='.$score_a[0].'<br>';
?>
<h3>利用程式產生陣列-九九乘法表</h3>

<h4>方法1:</h4>
<?php
$nine=[];
for($i=1;$i<=9;$i++){
   
    for($j=1;$j<=9;$j++){
       
        $nine[]="$i x $j =".($i*$j);
    }
}

for($i=0;$i<count($nine);$i++){
    if($i%9==0){
        echo "<br>";
    }
    echo $nine[$i]."&nbsp;&nbsp;";
}
?>
<br>
<h4>方法2:</h4>
<?php
$nine=[];
for($i=1;$i<=9;$i++){
   
    for($j=1;$j<=9;$j++){
       
        $nine[]="$i x $j =".($i*$j);
    }
}

for($i=0;$i<count($nine);$i++){
    echo $nine[$i]."&nbsp;&nbsp;";
    if($i%9==8){
        echo "<br>";
    }
}
?>
<br>
<h4>方法3:</h4>
<?php
$nine=[];
for($i=1;$i<=9;$i++){
   
    for($j=1;$j<=9;$j++){
       
        $nine["{$i}x{$j}"]=$i*$j;
    }
}
$i=8;
$j=7;
echo "$i x $j =";
echo $nine["{$i}x{$j}"];
?>
