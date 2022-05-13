<!-- BMI計算過程 -->
<?php

$height=$_GET['height'];
$weight=$_GET['weight'];
/*
    echo "身高為:".$height;
    echo "<br>";
    echo "體重為:".$weight;
*/



/* 
    BMI = 身高/體重的平方 
    因為BMI會呈現到小數點後六位,用round()取小數點後一位 
*/ 
$bmi=round($weight/(($height/100)*($height/100)),1);
/*
    echo "<br>";
    echo "BMI值為:".$bmi;
*/



/* 把計算後的結果傳送到result.php */ 
header("location:result051302.php?bmi=$bmi");
//雙引號裡可以帶﹝變數﹞
//單引號只會變字串

?>