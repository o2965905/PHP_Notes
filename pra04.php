
    <h3>尋找字串與HTML、css整合應用</h3>
    <h5>題目:給定一個句子，將指定的關鍵字放大</h5>
    
    <h5>方法1:</h5>
    <?php 
    
    $str="學會PHP網頁程式設計，薪水會加倍，工作會好找";
    echo $str;
    echo "<br>";
    $pos=mb_strpos($str,"程式設計");
    $str=mb_substr($str,0,$pos)."<span style='font-size:2rem;color:red'>"."程式設計";
    echo $str;


    //手動輸入↓
    //echo "學會PHP網頁<span style='font-size:2rem;color:red'>程式設計</span>，薪水會加倍，工作會好找"
    ?>
