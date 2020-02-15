<?php
//// CEK FILE HTACCESS ////////////////
$path = $_SERVER['PHP_SELF'];
$filename = basename($path);
$direktori = str_replace($filename,"",$path);
if(file_exists(".htaccess")){
    $myfile = fopen(".htaccess", "r") or die("Mati 1 !");
    $data = fread($myfile,filesize(".htaccess"));
    fclose($myfile);
    if(!strpos($data, $direktori)) {
        echo "Perlu instalasi HTACCESS<br/>Silahkan Ikuti Link Ini</br><a href='instalasi-htaccess.php'>INSTALL</a>";
        exit();
    }
} else {
    echo "Perlu instalasi HTACCESS<br/>Silahkan Ikuti Link Ini</br><a href='instalasi-htaccess.php'>INSTALL</a>";
    exit();
}

///// APLIKASI ANDA MULAI DARI SINI /////////
include_once 'aplikasi-saya.php';
?>