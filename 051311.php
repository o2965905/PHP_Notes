<!-- 會員登入 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body{
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 50px;
        }
       
        .section{
            background-color: rgb(248, 249, 249);
            box-shadow: 0px 5px 8px rgba(0,0,0,0.4);
            border-radius: 8px;
        }
        form{
            margin: 5px;
            padding: 15px;
            background-color:lightyellow;
        }
        .box{
            margin: 15px auto;
            color: rgb(29, 98, 167);
        }
    </style>
</head>
<body>
    <h1>會員登入</h1>

    <?php
    if(!empty($_GET['error'])){
        echo "<h3 style='color:red'>{$_GET['error']}</h3>";
    }
    ?>
    <div class="section">
        <form action="chklogin051311.php" method="post">
            <table>
                <tr class="box">
                    <td>帳號:</td>
                    <td><input type="text" name="acc"></td>
                </tr>
                <tr class="box">
                    <td>密碼:</td>
                    <td><input type="text" name="pw"></td>
            </tr>
        </table>
        <div>
            <input type="submit" value="登入">
            <input type="reset" value="重置">
        </div>
    </form>
    </div>
</body>
</html>