<?php
if($_POST['Continue'])
{

    $id=($_POST['id']);
    $idsite=($_POST['IdSite']);
    $name=($_POST['Name']);
    $alamat=($_POST['Alamat']);
    $latitude=($_POST['Latitude']);
    $longitude=($_POST['Longitude']);
    $tipe=($_POST['Tipe']);
    $tinggi=($_POST['Tinggi']);
    $gain=($_POST['Gain']);
    $eirp=($_POST['hasil_eirp']);
    $ahre=($_POST['hasil_ahre']);
    $lu=($_POST['hasil_lu']);
    $rscp=($_POST['hasil_rscp']);
        
        try
        {
            
            $query = $koneksi->prepare("INSERT INTO data_site (id,id_site,Name,Alamat,Latitude,Longitude,Tipe,Tinggi_antena,Gain_Antena) VALUES (:id, :id_site, :name, :alamat, :latitude, :longitude, :tipe, :tinggi, :gain)");
            $query->bindParam(":id", $id);
            $query->bindParam(":id_site", $idsite);
            $query->bindParam(":name", $name);
            $query->bindParam(":alamat", $alamat);
            $query->bindParam(":latitude", $latitude);
            $query->bindParam(":longitude", $longitude);
            $query->bindParam(":tipe", $tipe);
            $query->bindParam(":tinggi", $tinggi);
            $query->bindParam(":gain", $gain);
            $query->execute();

            $query = $koneksi->prepare("INSERT INTO data_pengukuran (id,eirp,ahre,lu,rscp) VALUES (:id, :eirp, :ahre, :lu, :rscp)");
            $query->bindParam(":id", $id);
            $query->bindParam(":eirp", $eirp);
            $query->bindParam(":ahre", $ahre);
            $query->bindParam(":lu", $lu);
            $query->bindParam(":rscp", $rscp);
            $query->execute();
            
			echo "<center><p><font size=4><b>Proses Pengisian Berhasil!</b></font><p><a href='index.php?modul=site&file=data_site'>kembali</a></p></center>";
            }catch(PDOException $e){
                // Jika terjadi error
                if($e->errorInfo[0] == 23000){
                    //errorInfor[0] berisi informasi error tentang query sql yg baru dijalankan
                    //23000 adalah kode error ketika ada data yg sama pada kolom yg di set unique
                    $this->error = "ID Sudah Digunakan!";
                }else{
                    echo $e->getMessage();
                }
            }
        }
?>