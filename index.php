
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>lifelog[ライフログ]</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="./system/bootstrap/css/bootstrap.css" rel="stylesheet">
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
    <link href="./system/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="./system/bootstrap/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./system/bootstrap/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./system/bootstrap/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./system/bootstrap/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="./system/bootstrap/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="./system/bootstrap/ico/favicon.png">
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
                   <a href='./?'>index</a>
            </p>
            <ul class="nav">
              <li class="active">
              <li><a href='./UltraVision/?'>UltraVision</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span9">
          <div class="hero-unit">
            <h2><?php date_default_timezone_set('Asia/Tokyo');
				print date("Y/m/d (D) G:i:s");
				?></h2>
            <p>UltraVision::画像ファイルを効率よく管理するシステムです。</p>
            <p><a href="http://pjfs.biz/wp/?cat=2" class="btn btn-primary btn-large">開発Blog &raquo;</a></p>
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
              <li><a href="./UltraVision/?">UltraVision</a></li>
              
              <li class="nav-header">お仕事関連</li>
              <li><a href="http://pjfs.biz/tbrp/ChiMeRa.php?param=JFLABO::ChiMeRa::diary">JFLABO</a></li>
              <li><a href="http://dotinstall.com/home">ドットインストール</a></li>

              <li class="nav-header">友人関連</li>
              <li><a href="https://plus.google.com/u/0/">Google+</a></li>
              <li><a href="https://twitter.com/JFLABO">twitter</a></li>
              <li><a href="https://github.com/JFLABO/lifelog">lifelog</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->

      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; Company 2013</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
  </body>
</html>
