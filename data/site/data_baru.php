<body>
<script language="JavaScript" type="text/javascript">
function hitungeirp()
{
	var myForm = document.form1;
	var otherForm = document.form4;
	var out = document.data;
	var ptx = eval(myForm.ptx.value);
	var gtx = eval(myForm.gtx.value);
	var tlc = eval(myForm.tlc.value);

	var hasil1 = ptx + gtx - tlc;

	myForm.eirp1.value = hasil1;
	otherForm.eirp2.value = hasil1;
	out.hasil_eirp.value = hasil1;
	myForm.ptx.value = "";
	myForm.gtx.value = "";
	myForm.tlc.value = "";
}

function hitungahre()
{
	var myForm = document.form2;
	var otherForm = document.form3;
	var out = document.data;
	var fc = eval(myForm.fc.value);
	var hr = eval(myForm.hr.value);

	var lofc = Math.log10(fc);

	var hasil2 = (((1.1 * lofc) - 0.7) * hr) - ((1.56 * lofc) - 0.8);

	myForm.ahre1.value = hasil2;
	otherForm.ahre2.value = hasil2;
	otherForm.lofc.value = lofc;
	out.hasil_ahre.value = hasil2;
	myForm.fc.value = "";
	myForm.hr.value = "";
}

function hitunglu()
{
	var myForm = document.form3;
	var otherForm = document.form4;
	var out = document.data;
	var d = eval(myForm.d.value);
	var ht = eval(myForm.ht.value);
	var ahre = eval(myForm.ahre2.value);
	var lofc = eval(myForm.lofc.value);

	var lod = Math.log10(d);
	var loht = Math.log10(ht);

	var hasil3 = (46.3 + (33.9 * lofc) - (13.82 * loht) - ahre + (44.9 - 6.55 * loht) * lod + 0);

	myForm.lu.value = hasil3;
	otherForm.lu2.value = hasil3;
	out.hasil_lu.value = hasil3;
	myForm.d.value = "";
	myForm.ht.value = "";
}

function hitungrscp()
{
	var myForm = document.form4;
	var out = document.data;
	var wl = eval(myForm.wl.value);
	var bl = eval(myForm.bl.value);
	var lu = eval(myForm.lu2.value);
	var ho = eval(myForm.ho.value);
	var fm = eval(myForm.fm.value);
	var eirp = eval(myForm.eirp2.value);

	var hasil4 = (eirp - wl - bl - lu - (ho + fm));

	myForm.rscp.value = hasil4;
	out.hasil_rscp.value = hasil4;
	myForm.wl.value = "";
	myForm.bl.value = "";
	myForm.ho.value = "";
	myForm.fm.value = "";
}

function hitungradiasi()
{
	var myForm = document.form5;
	var out = document.data;
	var dbm = eval(myForm.dbm.value);
	var r = eval(myForm.r.value);

	var wat = Math.pow(10, ((dbm-30)/10));

	myForm.wat.value = wat;

	var hasil5 = wat * (r * r);

	out.hasil_radiasi.value = hasil5;
	myForm.radiasi.value = hasil5;
}

function resetForm1()
{
	document.form1.reset();
}

function resetForm2()
{
	document.form2.reset();
}

function resetForm3()
{
	document.form3.reset();
}

function resetForm4()
{
	document.form4.reset();
}

function resetForm5()
{
	document.form5.reset();
}
</script>

<!-- Data -->
<div class="row">
<div class="col-md-12">
<div class="content-panel">
<h4><i class="fa fa-angle-right"></i> Data Baru </h4>
<form name="data" action="index.php?modul=site&file=insert" method="POST">
<table class="table">
<th width="20%">Masukkan Informasi Data Baru</th>
<th width="1%"></th>
<th width="40"></th>
<?php
    $no=0;
    $query=$koneksi->prepare("SELECT * FROM data_site ORDER BY id ASC");
    $query->execute();
    while($data = $query->fetch())
    {
    	$no=$data['id'];
    }
    $no++;
?>
<tr>
	<td>ID</td>
	<td>:</td>
	<td><input type="text" name="id" required="true" value="<?php echo $no ?>" /></td>
</tr>
<tr>
	<td>ID Site</td>
	<td>:</td>
	<td><input type="text" name="IdSite" required="true" /></td>
</tr>
<tr>
	<td>Name</td>
	<td>:</td>
	<td><input type="text" name="Name" required="true"/></td>
</tr>
<tr>
	<td>Alamat</td>
	<td>:</td>
	<td><input type="text" name="Alamat" required="true"/></td>
</tr>
<tr>
	<td>Latitude</td>
	<td>:</td>
	<td><input type="text" name="Latitude" required="true"/></td>
</tr>
<tr>
	<td>Longitude</td>
	<td>:</td>
	<td><input type="text" name="Longitude" required="true"/></td>
</tr>
<tr>
	<td>Operator</td>
	<td>:</td>
	<td><select name="Tipe">
		<option value="TSEL">TSEL</option>
		<option value="ISAT">ISAT</option>
		<option value="XL">XL</option>
	</select></td>
</tr>
<tr>
	<td>Tinggi Antena</td>
	<td>:</td>
	<td><input type="text" name="Tinggi" required="true"/></td>
</tr>
<tr>
	<td>Gain Antena</td>
	<td>:</td>
	<td><input type="text" name="Gain" required="true"/></td>
</tr>
<tr>
	<td>EIRP</td>
	<td>:</td>
	<td><input type="text" name="hasil_eirp" required="true" /></td>
</tr>
<tr>
	<td>a(hre)</td>
	<td>:</td>
	<td><input type="text" name="hasil_ahre" required="true" /></td>
</tr>
<tr>
	<td>lu</td>
	<td>:</td>
	<td><input type="text" name="hasil_lu" required="true" /></td>
</tr>
<tr>
	<td>RSCP</td>
	<td>:</td>
	<td><input type="text" name="hasil_rscp" required="true" /> dBm</td>
</tr>
<tr>
	<td>Intensistas Radiasi</td>
	<td>:</td>
	<td><input type="text" name="hasil_radiasi" required="true" /> Watt/m<sup>2</sup></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td><input name="Continue" type="submit" value="Continue"/></td>
</tr>
</form>
</table>

<!-- Hitung EIRP -->
<h4><marquee>Perhitungan Data EIRP</marquee></h4>
<form name="form1" action="#">
<table class="table">
<th width="20%"><i class="fa fa-angle-right"></i><strong> EIRP</strong></th>
<th width="1%"></th>
<th width="40"></th>
<tr>
	<td>Ptx</td>
	<td>:</td>
	<td><input type="text" name="ptx"/></td>
</tr>
<tr>
	<td>Gtx</td>
	<td>:</td> 
	<td><input type="text" name="gtx"/></td>
</tr>
<tr>
	<td>Total LC</td>
	<td>:</td> 
	<td><input type="text" name="tlc"/></td>
</tr>
<tr>
	<td>EIRP</td>
	<td>:</td>
	<td><input type="text" name="eirp1" disabled="true" required="true" /></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td><input type="button" value="Hitung" onClick="hitungeirp()"/>
	<input type="button" value="Clear" onClick="resetForm1()"/></td>
</tr>
</table>
</form>

<!-- Hitung a(hre) -->
<h4><marquee>Perhitungan Data Path Lost</marquee></h4>
<form name="form2" action="#">
<table class="table">
<th width="20%"><i class="fa fa-angle-right"></i><strong> a(hre)</strong></th>
<th width="1%"></th>
<th width="40"></th>
<tr>
	<td>Fc</td>
	<td>:</td>
	<td><select name="fc">
		<option value="1821">TSEL 1821</option>
		<option value="1851">ISAT 1815</option>
		<option value="1808">XL 1808</option>
	</select> Hz</td>
</tr>
<tr>
	<td>Hr</td>
	<td>:</td>
	<td><input type="text" name="hr"></td>
</tr>
<tr>
	<td>a(hre)</td>
	<td>:</td>
	<td><input type="text" name="ahre1" disabled="true" required="true"></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td><input type="button" value="Hitung" onClick="hitungahre()"/>
	<input type="button" value="Clear" onClick="resetForm2()"/></td>
</tr>
</table>
</form>

<!-- Hitung lu -->

<form name="form3" action="#">
<table class="table">
<th width="20%"><i class="fa fa-angle-right"></i><strong> lu</strong></th>
<th width="1%"></th>
<th width="40"></th>
<tr>
	<td>d</td>
	<td>:</td>
	<td><input type="text" name="d"></td>
</tr>
<tr>
	<td>ht</td>
	<td>:</td>
	<td><input type="text" name="ht"></td>
</tr>
<tr>
	<td>a(hre)</td>
	<td>:</td>
	<td><input type="text" name="ahre2"></td>
</tr>
<tr>
	<td>Fc</td>
	<td>:</td>
	<td><input type="text" name="lofc"> Hz</td>
</tr>
<tr>
	<td>lu</td>
	<td>:</td>
	<td><input type="text" name="lu" disabled="true" required="true"></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td><input type="button" value="Hitung" onClick="hitunglu()"/>
	<input type="button" value="Clear" onClick="resetForm3()"/></td>
</tr>
</table>
</form>

<!-- Hitung RSCP -->
<h4><marquee>Perhitungan Data RSCP</marquee></h4>
<form name="form4" action="#">
<table class="table">
<th width="20%"><i class="fa fa-angle-right"></i><strong> RSCP</strong></th>
<th width="1%"></th>
<th width="40"></th>
<tr>
	<td>Wall Lost</td>
	<td>:</td>
	<td><input type="text" name="wl"></td>
</tr>
<tr>
	<td>Body Lost</td>
	<td>:</td>
	<td><input type="text" name="bl"></td>
</tr>
<tr>
	<td>Path Loss</td>
	<td>:</td>
	<td><input type="text" name="lu2"> dB</td>
</tr>
<tr>
	<td>Handover</td>
	<td>:</td>
	<td><input type="text" name="ho"> dB</td>
</tr>
<tr>
	<td>Fading Margin</td>
	<td>:</td>
	<td><input type="text" name="fm"> dB</td>
</tr>
<tr>
	<td>EIRP</td>
	<td>:</td>
	<td><input type="text" name="eirp2"> dBm</td>
</tr>
<tr>
	<td>RSCP</td>
	<td>:</td>
	<td><input type="text" name="rscp" disabled="true" required="true"></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td><input type="button" value="Hitung" onClick="hitungrscp()"/>
	<input type="button" value="Clear" onClick="resetForm4()"/></td>
</tr>
</table>
</form>
</form>

<!-- Hitung Intensitas Radiasi -->
<h4><marquee>Perhitungan Intensitas Radiasi</marquee></h4>
<form name="form5" action="#">
<table class="table">
<th width="20%"><i class="fa fa-angle-right"></i><strong> Intensitas Radiasi</strong></th>
<th width="1%"></th>
<th width="40"></th>
<tr>
	<td>Dbm</td>
	<td>:</td>
	<td><input type="text" name="dbm"></td>
</tr>
<tr>
	<td>Watt</td>
	<td>:</td>
	<td><input type="text" name="wat" disabled="true" > watt</td>
</tr>
<tr>
	<td>Jarak</td>
	<td>:</td>
	<td><input type="text" name="r"> m</td>
</tr>
<tr>
	<td>Intensitas Radiasi</td>
	<td>:</td>
	<td><input type="text" name="radiasi" disabled="true"> Watt/m<sup>2</sup></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td><input type="button" value="Hitung" onClick="hitungradiasi()"/>
	<input type="button" value="Clear" onClick="resetForm5()"/></td>
</tr>
</table>
</form>
</form>
</div>
</div>
</div>
</body>
</html>