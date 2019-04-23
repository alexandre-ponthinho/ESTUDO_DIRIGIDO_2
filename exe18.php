<?php
$par = 0;
$impar = 0;
print "Digite um número: ";
$n1 = (float)fgets(STDIN);
print "Digite um número novamente: ";
$n2 = (float)fgets(STDIN);
print "Digite um número novamente: ";
$n3 = (float)fgets(STDIN);
print "Digite um número novamente: ";
$n4 = (float)fgets(STDIN);
print "Digite um número novamente: ";
$n5 = (float)fgets(STDIN);
print "Digite um número novamente: ";
$n6 = (float)fgets(STDIN);
print "Digite um número novamente: ";
$n7 = (float)fgets(STDIN);
print "Digite um número novamente: ";
$n8 = (float)fgets(STDIN);
print "Digite um número novamente: ";
$n9 = (float)fgets(STDIN);
print "Digite um número novamente: ";
$n10 = (float)fgets(STDIN);
if ($n1%2==0) {
    $par++;
}
if($n1%2==1) {
    
    $impar++;
}
if ($n2%2==0) {
    $par++;
}
if($n2%2==1) {
    $impar++;
}
if ($n3%2==0) {
    $par++;
}
if($n3%2==1) {
    $impar++;
}
if ($n4%2==0) {
    $par++;
}
if($n4%2==1) {
    $impar++;
}
if ($n5%2==0) {
    $par++;
}
if($n5%2==1) {
    $impar++;
}
if ($n6%2==0) {
    $par++;
}
if($n6%2==1) {
    $impar++;
}
if ($n7%2==0) {
    $par++;
}
if($n7%2==1) {
    $impar++;
}
if ($n8%2==0) {
    $par++;
}
if($n8%2==1) {
    $impar++;
}
if ($n9%2==0) {
    $par++;
}
if($n9%2==1) {
    $impar++;
}
if ($n10%2==0) {
    $par++;
}
if($n10%2==1) {
    $impar++;
}
print "Há $par número(s) par(es) \n";
print "Há $impar número(s) impar(es) \n";