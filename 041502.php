<h2>陣列反轉</h2>
<pre>例：$a=[2,4,6,1,8]    反轉後    $a=[8,1,6,4,2]</pre>

<?php
/*  對應字串的位置 */
/* $a=[2,4,6,1,8] */
/*  a=[0,1,2,3,4] */
$a=[2,4,6,1,8];


/* 起始值 $i=0 ; $i<取最大值(5/2) ; $i++ */
for($i=0;$i<ceil(count($a)/2);$i++){
    
    /* $t=$a[$i] ; */ 
    /* $t=$a[0]  */
    /* $t=$a[1]  */
    /* $t=$a[2]  */
    /* $t=$a[3]  */
    /* $t=$a[4]  */
    $t=$a[$i];

    /* a[0]=a[5-1-0] */
    /* a[1]=a[5-1-1] */
    /* a[2]=a[5-1-2] */
    /* a[3]=a[5-1-3] */
    /* a[4]=a[5-1-4] */
    $a[$i]=$a[count($a)-1-$i];


    $a[count($a)-1-$i]=$t;
    echo "$i => [{$a[0]},{$a[1]},{$a[2]},{$a[3]},{$a[4]}] <br>";
}

print_r(array_reverse($a));
?>
