<?php
//$num=0;
$n1=0;
$n2=1;
echo"Fibonacci series for 10 first number :";
for($num=0;$num<10;$num=$num+1){
    $n3=$n2+$n1;
    echo$n3.' ';
    $n1 = $n2;
    $n2=$n3;

}

?>