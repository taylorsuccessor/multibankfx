<?php
$root_path = __DIR__."/";
include $root_path.'helper/header_include.php';

echo $include_from_root();

include $root_path.$request_file;
?>