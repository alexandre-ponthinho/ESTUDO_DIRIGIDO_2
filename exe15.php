<?php
print "ATENÇÃO: NÃO REPITA NÚMEROS \n\n";
print "Digite o primeiro número: ";
$prime = fgets(STDIN);
print "Digite o segundo número: ";
$seg = fgets(STDIN);
print "Digite o terceiro número: ";
$terc = fgets(STDIN);
print "Digite o quarto número: ";	
$quarto = fgets(STDIN);
print "Digite o quinto número: ";
$quinto = fgets(STDIN);
if ($prime == $seg or $prime == $terc or $prime == $quarto or $prime == $quinto or $seg == $terc or $seg == $quarto or $seg == $quinto or $terc == $quarto or $terc == $quinto or $quarto == $quinto) {
    print "Eu disse para não repetir números. \n";
    exit;
}
if ($prime > $seg and $prime > $terc and $prime > $quarto and $prime > $quinto) {
    print "O primeiro número é o maior. \n";
}elseif ($seg > $prime and $seg > $terc and $seg > $quarto and $seg > $quinto) {
    print "O segundo número é o maior. \n";
}elseif ($terc > $prime and $terc > $seg and $terc > $quarto and $terc > $quinto) {
    print "O terceiro número é o maior. \n";
}elseif ($quarto > $prime and $quarto > $seg and $quarto > $terc and $quarto > $quinto) {
    print "O quarto número é o maior. \n";
}elseif ($quinto > $prime and $quinto > $seg and $quinto > $terc and $quinto > $quarto) {
    print "O quinto número é o maior. \n";
}