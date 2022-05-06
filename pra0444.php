<h2>線上月曆製作 方法1</h2>
<h4>以表格方式呈現整個月份的日期</h4>
<h4>可以在特殊日期中顯示資訊(假日或紀念日)</h4>
<h4>嘗試以block box或flex box的方式製作月曆</h4>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上月曆</title>
    <style>
        table{
            border-collapse: collapse;
            font-family: '標楷體';
        }
        table td{
            padding: 20px;
            text-align: center;
            border: 1px solid lightgrey;
        }
        .top{
            background-color: lightgoldenrodyellow;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
    //假設月份是變數,這樣就可以隨時更改月份
    $month=4;
    


    ?>
    <table>
        <tr>
            <td class="top">日</td>
            <td class="top">一</td>
            <td class="top">二</td>
            <td class="top">三</td>
            <td class="top">四</td>
            <td class="top">五</td>
            <td class="top">六</td>
        </tr>
        <?php 
        
        $firstDay=date("Y-").$month."-1";
        $firstWeekday=date("w",strtotime($firstDay));
        $monthDays=date("t",strtotime($firstDay));
        $lastDay=date("Y-").$month."-".$monthDays;
        
        echo $month."月份";
        echo "<br>";
        echo "第一天是".$firstDay;
        echo "<br>";
        echo "第一天是星期".$firstWeekday;
        echo "<br>";
        echo "最後一天是".$lastDay;
        echo "<br>";
        echo "當月天數共".$monthDays."天";
        echo "<br>";

        //決定橫列
        for($i=0;$i<6;$i++){
            echo "<tr>";

            //決定縱列
            for($j=0;$j<7;$j++){
                
                echo "<td>";
                if($i==0 && $j==$firstWeekday){
                    echo "1";
                }elseif($i==0 && $j<$firstWeekday){
                    echo "";
                }else{
                    echo ($i*7+($j+1))-5;
                }
                echo "</td>";
            }

            echo "</tr>";
        }

        ?>
    </table>
</body>
</html>