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
    $query = $koneksi->prepare("SELECT * FROM data_site WHERE id='$id'");
    $query->execute();

    $print = $query->fetchAll(PDO::FETCH_ASSOC);
    $printrecord = $print[0];
    $get_id = $printrecord["id_site"];
    $get_nama = $printrecord["Name"];
    $get_alamat = $printrecord["Alamat"];
    $get_latitude = $printrecord["Latitude"];
    $get_longitude = $printrecord["Longitude"];
    $get_tipe = $printrecord["Tipe"];
    $get_tinggi = $printrecord["Tinggi_antena"];
    $get_gain = $printrecord["Gain_Antena"];
    ?>
    <form name="Edit" action="index.php?modul=site&file=update" enctype=\" multipart/form-data\" method="POST" >
    <table class="table">
    <thead>
    <tr>
        <th>ID Site</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Latitude</th>
        <th>Longitude</th>
        <th>Provider</th>
        <th>Tinggi Antena</th>
        <th>Gain Antena</th>
    </tr>
    </thead>
	<tbody>
    <tr>
        <td class="center" ><?php echo $get_id ?>
        <input type="hidden" name="id" value="<?php echo $get_id ?>" required="true"></td>
        <td class="center" ><input type="text" name="nama" value="<?php echo $get_nama?>" required="true"></td>
        <td class="center"><input type="text" name="alamat" value="<?php echo $get_alamat ?>" required="true"></td>
        <td><input type="text" name="latitude" size="15" value="<?php echo $get_latitude?>" required="true"></td>
        <td><input type="text" name="longitude" size="15" value="<?php echo $get_longitude?>"  required="true"></td>
        <td><input type="text" name="tipe" size="5" value="<?php echo $get_tipe?>" required="true"></td>
        <td><input type="text" name="tinggi" size="5" value="<?php echo $get_tinggi?>" required="true"></td>
        <td><input type="text" name="gain" size="10" value="<?php echo $get_gain?>"  required="true"></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><input type="submit" value="Simpan" name="simpan">
        <input type="reset" value="Reset" name="reset"></td>
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