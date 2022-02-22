<?php
#If文で偶数奇数を調べる
$Num1 = 10;

if($Num1 % 2 == 0)
{
    echo $Num1 . 'は偶数です' . PHP_EOL;
}else{
    echo $Num1 . 'は奇数です' . PHP_EOL;
}

?>