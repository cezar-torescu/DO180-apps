<?php
print "Hello, World! php version is " . PHP_VERSION . "\n";
print "A change is a coming!\n";

$data=array('RHEL', 'CENTOS', 'DEBIAN');
foreach ($data as $d) {
    print($d." is supported\n";
}
?>
