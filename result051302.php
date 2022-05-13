<!--BMI計算結果-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            font-size: 3rem;
            text-align: center;
            font-family: '標楷體';
        }
    </style>
</head>
<body>

<h1>

<?php

$bmi=$_GET['bmi'];

echo "你的BMI為:".$bmi;
?>

<?php
if($bmi>=27){
    echo "肥胖";
}else if($bmi>=24 && $bmi<27){
    echo "過重";
}else if($bmi>=18.5 && $bmi<24){
    echo "正常";
}else if($bmi<18.5){
    echo "過輕";
}
?>

<div>
<a href="051302.html">
    <button>返回BMI計算機</button>
</a>
</div>

</h1>
    
</body>
</html>