<?php
for ($o = 0; $o < 8; $o++) {
    for ($u = 8; $u > $o; $u--){
        print "* ";
    }
    print "\n";
}
print "\n";
for ($a = 0; $a < 8; $a++) { 
    print "* * * * * * * * \n";
}
print "\n";
for ($e = 0; $e < 8; $e++) {
    for ($i = -1; $i < $e; $i++) {
       print "* ";
    }
    print "\n";
}
//////////////////////////////////////////////////
print "\n";
for ($e = 0; $e < 8; $e++) {
	
	for ($k=1; $k < 8 - $e; $k++) { 
		print("  ");
	}
    for ($i = -1; $i < $e; $i++) {
       print "* ";
    }
    print "\n";
}