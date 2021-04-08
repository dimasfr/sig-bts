      <h3><i class="fa fa-angle-right"></i> Tabel Data Site</h3>
				<div class="row">
						
						 <div class="col-md-12">
	                  	  <div class="content-panel">
		                      <table class="table">
		                          <thead>
		                          <tr>
									  <th width="2%">No</th>
		                              <th width="15%">Nama</th>
		                              <th width="70%">Alamat</th>
		                              <th>Latitude</th>
		                              <th>Longitude</th>
									  <th width="5%">Tipe</th>
									  <th width="5%">Tinggi Antena</th>
									  <th width="5%">Gain Antena</th>
									  <th colspan="3"><center>Actions</center></th>
		                          </tr>
		                          </thead>
        <tbody>
				<?php
        //membuat koneksi ke database
        require_once 'koneksi.php';
        $query=$koneksi->prepare("SELECT * FROM data_site ORDER BY id ASC");
        $query->execute();

		while($data = $query->fetch())
        {
        	$id=$data['id'];
        ?>
        <tr>

				<td><?php echo $id ?></td>
				<td><?php echo $data['Name'] ?></td>
				<td><?php echo $data['Alamat'] ?></td>
				<td><?php echo $data['Latitude'] ?></td>
				<td><?php echo $data['Longitude'] ?></td>
				<td><?php echo $data['Tipe'] ?></td>
				<td><?php echo $data['Tinggi_antena'] ?></td>
				<td><?php echo $data['Gain_Antena'] ?></td>
				<td><a href="index.php?modul=site&file=maps&id=<?php echo $id ?>"><img src="pic/view.png" width="20px"></a></td>
				<td><a href="index.php?modul=site&file=edit&id=<?php echo $id ?>"><img src="pic/update.png" width="22px"></a></td>
                <td><a href="index.php?modul=site&file=hapus&id=<?php echo $id ?>"><img src="pic/del.png" width="20px"></a></td>
		</form>
		</tr> 
    <?php
    }
		?>
		                  