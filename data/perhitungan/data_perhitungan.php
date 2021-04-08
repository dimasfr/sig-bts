        <h3><i class="fa fa-angle-right"></i> Perhitungan Daya Pancar BTS</h3>
		  	<div class="row mt">
              <div class="col-lg-12">
                      <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> XL</h4>
                          <section id="no-more-tables">
                              <table class="table table-bordered table-striped table-condensed cf">
                                  <thead class="cf">
                                <?php
                                require_once 'koneksi.php';
                                $query1=$koneksi->prepare("SELECT * FROM data_site where Tipe='XL' ORDER BY id ASC");
                                $query1->execute();
                                ?>
                              <tr>
                                  <th width="2%">ID</th>
                                  <th width="18%">Name</th>
                                  <th width="70%">Alamat</th>
                                  <th class="numeric">EIRP</th>
                                  <th class="numeric">a(hre)</th>
                                  <th class="numeric">lu</th>
                                  <th class="numeric">RSCP</th>
                                  <th colspan="2"><center>Actions</center></th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php
                              while($data1 = $query1->fetch()){
                                $id=$data1['id'];
                                $query2=$koneksi->prepare("SELECT * FROM data_pengukuran where id='$id'"); //EIRP
                                $query2->execute();
                                while($data2 = $query2->fetch()){
                                  $ahre=round($data2['ahre'],2);
                              ?>
                              <tr>
                                  <td><?php echo $id ?></td>
                                  <td><?php echo $data1['Name'] ?></td>
                                  <td class="numeric"><?php echo $data1['Alamat'] ?></td>
                                  <td class="numeric"><?php echo $data2['eirp'] ?></td>
                                  <td class="numeric"><?php echo $ahre ?></td>
                                  <td class="numeric"><?php echo $data2['lu'] ?></td>
                                  <td class="numeric"><?php echo $data2['rscp'] ?></td>
                                  <td><a href="index.php?modul=perhitungan&file=edit&id=<?php echo $id?>"><img src="pic/update.png" width="22px"></a></td>
                                  <td><a href="index.php?modul=perhitungan&file=hapus&id=<?php echo $id?>"><img src="pic/del.png" width="20px"></a></td>
                              </tr>
                              <?php
                              }}
                              ?>
                                  </tbody>
                              </table>
                          </section>
                      </div><!-- /content-panel -->
                  </div><!-- /col-lg-12 -->
              </div><!-- /row -->

              <div class="row mt">
              <div class="col-lg-12">
                      <div class="content-panel">
						  <h4><i class="fa fa-angle-right"></i> Indosat</h4>
                          <section id="no-more-tables">
                              <table class="table table-bordered table-striped table-condensed cf">
                                  <thead class="cf">
                                <?php
                                $query1=$koneksi->prepare("SELECT * FROM data_site where Tipe='ISAT' ORDER BY id ASC");
                                $query1->execute();
                                ?>
                              <tr>
                                  <th width="2%">ID</th>
                                  <th width="18%">Name</th>
                                  <th width="70%">Alamat</th>
                                  <th class="numeric">EIRP</th>
                                  <th class="numeric">a(hre)</th>
                                  <th class="numeric">lu</th>
                                  <th class="numeric">RSCP</th>
                                  <th colspan="2"><center>Actions</center></th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php
                              while($data1 = $query1->fetch()){
                                $id=$data1['id'];
                                $query2=$koneksi->prepare("SELECT * FROM data_pengukuran where id='$id'"); //EIRP
                                $query2->execute();
                                while($data2 = $query2->fetch()){
                                  $ahre=round($data2['ahre'],2);
                              ?>
                              <tr>
                                  <td><?php echo $id ?></td>
                                  <td><?php echo $data1['Name'] ?></td>
                                  <td class="numeric"><?php echo $data1['Alamat'] ?></td>
                                  <td class="numeric"><?php echo $data2['eirp'] ?></td>
                                  <td class="numeric"><?php echo $ahre ?></td>
                                  <td class="numeric"><?php echo $data2['lu'] ?></td>
                                  <td class="numeric"><?php echo $data2['rscp'] ?></td>
                                  <td><a href="index.php?modul=perhitungan&file=edit&id=<?php echo $id?>"><img src="pic/update.png" width="22px"></a></td>
                                  <td><a href="index.php?modul=perhitungan&file=hapus&id=<?php echo $id?>"><img src="pic/del.png" width="20px"></a></td>
                              </tr>
                              <?php
                              }}
                              ?>
                                  </tbody>
                              </table>
                          </section>
                      </div><!-- /content-panel -->
                  </div><!-- /col-lg-12 -->
              </div><!-- /row -->

              <div class="row mt">
                <div class="col-lg-12">
                      <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i> Telkomsel </h4>
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                                <?php
                                $query1=$koneksi->prepare("SELECT * FROM data_site where Tipe='TSEL' ORDER BY id ASC");
                                $query1->execute();
                                ?>
                              <tr>
                                  <th width="2%">ID</th>
                                  <th width="18%">Name</th>
                                  <th width="70%">Alamat</th>
                                  <th class="numeric">EIRP</th>
                                  <th class="numeric">a(hre)</th>
                                  <th class="numeric">lu</th>
                                  <th class="numeric">RSCP</th>
                                  <th colspan="2"><center>Actions</center></th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php
                              while($data1 = $query1->fetch()){
                                $id=$data1['id'];
                                $query2=$koneksi->prepare("SELECT * FROM data_pengukuran where id='$id'"); //EIRP
                                $query2->execute();
                                while($data2 = $query2->fetch()){
                                  $ahre=round($data2['ahre'],2);
                              ?>
                              <tr>
                                  <td><?php echo $id ?></td>
                                  <td><?php echo $data1['Name'] ?></td>
                                  <td class="numeric"><?php echo $data1['Alamat'] ?></td>
                                  <td class="numeric"><?php echo $data2['eirp'] ?></td>
                                  <td class="numeric"><?php echo $ahre ?></td>
                                  <td class="numeric"><?php echo $data2['lu'] ?></td>
                                  <td class="numeric"><?php echo $data2['rscp'] ?></td>
                                  <td><a href="index.php?modul=perhitungan&file=edit&id=<?php echo $id?>"><img src="pic/update.png" width="22px"></a></td>
                                  <td><a href="index.php?modul=perhitungan&file=hapus&id=<?php echo $id?>"><img src="pic/del.png" width="20px"></a></td>
                              </tr>
                              <?php
                              }}
                              ?>
                              </tbody>
                          </table>
                          </section>
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->     
        </div><!-- /row -->