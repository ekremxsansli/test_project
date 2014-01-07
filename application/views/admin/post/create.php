<form role="form" method="post" action="/admin/post/create">
  <div class="form-group">
    <label for="title">Başlık</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Başlık">
  </div>
  <div class="form-group">
    <label for="content">İçerik</label>
    <textarea class="form-control" id="content" name="content" placeholder="İçerik" style="height:300px;"></textarea>
  </div>
  <div class="form-group">
    <label for="picture">Resim</label>
    <input type="text" class="form-control" id="picture" name="picture" placeholder="Resim">
  </div>
  <input type="hidden" name="active" value="0">
  <button type="submit" class="btn btn-default">Gönder</button>
</form>