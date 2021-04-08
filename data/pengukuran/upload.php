<div class="row">
<div class="col-md-12">
<div class="content-panel">
<form action="index.php?modul=pengukuran&file=up" method="POST" enctype="multipart/form-data">
<table class="table">
<th width="10%">Kategori Baik</th>
<th width="40%"></th>
<th width="10%">Kategori Buruk</th>
<th width="40%"></th>
<tr>
	<td>Nama : <input type="text" name="nama1" size="15" ></td>
	<td>Pilih File : <input type="file" name="image1"></td>
	<td>Nama : <input type="text" name="nama2" size="15"></td>
	<td>Pilih File : <input type="file" name="image2"></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td align="right"><input type="submit" value="Upload Image" name="btnsave"></td>
</tr>
</table>
</form>