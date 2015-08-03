<?php
header("Content-Type: text/html; charset=UTF-8");
require_once ( '../../system/config.php' );

?>

<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<link type="text/css" rel="stylesheet"
  href="http://code.jquery.com/ui/1.10.3/themes/cupertino/jquery-ui.min.css" />
<script type="text/javascript"
  src="http://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>
<script type="text/javascript">
$(function() {
	$('#dialog').dialog({
		  autoOpen: false,
		  title: 'Image Database for LifeLog [Cloud Album]',
		  closeOnEscape: false,
		  position: [ 350, 100 ],
		  modal: true,
		  width:550,
		  height:540
		});
	//ボタンがクリックされたらダイアログを開く
	$( "#opener" ).click(function() {
	    $( "#dialog" ).dialog( "open" );
	});
});

</script>
<script type="text/javascript" src="exlib/js/op.js"></script>

<?php
	if(isset($_GET['fn'])){
	//$fn=urldecode($_GET['fn']);
	$fn=mb_convert_encoding(urldecode($_GET['fn']), $output_char_code,'auto');
	}else{
		$fn="";
		}

	if(isset($_GET['sw'])){
		$sw=urldecode($_GET['sw']);
	}else{
		$sw="";
		}

//echo "hello2 UltraVision Rev.01 ChiMeRa Mode:".$sw." LifelogServer SuperNAS";
if(isset($_GET['start'])){
    $s=$_GET['start'];
}else{
    $s=0;
}
//echo "<BR>";
//echo "<div style='float: right;'><a href='./?'>UltraVision</a> <a href='../?'>index</a></div> <BR><HR>";
/*
if($fn==""){
	$s2="画像　ファイルリスト 件数　ページ";
	$s2=mb_convert_encoding($s2,$output_char_code, 'auto');
	echo $s2;
}else{
	echo mb_convert_encoding($fn,$output_char_code, 'auto');
}

echo "<HR>";
*/


if($sw=="r"){
	//$s=file_get_contents ('./abe/.bash_history');

	$s = file($fn);

	// 配列をループしてHTMLをHTMLソースとして表示し、行番号もつけます。
	foreach ($s as $line_num => $line) {
		 $line_num=sprintf("%03d",$line_num+1);
		//$s=mb_convert_encoding($s,$output_char_code, 'auto');
		echo "Line #<b>{$line_num}</b> : " .mb_convert_encoding($line,$output_char_code, $file_char_code). "<br />\n";
	}
}else{
	$i=1;
	$images = scan_image($img_repo);
	echo "<font size='-1'>";
	echo $s."件目から100件表示 "."件数：".count($images)."件 "."";
	echo "</font>";
    echo "<Center>";
	foreach ($images as $image) {
		//$image = str_replace($image_dir, $image_url, $image);
        $p=$s;
        $q=$s+101;
        if($p<$i&&$i<$q){
            $str01= "No.".sprintf("%05d",$i)." ";
            $str01=$str01. $image." ". date ("Y-m-d H:i:s.", @filemtime($image)) ." ";
			echo "<a href=\"javascript:void(0);\" onclick=\"view('".$image."');\">";
            echo '<img src="./img_m2.php?fn='.$image.'" alt="'.$str01.'" style="max-width:100px;">';
			echo '</a> ';
            if($i%10==0){
                echo "<br>";
            }
        }
		$i++;
	}

    echo "</center>";
    //echo "<a href='index2.php?start=0'>1</a> ";
	echo "<font size='-1'>";
    $page=intval (count($images)/100);
    for($n=0;$n<$page+1;$n++){
        echo "<a href='index.php?start=".($n*100)."'>".($n*100)."</a> ";
    }
    echo $page." pages<BR>";
	echo "</font>";

	//return $list;
	//var_dump($images);
		/*
	foreach (glob($img_repo."*.{jpg,png,gif,JPG}", GLOB_BRACE) as $filename) {
		$f=urlencode(mb_convert_encoding($filename, $output_char_code, 'auto'));
	  echo "No.".sprintf("%05d",$i)."<a href='?sw=r&fn=$f'>$filename</a> size " . filesize($filename) . "<BR>\n";
	  $i++;
	}
	*/
}
function scan_image($dir) {
    $list = $tmp = array();

    foreach(glob($dir . '*/', GLOB_ONLYDIR) as $child_dir) {

	    if ($tmp = scan_image($child_dir)) {
            $list = array_merge($list, $tmp);
        }
    }
	//var_dump($dir);
	//var_dump($child_dir);
	$file_char_code="CP932";
	$output_char_code='UTF-8';
//    foreach(glob($dir.'{*.jpg,*.gif,*.png,*.JPG}',GLOB_BRACE) as $image) {
    foreach(glob($dir.'{*.jpg,*.png,*.JPG}',GLOB_BRACE) as $image) {
        $list[] = urlencode(mb_convert_encoding($image, $output_char_code,$file_char_code));
    }
	//var_dump($list);
    return $list;
}
?>

<div id="dialog">
<span id="dlg">Hello, jQuery UI Dialog!</span>
</div>
