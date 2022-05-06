<h2>日期與時間練習</h2>
<h3>(兩者呈現出的時間秒數不同)</h3>
<br>
<!--date 函式運用-->
<h3>未設定時區</h3>
<?php

//未設定會呈現格林威治時間秒數
echo date("Y-m-d H:i:s")

?>
<br>
<h3>有設定時區</h3>
<?php

//設定成亞洲/台北時區
date_default_timezone_set("Asia/Taipei");

echo date("Y-m-D H:i:s");
echo "<br>";
echo date("Y-m-d H:i:s");
echo "<br>";
echo date("Y年m月d日 H點:i分:s秒")
?>