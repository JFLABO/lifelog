<?php
require_once ( '../../system/config.php' );
if($_POST['sw']=="100"){
	echo "<table border='1'><tr width='600'>
	<td width='600' height='400' colspan='3' bgcolor='black'>";

	$fn=$_POST['file'];
	$fn2=mb_convert_encoding($fn,$output_char_code,'auto');

	echo '<object type="application/pdf" data="pdf_v.php?fn='.$fn2.'" width="600" height="400" ></object>';
	echo "</td>";
	echo "</table>";

	echo date ("Y-m-d H:i:s.", @filemtime($fn2));
	echo $fn2;
	
}
