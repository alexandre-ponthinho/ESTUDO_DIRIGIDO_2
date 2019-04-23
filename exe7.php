<?php
print "Digite o primeiro número: ";
$prime = fgets(STDIN);
print "Digite o segundo número: ";
$seg = fgets(STDIN);
print "Digite o terceiro número: ";
$terc = fgets(STDIN);
if ($prime > $seg and $prime > $terc) {
    print "O primeiro número é o maior \n";
}elseif ($seg > $prime and $seg > $terc) {
    print "O segundo número é o maior \n";
}elseif ($terc > $prime and $terc > $seg) {
    print "O terceiro número é o maior \n";
}elseif ($prime == $seg and $prime == $terc) {
    print "Todos os números são iguais \n";
}
if ($prime < $seg and $prime < $terc) {
    print "O primeiro número é o menor \n";
}elseif ($seg < $prime and $seg < $terc) {
    print "O segundo número é o menor \n";
}elseif ($terc < $prime and $terc < $seg) {
    print "O terceiro número é o menor \n";
}
if ($prime == $seg and $prime != $terc) {
    print "O primeiro e o segundo números são iguais \n";
}elseif ($prime == $terc and $prime != $seg) {
    print "O primeiro e o terceiro números são iguais \n";
}elseif ($seg == $terc and $seg != $prime) {
    print "O segundo e o terceiro números são iguais \n";
}