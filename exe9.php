<?php
print "Digite o primeiro número (não repita números): ";
$prime = fgets(STDIN);
print "Digite o segundo número (não repita números): ";
$seg = fgets(STDIN);
print "Digite o terceiro número (não repita números): ";
$terc = fgets(STDIN);
if ($prime > $seg and $seg > $terc) {
    print "$prime \n" . "$seg \n" . "$terc \n";
}elseif ($prime > $terc and $terc > $seg) {
    print "$prime \n" . "$terc \n" . "$seg \n";
}elseif ($seg > $prime and $prime > $terc) {
    print "$seg \n" . "$prime \n" . "$terc \n";
}elseif ($seg > $terc and $terc > $prime) {
    print "$seg \n" . "$terc \n" . "$prime \n";
}elseif ($terc > $prime and $prime > $seg) {
    print "$terc \n" . "$prime \n" . "$seg \n";
}elseif ($terc > $seg and $seg > $prime) {
    print "$terc \n" . "$seg \n" . "$prime \n";
}