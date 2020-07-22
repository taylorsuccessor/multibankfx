<?php
$root_path = __DIR__."/";
include $root_path.'helper/header_include.php';

function include_from_root($path)
    {
        include($root_path.$path);
    }

include $root_path.$request_file;
?>