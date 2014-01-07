<form role="form" method="post" action="/admin/post/create">
  <div class="form-group">
    <label for="title">Başlık</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Başlık" disabled="disabled" value="<?=$title?>">
  </div>
  <div class="form-group">
    <label for="content">İçerik</label>
    <textarea class="form-control" id="content" name="content" placeholder="İçerik" style="height:300px;"  disabled="disabled">
    	<?=$content?>
    </textarea>
  </div>
  <div class="form-group">
    <label for="picture">Resim</label><br/>
    <img src="<?=$picture?>" width="320" height="320"/>
  </div>
  <div class="form-group">
  	<label for="picture">Aktiflik</label><br/>
	<?php
	if($id == $active_post)
		echo "Aktif";
	else
		echo "Pasif";
	?>
  </div>
</form>