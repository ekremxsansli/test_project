<a href="/admin/post/create" class="btn btn-success">Ekle</a>
<table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
			<th>Resim</th>
            <th>Başlık</th>
            <th>Aktiflik</th>
			<th>Aksiyonlar</th>
          </tr>
        </thead>
        <tbody>
			<?php
			foreach ($data as $row){
				
			?>
            	<tr>
              	 	<td>
						<?=$row['id']?>
					</td>
					<td>
						<a href="<?=$row['picture']?>" id="fancybox">Göster</a>
					</td>
              		<td>
						<?=$row['title']?>
					</td>
					<td>
						<?if($active_post == $row['id'])echo 'Aktif';else echo 'Pasif';?>
					</td>
					<td>
						<a href="/admin/post/show/<?=$row['id']?>">Detay</a>
						|
						<a href="/admin/post/edit/<?=$row['id']?>">Güncelle</a>
						|
						<a href="/admin/post/delete/<?=$row['id']?>">Sil</a>
					</td>
            	</tr>
			<?php
			}
			?>
        </tbody>
      </table>