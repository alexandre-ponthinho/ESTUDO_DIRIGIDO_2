<?php
print "Insira o seu sexo [F/M]: ";
$sex = fgetc(STDIN);
if ($sex == "F" or $sex == "f") {
	print "Sexo feminino";
}
elseif ($sex == "M" or $sex == "m") {
	print "Sexo masculino";
}
else {
	print "Sexo inválido";
}