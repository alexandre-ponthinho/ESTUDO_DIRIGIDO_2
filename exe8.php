<?php
print "Digite o primeiro preço: ";
$preco1 = fgets (STDIN);
print "Digite o segundo preço: ";
$preco2 = fgets (STDIN);
print "Digite o terceiro preço: ";
$preco3 = fgets (STDIN);
if ($preco1 < $preco2 and $preco1 < $preco3) {
    print "Você deveria comprar o primeiro produto \n";
}elseif ($preco2 < $preco3 and $preco2 < $preco1) {
    print "Você deveria comprar o segundo produto \n";
}elseif ($preco3 < $preco2 and $preco3 < $preco1) {
    print "Você deveria comprar o terceiro produto \n";
}elseif ($preco1 == $preco2 and $preco1 < $preco3 ) {
    print "Você deveria comprar o primeiro ou segundo produto \n";
}elseif ($preco3 == $preco2 and $preco3 < $preco1 ) {
    print "Você deveria comprar o segundo ou terceiro produto \n";
}elseif ($preco1 == $preco3 and $preco1 < $preco2) {
    print "Você deveria comprar o primeiro ou terceiro produto \n";
}elseif ($preco1 == $preco2 and $preco1 == $preco3) {
    print "Os três produtos tem o mesmo preço, a escolha é dada pelo usuário \n";
}