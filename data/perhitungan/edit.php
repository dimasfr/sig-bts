    <h3><i class="fa fa-angle-right"></i> Edit Data Perhitungan</h3>
    <div class="row">
    <div class="col-md-12">
    <div class="content-panel">
    <?php
    $id=$_GET["id"];
    if (!$id)
    { 
       die('Tidak ada ID yang Ditemukan!'); 
    }
    $query = $koneksi->prepare("SELECT * FROM data_pengukuran WHERE id='$id'");
    $query->execute();

    $print = $query->fetchAll(PDO::FETCH_ASSOC);
    $printrecord = $print[0];
    $get_id = $printrecord["id"];
    $get_eirp = $printrecord["eirp"];
    $get_ahre = $printrecord["ahre"];
    $get_lu = $printrecord["lu"];
    $get_rscp = $printrecord["rscp"];
    ?>
    <form name="Edit" action="index.php?modul=perhitungan&file=update" enctype=\" multipart/form-data\" method="POST" >
    <table class="table">
    <thead>
    <tr>
        <th width="3%">ID</th>
        <th>EIRP</th>
        <th>a(hre)</th>
        <th>lu</th>
        <th>RSCP</th>
    </tr>
    </thead>
	<tbody>
    <tr>
        <td class="center" height="32"><?php echo $get_id ?>
        <input type="hidden" name="id" value="<?php echo $get_id ?>" required="true"></td>
        <td class="center" height="32"><input type="text" name="eirp" size="15" value="<?php echo $get_eirp?>" required="true"></td>
        <td class="center"><input type="text" name="ahre" size="30" value="<?php echo $get_ahre ?>" required="true"></td>
        <td><input type="text" name="lu" size="15" value="<?php echo $get_lu?>" required="true"></td>
        <td><input type="text" name="rscp" size="15" value="<?php echo $get_rscp?>" required="true"></td>
    </tr>
    <tr>
    	<td></td>
    	<td></td>
    	<td></td>
        <td></td>
    	<td>
    	<input type="submit" value="Simpan" name="simpan">
    	<input type="reset" value="Reset" name="reset">
    	</td>
    </tbody>
    </table>
    </div>
    </div>
    </div>
</div>
</div>
</div>
</div>
</body>
</html>