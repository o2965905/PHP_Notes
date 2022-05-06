
<h3>尋找字串與HTML、css整合應用</h3>
<h5>題目:給定一個句子，將指定的關鍵字放大</h5>
<h5>方法2:</h5>
<?php 
    
    $str="學會PHP網頁程式設計，薪水會加倍，工作會好找";
    echo $str;
    echo "<br>";
    $search="程式設計";
    $pos=mb_strpos($str,$search);
    $head=mb_substr($str,0,$pos);
    $tail=mb_substr($str,$pos+4);
    $str=$head
        ."<span style='font-size:2rem;color:red'>"
        .$search
        ."</span>"


        //."，薪水會加倍，工作會好找";
        .$tail;

    echo $str;

    ?>