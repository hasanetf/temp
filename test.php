
<?php

$dir    = '/mnt/sda1/test/test2/test3';

// positive limit
print_r(explode('/', $dir));

$subdir = explode('/', $dir, -1);

// negative limit (since PHP 5.1)
print_r(explode('/', $dir, -1));

$new_dir = "/";

foreach ($subdir as $value) {
    $new_dir = $new_dir."/".$value;
}


?>
