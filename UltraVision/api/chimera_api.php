<?php
require_once ( '../../system/config.php' );
if(isset($_POST['sw'])){
	if($_POST['sw']=="100"){
		echo "<table border='1'><tr width='600'>
		<td width='530' height='400' colspan='3' bgcolor='black'>";
		//echo $_POST['file'];
		echo "<img src=\"./img_m800.php?fn=".$_POST['file']."\"". 
		" alt=\" \" style=\"max-width:530px;\">";
		echo "</td>";
		echo "</table>";
		//echo $_POST['file'];
		$fn=urldecode($_POST['file']);
		$fn2=mb_convert_encoding($fn,$file_char_code,'auto');
		echo date ("Y-m-d H:i:s.", @filemtime($fn2));
		
	}
}
?>