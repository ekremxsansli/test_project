<a href="/admin/settings/create" class="btn btn-success">Ekle</a>
<table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
			<th>İsim</th>
            <th>Değer</th>
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
						<?=$row['name']?>
					</td>
					<td>
						<?=$row['value']?>
					</td>
					<td>
						<a href="/admin/settings/edit/<?=$row['id']?>">Düzenle</a>
					</td>
            	</tr>
			<?php
			}
			?>
        </tbody>
      </table>