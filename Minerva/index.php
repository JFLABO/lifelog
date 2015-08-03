
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>lifelog::UltraVision</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../system/bootstrap/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
      .demo	{
	background: #EEE;
	border:2px solid #999;
	padding: 10px;
	margin-bottom:10px;
	text-align: center;
	}
	.demo1	{

      -webkit-border-radius: 10px;	/* Safari,Google Chrome用 */
	-moz-border-radius: 10px;	/* Firefox用 */
	}
    </style>
    <link href="../system/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../system/bootstrap/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../system/bootstrap/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../system/bootstrap/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../system/bootstrap/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../system/bootstrap/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../system/bootstrap/ico/favicon.png">
								   
		<style type="text/css" title="currentStyle">
			@import "media/css/demo_table.css";
		</style>
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="media/js/jquery.dataTables.js"></script>
		<link type="text/css" rel="stylesheet"
		  href="http://code.jquery.com/ui/1.10.3/themes/cupertino/jquery-ui.min.css" />
		<script type="text/javascript"
		  src="http://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>

		<script type="text/javascript" src="exlib/js/op.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('#dialog').dialog({
				  autoOpen: false,
				  title: 'Image Database for LifeLog [Cloud Album]',
				  closeOnEscape: false,
				  modal: true,
				  position: [ 350, 100 ],
				  width:650,
				  height:540
				});

		//ボタンがクリックされたらダイアログを開く
		$( "#opener" ).click(function() {
		    $( "#dialog" ).dialog( "open" );
		});
				//$('#example').dataTable();
				//$('#example').dataTable({"bPaginate": false,"bSort": false});
				 $('#example').dataTable({
				// 初期表示の行数設定
			      iDisplayLength: 15,
			      "oLanguage" : {
			         "sProcessing":   "処理中...",
			         "sLengthMenu":   "_MENU_ 件表示",
			         "sZeroRecords":  "データはありません。",
			         "sInfo":         "_START_件～_END_件を表示（全_TOTAL_ 件中）",
			         "sInfoEmpty":    " 0 件中 0 から 0 まで表示",
			         "sInfoFiltered": "（全 _MAX_ 件より抽出）",
			         "sInfoPostFix":  "",
			         "sSearch":       "検索フィルター:",
			         "sUrl":          "",
			         "oPaginate": {
			             "sFirst":    "先頭",
			             "sPrevious": "前ページ",
			             "sNext":     "次ページ",
			             "sLast":     "最終"
			         }
			      }
			   });
			} );
		</script>

  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Project lifelog</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
                   <a href='../?'>index</a>
            </p>
            <ul class="nav">
			<?php $s=file_get_contents("./bin/menu.php");echo $s;?>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span9">
		<style>
		.hero-unit {
		    padding: 10px;
		    margin-bottom: 30px;
		    font-size: 18px;
		    font-weight: 200;
		    line-height: 30px;
		    color: inherit;
		    background-color: #eeeeee;
		    -webkit-border-radius: 6px;
		    -moz-border-radius: 6px;
		    border-radius: 6px;
		}
	</style>
          <div class="hero-unit">
            <!-- <h2><?php date_default_timezone_set('Asia/Tokyo');
				print date("Y/m/d (D) G:i:s");
				?></h2> --!>
		  
		  
<div id="containerTBL" style="width:790px;">
			<table style="width:790px;" cellpadding="0" cellspacing="0" border="0" class="display" id="example">
				<thead>
					<tr>
						<th width="20">No.</th>
                        <th width="350">タイトル</th>
                        <th width="250">日付</th>
						<th width="100">サイズ</th>
					</tr>
				</thead>
				<tbody>

	<?php
	function getFileList($dir) {
	    //$files = glob(rtrim($dir, '/') . '/*');
		$dir=rtrim($dir, '/') . '/*';
		$files =glob($dir.'{*.pdf,*.PDF}',GLOB_BRACE);
		$list = array();
	    foreach ($files as $file) {
	        if (is_file($file)) {
	            $list[] = $file;
	        }
	        if (is_dir($file)) {
	            $list = array_merge($list, getFileList($file));
	        }
	    }
	
	    return $list;
	}
	
	$dir="/var/www/lifelog/DATA/org/pdf";
	$L=getFileList($dir);
	//var_dump($L);
	?>


<?php
	$i=1;
    foreach ($L as $l_file) {
	    $f_date=date ("Y m d H:i:s", filemtime($l_file));
	    $size = filesize( $l_file );
	    echo  "<tr>";
	    echo '<td class="center">'.$i.'</td>';
	    echo '<td>';
		echo "<a href=\"javascript:void(0);\" onclick=\"view('".mb_convert_encoding($l_file, 'UTF-8', 'auto')."');\">";
		echo mb_convert_encoding($l_file, 'UTF-8', 'auto').'</a></td>';
	    echo "<td>".$f_date."</td>";
	    echo "<td>".number_format($size)."B</td>";
	    echo "</tr>";
	    $i++;
    }
?>
		  </tbody>
				<tfoot>
					<tr>
						<th width="50">No.</th>
                        <th>タイトル</th>
                        <th >日付</th>
						<th >サイズ</th>
					</tr>
				</tfoot>
			</table>
		</div>
</td>
      </tr>
</table>

          </div>
		  
          <div class="row-fluid">
            <div class="span4">
              <h2>バージョン</h2>
              <p><div class="demo demo1">
			<B>Ver:0.0.1</b>
			</div>
              </p>
              <p><a class="btn" href="http://pjfs.biz/wp/?p=86">View details &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
        </div><!--/span-->
		
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Web関連</li>
              <li class="active"><a href="http://pjfs.biz/tbrp/">旅れぽ</a></li>
              <li><a href="../UltraVision/?">UltraVision</a></li>
              <li><a href="./?">Minerva</a></li>
			          
              <li class="nav-header">お仕事関連</li>
              <li><a href="http://pjfs.biz/tbrp/ChiMeRa.php?param=JFLABO::ChiMeRa::diary">JFLABO</a></li>
              <li><a href="http://dotinstall.com/home">ドットインストール</a></li>
              <li><a href="http://cakephp.jp/">CakePHP</a></li>
              <li><a href="http://laravel.jp/">laravel</a></li>
              <li><a href="http://www.backlog.jp/git-guide/">git入門</a></li>
              
              <li class="nav-header">友人関連</li>
              <li><a href="https://plus.google.com/u/0/">Google+</a></li>
              <li><a href="https://twitter.com/JFLABO">twitter</a></li>
              <li><a href="https://github.com/JFLABO/lifelog">github:lifelog</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
		
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; JFLABO 2015</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<div id="dialog">
<span id="dlg">Hello, jQuery UI Dialog!</span>
</div>