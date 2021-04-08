<?php
if($_POST['simpan'])
{
    $id=($_POST['id']);
    $eirp=($_POST['eirp']);
    $ahre=($_POST['ahre']);
    $lu=($_POST['lu']);
    $rscp=($_POST['rscp']);

        try
        {
            //Masukkan user baru ke database
                $query = $koneksi->prepare("UPDATE data_pengukuran SET eirp = :eirp, ahre = :ahre, lu = :lu, rscp = :rscp WHERE id = :id");
                $query->bindParam(":id", $id);
                $query->bindParam(":eirp", $eirp);
                $query->bindParam(":ahre", $ahre);
                $query->bindParam(":lu", $lu);
                $query->bindParam(":rscp", $rscp);
                $query->execute();
				echo "<center><p><font size=4><b>Proses Pengubahan Berhasil!</b></font><p><a href='index.php?modul=perhitungan&file=data_perhitungan'>Klik di sini untuk kembali</a></p></center>";
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