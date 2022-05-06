<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04月22 - 字串處理練習</title>
</head>
<body>
    <h1>字串取代</h1>
<article>
    <h3>字串取代</h3>
    <div>
        將"aaddw1123"改成"*********"
    </div>
</article>

    <?php 
    $password="aaddw1123";
    //方法1 : str_replace()
    //缺點 : 一個字元對應一個"*"
    $password=str_replace("aa","**",$password);
    
    echo $password;
    ?>
    <br>

    <?php 
    $password="aaddw1123";
    $password=str_replace("a","*",$password);
    //方法2 : str_repeat 
    //缺點 : 不確定幾個字元要重複變成"*"
    $password=str_repeat("*",9);

    echo $password;
    
    ?>

    <br>

    <?php 
    
    $password="aaddw1123";
    //方法3 : mb_strlen
    //優點 : 無論多少字元都可以變成"*"
    $strlen=mb_strlen($password);
    $password=str_repeat("*",$strlen);
    
    echo $password;
    ?>
</body>
</html>