<?php
if($_POST['simpan'])
{
    $id=($_POST['id']);
    $nama=($_POST['nama']);
    $alamat=($_POST['alamat']);
    $latitude=($_POST['latitude']);
    $longitude=($_POST['longitude']);
    $tipe=($_POST['tipe']);
    $tinggi=($_POST['tinggi']);
    $gain=($_POST['gain']);

        try
        {
            //Masukkan user baru ke database
                $query = $koneksi->prepare("UPDATE data_site SET Name = :nama, Alamat = :alamat, Latitude = :latitude, Longitude = :longitude, Tipe = :tipe, Tinggi_antena = :tinggi , Gain_Antena = :gain WHERE id_site = :id");
                $query->bindParam(":id", $id);
                $query->bindParam(":nama", $nama);
                $query->bindParam(":alamat", $alamat);
                $query->bindParam(":latitude", $latitude);
                $query->bindParam(":longitude", $longitude);
                $query->bindParam(":tipe", $tipe);
                $query->bindParam(":tinggi", $tinggi);
                $query->bindParam(":gain", $gain);
                $query->execute();
				echo "<center><p><font size=4><b>Proses Pengubahan Berhasil!</b></font><p><a href='index.php?modul=site&file=data_site'>Klik di sini untuk kembali</a></p></center>";
            }catch(PDOException $e){
                // Jika terjadi error
                if($e->errorInfo[0] == 23000){
                    //errorInfor[0] berisi informasi error tentang query sql yg baru dijalankan
                    //23000 adalah kode error ketika ada data yg sama pada kolom yg di set unique
                    $this->error = "Username sudah digunakan!";
                }else{
                    echo $e->getMessage();
                }
            }
        }
?>