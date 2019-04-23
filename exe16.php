<?php
print "Digite o primeiro número: ";
$primeiro = fgets(STDIN);
print "Digite o segundo número: ";
$segundo = fgets(STDIN);
print "Digite o terceiro número: ";
$terceiro = fgets(STDIN);
print "Digite o quarto número: ";
$quarto = fgets(STDIN);
print "Digite o quinto número: ";
$quinto = fgets(STDIN);
 $Soma = $primeiro + $segundo + $terceiro + $quarto + $quinto;
 $Media = $Soma/5;
print "A soma dos números é: $Soma \n";
print "A média dos números é: $Media \n";