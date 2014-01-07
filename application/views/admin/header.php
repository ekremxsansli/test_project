<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SociaPlus Admin Paneli</title>

    <!-- Bootstrap core CSS -->
    <script src="/assets/js/vendor/jquery.js"></script>
	<script src="http://js.pusher.com/2.1/pusher.min.js" type="text/javascript"></script>
    <script src="/assets/js/vendor/bootstrap.min.js"></script>
    <link href="/assets/css/vendor/bootstrap.min.css" rel="stylesheet">
	<link href="/assets/css/vendor/jquery.fancybox.css" rel="stylesheet">
    <script src="/assets/js/vendor/jquery.fancybox.pack.js"></script>
	<script src="/assets/js/vendor/mustache.js"></script>
	<script src="/assets/js/admin/script.js"></script>	
    <!-- Custom styles for this template -->
    <link href="/assets/css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	<script>
	$(document).ready(function(){
			$("a#fancybox").fancybox();
	});
	</script>
	<style>
		body {
		  padding-top: 40px;
		  padding-bottom: 40px;
		  background-color: #eee;
		}
	</style>
  </head>

  <body>

		  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		    <div class="container">
		      <div class="navbar-header">
		        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		          <span class="sr-only">Toggle navigation</span>
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		        </button>
		        <a class="navbar-brand" href="#">SociaPlus Admin</a>
		      </div>
		      <div class="collapse navbar-collapse">
		        <ul class="nav navbar-nav">
		          <li class="active"><a href="/admin/home/dashboard">Anasayfa</a></li>
		          <li><a href="/admin/post/lists">Yazılar</a></li>
		          <li><a href="/admin/facebook/lists">Facebook</a></li>
				  <li><a href="/admin/settings/lists">Ayarlar</a></li>
				  <li><a href="/admin/account/logout">Çıkış Yap</a></li>
		        </ul>
		      </div><!--/.nav-collapse -->
			  
		    </div>
		  </div>

		  	  <div class="container" style=" padding-top: 50px;">