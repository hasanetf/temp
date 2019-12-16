
<?php

$dir    = '/mnt/sda1/test/test2/test3';

// positive limit
print_r(explode('/', $dir));

// negative limit (since PHP 5.1)
print_r(explode('/', $dir, -1));
?>
