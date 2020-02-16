<?php
//// CEK FILE HTACCESS ////////////////
$path = $_SERVER['PHP_SELF'];
$filename = basename($path);
$direktori = str_replace($filename,"",$path);
$isihtacessseharusnya = "### KONFIGURASI YANG SAMA PADA WORDPRESS.\n### UNTUK MENGHILANGKAN INDEX.PHP\nRewriteEngine On\n\n### SILAHKAN EDIT BARIS BERIKUT SESUAIKAN NAMA ROOT FOLDER\nRewriteBase $direktori\n#            <----- root folder ------->\n\n## BARIS BERIKUT JANGAN DI UBAH2\nRewriteRule ^index\.php$ - [L]\nRewriteCond %{REQUEST_FILENAME} !-f\nRewriteCond %{REQUEST_FILENAME} !-d\nRewriteRule . index.php [L]";
if(file_exists(".htaccess")){
    $myfile = fopen(".htaccess", "r") or die("Mati 1 !");
    $data = fread($myfile,filesize(".htaccess"));
    fclose($myfile);
    if($data != $isihtacessseharusnya) {
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