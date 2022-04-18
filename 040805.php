<h2>以交叉計算結果呈現的九九乘法表</h2>

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
    .header{
        background-color: lightblue;
    }
</style>

<h3>練習1</h3>
<?php
echo "<table>";
for($i=0;$i<10;$i++){
    echo "<tr>";
    for($j=0;$j<10;$j++){
        if($i==0){
            /*class='header'取代style='background'*/
            echo "<td class='header'>$j</td>";
        }else if($j==0){
            echo "<td class='header'>$i</td>";
        }else{
            echo "<td>";
            echo $i*$j;
            echo "</td>";
        }
    }
echo "</tr>";
}
echo "</table>";
?>