<?Php
print "Digite o primeiro número: ";
$n1 = fgets(STDIN);
print "Digite o segundo número: ";
$n2 = fgets(STDIN);
if ($n1 > $n2) {
    print "O primeiro número é maior: $n1 \n";
}elseif ($n1 == $n2){
    print "Os dois números são iguais \n";
}else{
    print "número é maior: $n2 \n";
}