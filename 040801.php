<h2>while/do...while</h2>

<h3> while </h3>
<h4>假設$i=1</h4>
<?php
/*先判斷條件是否成立,再執行*/
$i=1;
while($i<10){
    echo $i.'<br/>';
    $i=$i+1;
}
?>
<h4>假設$i=11</h4>
<?php
/*$i<10,所以不呈現*/
$i=11;
while($i<10){
    echo $i . '<br/>';
    $i=$i+1;
}
?>

<h3> do...while </h3>
<h4>假設$i=1</h4>
<?php
/*先執行一遍,再判斷條件*/ 
$i=1;
do{
    echo $i.'<br/>';
    $i=$i+1;
}while($i<10);
?>
<h4>假設$i=11</h4>
<?php
/*先呈現$i=11,再判斷是否$i<10*/
$i=11;
do{
    echo $i . '<br/>';
    $i=$i+1;
}while($i<10);
?>

<h2>用for迴圈產生以下數列</h2>
<h3>1,3,5,7....n</h3>
<?php
$n=10;
for($i=1;$i<$n;$i=$i+2){
    echo $i . '<br/>';
}
?>
<h3>10,20,30,40....n</h3>
<?php
$n=10;
for($i=1;$i<$n;$i++){
    echo $i*10 . '<br/>';
}
?>
<h3>100的質數=>3,5,7,11,13,17,19...n</h3>
<?php
/*sqrt=平方根,ceil=無條件進位*/
$n=100;
$sqrt=ceil(sqrt($n));
$test=true;
/*質數特性=只能被自己和1整除*/
/*$j開始值從3開始*/
for($j=3;$j<$n;$j++){
    $test=true;
    $sqrt=ceil(sqrt($j));
    
    /*1不是質數也不是和數,所以$i從2開始*/
    for($i=2;$i<=$sqrt;$i++){
        if($j%$i==0){
            $test=false;
            break;

        }
    }
    if($test==true){
        echo $j.'<br/>';
    }
}
/*三元運算式*/
//echo $n;
//echo($test==true)?'是質數':'不是質數';
?>