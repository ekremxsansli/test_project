<form role="form" method="post" action="/admin/facebook/edit/<?=$id?>">
  <div class="form-group">
    <label for="title">Başlık</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Başlık" value="<?=$title?>">
  </div>
  <div class="form-group">
    <label for="content">İçerik</label>
    <textarea class="form-control" id="content" name="content" placeholder="İçerik" style="height:300px;"><?=$content?></textarea>
  </div>
  <div class="form-group">
    <label for="picture">Resim</label>
    <input type="text" class="form-control" id="picture" name="picture" placeholder="Resim" value="<?=$picture?>">
  </div>
  <div class="form-group">
    <label for="picture">Aktiflik</label>
	<input type="radio" value="1" name="active" <?php if($active_post == $id) echo "checked=checked";?>> Aktif
	<input type="radio" value="0" name="active" <?php if($active_post != $id) echo "checked=checked";?>> Pasif
  </div>
  <button type="submit" class="btn btn-default">Gönder</button>
</form>