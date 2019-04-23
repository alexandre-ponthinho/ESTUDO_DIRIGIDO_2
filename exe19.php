<?php
    $Fibo1 = 0;
    $Fibo2 = 1;
while ($Fibo1 < 500 or $Fibo2 < 500) {
    print "$Fibo1 ";
    print "$Fibo2 ";
        $Fibo1 = $Fibo1+$Fibo2;
        $Fibo2 = $Fibo2+$Fibo1;
}