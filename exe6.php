<?php
print "Digite o primeiro número: ";
$prime = (float)fgets(STDIN);
print "Digite o segundo número: ";
$seg = (float)fgets(STDIN);
print "Digite o terceiro número: ";
$terc = (float)fgets(STDIN);
if ($prime > $seg and $prime > $terc) {
    print "O primeiro número é o maior\n";
}
elseif ($seg > $prime and $seg > $terc) {
    print "O segundo númeor é o maior\n";
}
elseif ($terc > $prime and $terc > $seg) {
    print "O terceiro número é o maior\n";
}
elseif ($prime == $seg and $prime == $terc) {
    print "Todos os números são iguais \n";
}