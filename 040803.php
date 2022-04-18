<h2>插入表格</h2>
<!--使用css語法-->
<!--table,td{} 兩個顏色一起變-->
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
    /*td的偶數列變色*/
    td:nth-child(2n){
        background-color: paleturquoise;
    }
    /*tr的偶數列變色*/
    tr:nth-child(2n){
        background-color: wheat;
    }
</style>


<h3>九九乘法表</h3>
<h4>練習1</h4>
<?php
echo "<table>";
for($i=1;$i<=9;$i++){
    echo "<tr>";
    for($j=1;$j<=9;$j++){
        echo "<td>{$i}x{$j}=";
        echo $i*$j;
        echo "</td>";
    }
echo "</tr>";
}
echo "</table>";
?>