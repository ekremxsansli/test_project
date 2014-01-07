<form role="form" method="post" action="/admin/settings/edit/<?=$id?>">
  <div class="form-group">
    <label for="title">İsim</label>
    <input type="text" class="form-control" id="title" name="name" placeholder="İsim" value="<?=$name?>">
  </div>
  <div class="form-group">
    <label for="content">Değer</label>
    <input type="text" class="form-control" id="value" name="value" placeholder="Değer" value="<?=$value?>">
  </div>
  <button type="submit" class="btn btn-default">Gönder</button>
</form>