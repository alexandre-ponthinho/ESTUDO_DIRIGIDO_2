<?php
print "Digite a primeira nota: ";
$n1 = (float)fgets(STDIN);
print "Digite a segunda nota: ";
$n2 = (float)fgets(STDIN);
    $Media = ($n1 + $n2)/2;
if ($Media == 10){
    print "Aprovado com Distinção \n";
}elseif ($Media >= 7){
    print "Aprovado \n";
}else{
    print "Reprovado \n";
}