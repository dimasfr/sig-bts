<?php 
if($_POST['hapus'])
{
    $id=($_POST['id']);
        
        try
        {
            //Masukkan user baru ke database
                $query=$koneksi->prepare("DELETE FROM file_image WHERE id = :id");
                $query->bindParam(":id", $id);
                $query->execute();
				echo "<center><p><font size=4><b>Proses Penghapusan Berhasil!</b></font><p><a href='index.php?modul=pengukuran&file=data_pengukuran'>Klik di sini untuk kembali</a></p></center>";
            }catch(PDOException $e){
                // Jika terjadi error
                if($e->errorInfo[0] == 23000){
                    //errorInfor[0] berisi informasi error tentang query sql yg baru dijalankan
                    //23000 adalah kode error ketika ada data yg sama pada kolom yg di set unique
                    $this->error = "Error!";
                }else{
                    echo $e->getMessage();
                }
            }
        }
?>