<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">SociaPlus</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/">Anasayfa</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>
<div class="cover-photo">
	<img src="<?=$settings['coverphoto']?>"/>
</div>
<div class="container">
  <div class="starter-template">
	  <div class="col-md-12" id="fbDiv">
		  	<fb:like href="<?=$settings['fbLink']?>" action="like" show_faces="true" share="false"></fb:like>
	 </div>
		<div id="postDiv"></div>
  </div>
</div><!-- /.container -->