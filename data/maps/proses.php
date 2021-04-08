<?php
$no = -1;
$query = $koneksi->prepare("SELECT * FROM radiasi");
$query->execute();
while ($data = $query->fetch()) {
      $no++;
      $id[$no]  = $data["cell_id"];
      $lat[$no]   = $data["latitude"];
      $long[$no]  = $data["longitude"];
      $name[$no]  = $data["name"];
      $tipe[$no]  = $data["tipe"];
}
$i=1;
?>

<script type="text/javascript">
      var infoid = new Array();
      var infolati = new Array();
      var infolong = new Array();
      var infoname = new Array();
      var infotipe = new Array();

            <?php
            for ($i = 0; $i <= $no ; $i++) 
            {
            ?>
                  infoid[<?php echo $i ?>]   = '<?php echo $id[$i] ?>';
                  infolati[<?php echo $i ?>] = <?php echo $lat[$i] ?>;
                  infolong[<?php echo $i ?>] = <?php echo $long[$i] ?>;
                  infoname[<?php echo $i ?>] = '<?php echo $name[$i] ?>';
                  infotipe[<?php echo $i ?>] = '<?php echo $tipe[$i] ?>';
            <?php
            }
            ?>
    </script>