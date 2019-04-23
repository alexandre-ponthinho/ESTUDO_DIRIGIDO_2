<?php
print "Digite uma letra: ";
$Letra = fgetc(STDIN);
if ($Letra == "a" or $Letra == "e" or $Letra == "i" or $Letra == "o"  or $Letra == "u" or $Letra == "A" or $Letra == "E" or $Letra == "I" or $Letra == "O" or $Letra == "U") {
    print "$Letra é uma vogal \n";
}else{
    print "$Letra é uma consoante \n";
}