<?php
require_once ( '../system/config.php' );
$fn=urldecode($_GET['fn']);
$newstr = str_replace( "/", "□",$fn);
$newstr = str_replace( ":", "□",$newstr);
if (file_exists('./800/'.$newstr)) {
    //echo "ファイルが存在する！！";
    header('Content-Type: image/jpeg');
    readfile('./800/'.$newstr);
} else {


// 縦横、1600pxに収まるように縮小したい
$width = 750*0.7;
$height = 1000*0.7;

//$info = new SplFileInfo($fn);
$fn2=mb_convert_encoding($fn,$file_char_code,'auto');
$path_parts = pathinfo($fn2);
//echo $path_parts['extension'];
if($path_parts['extension']=="JPG"||$path_parts['extension']=="jpg"){
	//JPEGファイルを読み込む
	$image = ImageCreateFromJPEG($fn2);
}else if($path_parts['extension']=="png"){
	//$fn2=mb_convert_encoding($fn,$file_char_code,'auto');
	$image = imagecreatefrompng($fn2);
	//imagecreatefromstring(file_get_contents($fn));
	}
//echo $info;
// 元画像のファイルサイズを取得
$original_width = ImageSx($image);
$original_height = ImageSy($image);
//元画像の比率を計算し、高さを設定
$proportion = $original_width / $original_height;
$height = $width / $proportion;
     
//高さが幅より大きい場合は、高さを幅に合わせ、横幅を縮小
if($proportion < 1){
    $height = $width;
    $width = $width * $proportion;
}
$new_image = ImageCreateTrueColor($width, $height); // 画像作成
// 元画像から再サンプリング
ImageCopyResampled($new_image, $image,0,0,0,0,$width,$height,$original_width,$original_height);
// 保存

ImageJpeg( $new_image , './800/'.$newstr , 80 );

header('Content-Type: image/jpeg');
//echo $new_image;
readfile('./800/'.$newstr);

}