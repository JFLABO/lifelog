<?php
header("Content-Type: text/html; charset=UTF-8");
require_once ( '../system/config.php' );
//$fn=urldecode($_GET['fn']);

if(isset($_GET['fn'])){
$fn=urldecode($_GET['fn']);
//$fn=urldecode(mb_convert_encoding($_GET['fn'], $output_char_code,'auto'));
}else{
	$fn="";
	}
if(isset($_GET['sw'])){
	$sw=urldecode($_GET['sw']);
}else{
	$sw="";
	}

$today = date("Y-m-d H:i:s");



if($sw=="r"){

	$fn=urldecode($_GET['fn']);
	$s = file($fn);
	echo "<a href='./?'>HyperNote</a><HR>";
	echo mb_convert_encoding($fn,$output_char_code, 'auto');
	echo "<BR>";

	// 配列をループしてHTMLをHTMLソースとして表示し、行番号もつけます。
	foreach ($s as $line_num => $line) {
		 $line_num=sprintf("%03d",$line_num+1);
		//$s=mb_convert_encoding($s,$output_char_code, 'auto');
		echo "Line #<b>{$line_num}</b> : "
		.mb_convert_encoding($line,$output_char_code, 'SJIS'). "<br />\n";
	}

}else{

	//echo "hello ChiMeRa Mode:".$sw;
	//echo "<BR>";
	//echo "<div style='float: right;'>".$today." <a href='./HN_table.php?'>HyperNote</a>
	echo "<a href='./?'>HyperNote</a><HR>";
	//<a href='../accounting/?sw=r'>accounting</a> <a href='../?'>index</a></div> <BR><HR>";
	if($fn==""){
		$s2="目次　ファイルリスト";
		$s2=mb_convert_encoding($s2,$output_char_code, 'auto');
		echo $s2;
	}else{
		echo mb_convert_encoding($fn,$output_char_code, 'auto');
	}

	echo "<BR>";

	foreach (glob($txt_dir."*.txt") as $filename) {
		//$f=urlencode(mb_convert_encoding($filename, $output_char_code,$file_char_code));
		$f=urlencode($filename);
		$f2=mb_convert_encoding($filename, $output_char_code,$file_char_code);
		$f2=str_replace('/var/www/lifelog/DATA/org/txt/','',$f2);
		//$f=urlencode($filename);
	  	echo "<a href='./index.php?sw=r&fn=$f'>$f2</a>  date:[".@date ("F d Y H:i:s.", filemtime($filename))."] size " . @filesize($filename) . "<BR>\n";
	}
}
?>
