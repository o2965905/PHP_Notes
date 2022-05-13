<!--根據登入成功與否來決定使用者要導入到哪個頁面-->
<?php

$default_user='riley';
$default_pw='55555';

$acc=$_POST['acc'];
$pw=$_POST['pw'];


$error='';
if($acc!=$default_user || $pw!=$default_pw){
    $error="帳號密碼錯誤,請回登入頁重新輸入";
    header("location:051311.php?error=$error");
}else{
    header("location:memcenter051311.php?user=$acc");
}


?>