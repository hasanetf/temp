
<?php

$dir    = '/mnt/sda1/test/test2/test3';

// positive limit
print_r(explode('/', $dir));

print_r(explode('/mnt/sda1/', $dir, -1));


?>
