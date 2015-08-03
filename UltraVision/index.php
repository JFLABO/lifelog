
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
			<?php
			//$_GET['start'];
			if(isset($_GET['start'])){
			$stt=mb_convert_encoding(urldecode($_GET['start']), $output_char_code,'auto');
			}else{
				$stt="";
				}
				$s="HELLO";
			$s=file_get_contents("http://localhost/lifelog/UltraVision/bin/index_a.php?start=".$stt);echo $s;?>

          </div>
		  
          <div class="row-fluid">
            <div class="span4">
              <h2>バージョン</h2>
              <p><div class="demo demo1">
			<B>Ver:0.0.1</b>
			</div>
              </p>
              <p><a class="btn" href="http://pjfs.biz/wp/?p=86">View details &raquo;</a>
              <a href="./UltraVision/?" class="btn btn-primary btn-large">UltraVision &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
        </div><!--/span-->
		
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Web関連</li>
              <li class="active"><a href="http://pjfs.biz/tbrp/">旅れぽ</a></li>
              <li><a href="./?">UltraVision</a></li>
              
              <li class="nav-header">お仕事関連</li>
              <li><a href="http://pjfs.biz/tbrp/ChiMeRa.php?param=JFLABO::ChiMeRa::diary">JFLABO</a></li>
              <li><a href="http://dotinstall.com/home">ドットインストール</a></li>
              <li><a href="http://cakephp.jp/">CakePHP</a></li>
              
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
    <script src="../system/bootstrap/js/jquery.js"></script>
    <script src="../system/bootstrap/js/bootstrap-transition.js"></script>
    <script src="../system/bootstrap/js/bootstrap-alert.js"></script>
    <script src="../system/bootstrap/js/bootstrap-modal.js"></script>
    <script src="../system/bootstrap/js/bootstrap-dropdown.js"></script>
    <script src="../system/bootstrap/js/bootstrap-scrollspy.js"></script>
    <script src="../system/bootstrap/js/bootstrap-tab.js"></script>
    <script src="../system/bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="../system/bootstrap/js/bootstrap-popover.js"></script>
    <script src="../system/bootstrap/js/bootstrap-button.js"></script>
    <script src="../system/bootstrap/js/bootstrap-collapse.js"></script>
    <script src="../system/bootstrap/js/bootstrap-carousel.js"></script>
    <script src="../system/bootstrap/js/bootstrap-typeahead.js"></script>

  </body>
</html>
