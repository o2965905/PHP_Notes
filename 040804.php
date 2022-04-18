<style>
    table{
        color:teal;
        border: 1px solid darkorange;
        border-collapse: collapse;

    }
    td{
        border:1px solid burlywood;
        padding: 5px 10px;
    }
</style>


<h2>九九乘法:基礎</h2>
<h3>練習1</h3>
<?php
echo "<table>";
for($i=1;$i<=9;$i++){
    if($i%2==0){
    /*加 \n ,看原始碼就會分段*/
    echo "<tr
    style='background:lightblue'>\n";
    }else{
        echo "<tr>\n";
    }
    for($j=1;$j<=9;$j++){
        echo "<td>";
        echo "{$i}x{$j}=";
        echo $i*$j;
        echo "</td>";
    }
echo "</tr>";
}
echo "</table>";
?>

<h3>練習2</h3>
<?php
echo "<table>";
for($i=1;$i<=9;$i++){
    echo "<tr>";
for($j=1;$j<=$i;$j++){
        echo "<td>";
        echo "{$j}x{$i}=";
        echo $i*$j;
        echo "</td>";
}
echo "</tr>";
}
echo "</table>";

?>