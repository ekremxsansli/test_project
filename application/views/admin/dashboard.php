<script type="text/javascript">
</script>
<table class="table table-striped" id="likeTable">
        <thead>
          <tr>
            <th>#</th>
			<th>Resim</th>
            <th>Link</th>
            <th>İsim-Soyisim</th>
			<th>İçerik</th>
			<th>Tarih</th>
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
						<?=$row['link']?>
					</td>
              		<td>
						<?=$row['liked_name']?>
					</td>
              		<td>
						<a href="#content<?=$row['id']?>" id="fancybox">Göster</a>
						<div id="content<?=$row['id']?>" style="display:none;">
							<?=$row['content']?>
						</div>
					</td>
              		<td>
						<?=$row['date']?>
					</td>
            	</tr>
			<?php
			}
			?>
        </tbody>
      </table>