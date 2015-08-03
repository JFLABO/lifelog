<?php
require_once ( '../system/config.php' );
$fn=$_GET['fn'];
$fn2=$fn;
//'C:/data/myWatchお仕事創出.pdf';
$fn2=mb_convert_encoding($fn2,'SJIS','auto');
//$f2=$fn;
header('Content-Type: application/pdf');
//echo $new_image;
readfile($fn2);
