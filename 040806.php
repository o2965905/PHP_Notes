<h2>星星排列法</h2>
<h3>方法1:</h3>
<?php
echo "*"."<br>";
echo "**"."<br>";
echo "***"."<br>";
echo "****"."<br>";
?>
<h3>方法2:</h3>
<?php
    for($i=0;$i<5;$i++){

        for($j=0;$j<=$i;$j++){
            echo "*";
        }
        echo "<br>";
    }
?>
<br>
<h3>練習:倒直角三角形</h3>
<?php
    for($i=0;$i<5;$i++){

        for($j=5;$j>$i;$j--){
            echo "*";

        }
        echo "<br>";
    }
?>
<h3>練習:正三角形</h3>
<?php
    /*先跑外圈*/
    for($i=0;$i<5;$i++){
        /*再跑一個空白的倒三角形*/
        for($a=4;$a>$i;$a--){
            echo "&nbsp;";

        }
        /*最後再跑星星*/
        for($j=0;$j<($i*2+1);$j++){
                
            echo "*";
            
        }
    echo "<br>";
    }

?>
<h3>練習:倒正三角形</h3>
<?php
for($i=0;$i<6;$i++){

    for($a=0;$a<=$i;$a++){
        echo "&nbsp";
    }
    for($j=9;$j>($i*2);$j--){
        echo "*";
    }
echo "<br>";
}

?>

<h3>練習:菱形</h3>
<!--用倒三角形+正三角形-->
<?php
for($i=0;$i<6;$i++){

    for($a=5;$a>$i;$a--){
        echo "&nbsp";
    }
    for($j=0;$j<($i*2+1);$j++){
        echo "*";
    }
echo "<br>";
}
?>
<?php
for($i=0;$i<6;$i++){

    for($a=0;$a<=$i;$a++){
        echo "&nbsp";
    }
    for($j=9;$j>($i*2);$j--){
        echo "*";
    }
echo "<br>";
}

?>
