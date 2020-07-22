<?php

$document_root = $_SERVER['DOCUMENT_ROOT'];

$url_base_path=$root_path;
$url_base_path =str_replace('/private','',$url_base_path);
$url_base_path =str_replace($document_root,'',$url_base_path);

$request_url = trim($_SERVER['REQUEST_URI']);
$request_file = str_replace('/','',$request_url);
echo $request_file;

$request_file =( $request_file=='' )?'home.php':$request_file;

include 'database/db_driver.php';


function include_from_root($path)
    {
        
        global $root_path;
        include($root_path.$path);
}
