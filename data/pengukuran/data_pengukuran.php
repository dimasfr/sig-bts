<div class="row">
<div class="col-md-12">
<div class="content-panel">
<h4>Data Drive Test</h4>
<h4 align="right"><a href="index.php?modul=pengukuran&file=upload">[ Data Baru ]</a></h4>
<table class="table">
<th width="46%" align="center">BAIK</th>
<th width="46%" align="center">BURUK</th>
<th width="8%" align="center">Action</th>
<?php 
$query1=$koneksi->prepare("SELECT * FROM file_image where id != 0");
$query1->execute();

while($row = $query1->fetch(PDO::FETCH_ASSOC))
	{
	extract($row);
?>
<tr>
	<td align="center">
	<img src="data/file/<?php echo $row['image1']; ?>" class="img-rounded" height="250px"/><?php echo "</br>". $row['nama_image1']?>
	</td>
	<td align="center">
	<img src="data/file/<?php echo $row['image2']; ?>" class="img-rounded" height="250px"/><?php echo "</br>". $row['nama_image2']?>
	</td>
	<td>
		<a href="index.php?modul=pengukuran&file=hapus_pengukuran&id=<?php echo $row['id']; ?>"><img src="pic/del.png" width="50px"></a>
	</td>
</tr>
<?php } ?>
</table>