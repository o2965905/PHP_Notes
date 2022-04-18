<h1>畫星星</h1>
<h2>菱形</h2>
<?php
//總列數
$size=9;
for($i=0;$i<$size;$i++){
    //($size-1)/2=反向開始的判斷
    if($i<=(($size-1)/2)){
        //印空白
        for($k=0;$k<(($size-1)/2-$i);$k++){
            echo "&nbsp;";
        }
        //印星星
        for($j=0;$j<($i*2+1);$j++){
            echo "*";
        }
    }else{
        //印空白
        for($k=0;$k<($i-($size-1)/2);$k++){
            echo "&nbsp;";
        }
        //印星星
        for($j=0;$j<(($size-1-$i)*2+1);$j++){
            echo "*";
        }
    }
    echo "<br>";
}
?>
<h2>菱形(縮短版)</h2>
<?php
//總列數
$size=9;
for($i=0;$i<$size;$i++){
    //($size-1)/2=反向開始的判斷
    if($i<=(($size-1)/2)){
        $space=($size-1)/2-$i;
        $stars=$i*2+1;
    }else{
        $space=$i-($size-1)/2;
        $stars=($size-$i)*2-1;

        /*省略這段
        for($k=0;$k<(($size-1)/2-$i);$k++){
            echo "&nbsp;";
        }
        //印星星
        for($j=0;$j<($i*2+1);$j++){
            echo "*";
        }*/

        }
        //印空白
        for($k=0;$k<$space;$k++){
            echo "&nbsp;";
        }
        //印星星
        for($j=0;$j<$stars;$j++){
            echo "*";
    }
    echo "<br>";
}
?>
<h2>矩形</h2>
<?php
for($i=1;$i<=7;$i++){
    for($j=1;$j<=7;$j++){
        echo "*";
    }
echo "<br>";
}
?>
<h2>矩形(中間挖空)</h2>
<?php
for($i=1;$i<=7;$i++){
    if($i==1||$i==7)
    for($j=1;$j<=7;$j++){
        echo "*";
    }else{
        for($j=1;$j<=7;$j++){
            if($j==1||$j==7){
                echo "*";
            }else{
                echo "&nbsp";
            }
        }
    }
echo "<br>";
}
?>
<h2>矩形(中間挖空)縮減版</h2>
<?php
for($i=1;$i<=7;$i++){
    for($j=1;$j<=7;$j++){
        //在$j,如果($i==1||$i==7),要印星星
        if($i==1||$i==7){
        echo "*";
    }else{
        //印空白裡面,如果($j==1||$j==7),要印星星
        if($j==1||$j==7){
                echo "*";
            }else{
                //相反就印空白
                echo "&nbsp";
            }
        }
    }
echo "<br>";
}
?>
<h2>矩形(中間挖空)縮減版2.0</h2>
<?php
for($i=1;$i<=7;$i++){
    for($j=1;$j<=7;$j++){
        if($i==1||$i==7||$j==1||$j==7){
        echo "*";
    }else{
            echo "&nbsp";
        }
    }
echo "<br>";
}
?>
<h2>矩形(中間交叉)縮減版2.0</h2>
<?php
//總列數
$size=7;
for($i=1;$i<=$size;$i++){
    for($j=1;$j<=$size;$j++){
        if($i==1||$i==$size||$j==1||$j==$size||$i==$j||$j==$size-$i){
        echo "*";
    }else{
            echo "&nbsp";
        }
    }
echo "<br>";
}
?>