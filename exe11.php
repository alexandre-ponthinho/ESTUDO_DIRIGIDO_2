<?php
print "Digite um número inteiro menor que 1000: ";
$Numero = (int) fgets(STDIN);
if ($Numero >= 1000 or $Numero < 0) {
    print "Número inválido.";
    exit;
}
    $Numero_Reserva = $Numero;
    $Centena = 0;
    $Dezena = 0;
    $Unidade = 0;
while ($Numero_Reserva >= 100) {
    $Numero_Reserva = $Numero_Reserva - 100;
    $Centena++;
}
while ($Numero_Reserva >= 10) {
    $Numero_Reserva = $Numero_Reserva -10;
    $Dezena++;
}
while ($Numero_Reserva >= 1) {
    $Numero_Reserva = $Numero_Reserva -1;
    $Unidade++;
}
if ($Numero > 100) {
    print "$Numero ". '= ' ."$Centena centena(s), $Dezena dezena(s) e $Unidade unidade(s).";
}
elseif ($Numero > 10) {
    print "$Numero ". '= ' ."$Dezena dezena(s) e $Unidade unidade(s).";
}
elseif ($Numero > 1) {
    print "$Numero ". '= ' ."$Unidade unidade(s).";
}