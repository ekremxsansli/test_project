<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"
  xmlns:og="http://ogp.me/ns/fb#"
  xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SociaPlus">
    <meta name="author" content="Ekrem Şanslı">
    <title>SociaPlus</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/assets/css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
	  <span>
		  <?php 
		  	if($this->session->flashdata('message')) {
		?>
		<div class="alert alert-danger">
		        <strong>Hata!  </strong><?=$this->session->flashdata('message')?>
		      </div>
		<?php
		  	}
		  ?>
	  </span>
<form class="form-signin" role="form" method="post" action="/admin/account/login">
 <h2 class="form-signin-heading">Giriş Yap</h2>
 <input type="text" name="data[username]" class="form-control" placeholder="Email adresi" required autofocus><br/>
 <input type="password" name="data[password]" class="form-control" placeholder="Şifre" required>
 <button class="btn btn-lg btn-primary btn-block" type="submit">Giriş Yap</button>
</form>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
