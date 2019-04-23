<?php
print "Digite um valor numérico: ";
$valor = fgets(STDIN);
if ($valor > 0) {
    print "O Valor é positivo. \n";
}elseif ($valor == 0){
    print "O Valor é nulo. \n";
}else{
    print "O valor é negativo. \n";
}