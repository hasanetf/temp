
<?php

$dir    = '/mnt/sda1/test';

// positive limit
print_r(explode('/', $dir, 2));

// negative limit (since PHP 5.1)
print_r(explode('/', $dir, -2));
?>
