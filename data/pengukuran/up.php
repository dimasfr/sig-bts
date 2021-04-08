<?php

  
  $no=0;
  $query=$koneksi->prepare("SELECT * FROM file_image ORDER BY id ASC");
    $query->execute();
    while($data = $query->fetch())
    {
      $no=$data['id'];
    }
  $no++;

 if(isset($_POST['btnsave']))
 {
  
  $nmfoto1  = $_POST['nama1'];
  $nmfoto2  = $_POST['nama2'];
  $imgFile1 = $_FILES['image1']['name'];
  $tmp_dir1 = $_FILES['image1']['tmp_name'];
  $imgSize1 = $_FILES['image1']['size'];
  $imgFile2 = $_FILES['image2']['name'];
  $tmp_dir2 = $_FILES['image2']['tmp_name'];
  $imgSize2 = $_FILES['image2']['size'];
  
  
  if(!empty($imgFile1) || ($imgFile2)){
   $upload_dir = 'data/file/'; // upload directory
 
   $imgExt1 = strtolower(pathinfo($imgFile1,PATHINFO_EXTENSION)); // get image extension
   $imgExt2 = strtolower(pathinfo($imgFile2,PATHINFO_EXTENSION));
   // valid image extensions
   $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
  
   // rename uploading image
   $userpic1 = rand(1000,1000000).".".$imgExt1;
   $userpic2 = rand(1000,1000000).".".$imgExt2;
    
   // allow valid first file formats
   if(in_array($imgExt1, $valid_extensions)){
    // Check file size '5MB'
    if($imgSize1 < 5000000) {
      move_uploaded_file($tmp_dir1,$upload_dir.$userpic1);
    }
    else{
     $errMSG = "<center>Sorry, your file is too large.</center>";
    }
   }
    // allow valid second file formats
   if(in_array($imgExt2, $valid_extensions)){ 
    // Check file size '5MB'
    if($imgSize2 < 5000000) {
      move_uploaded_file($tmp_dir2,$upload_dir.$userpic2);
    }
    else{
     $errMSG = "<center>Sorry, your file is too large.</center>";
    }
   }
  }
  else{
  $errMSG = "<center>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</center>";  
  }
  }
  if(empty($imgFile1)) {
    echo "<center>Tidak Menyertakan Image 1</center>";
    $userpic1 = "noimage.png";
    $nmfoto1 = "Unnamed";
  }
  if(empty($imgFile2)){
    echo "<center>Tidak Menyertakan Image 2</center>";
    $userpic2 = "noimage.png";
    $nmfoto2 = "Unnamed";
  }
  
  
  // if no error occured, continue ....
  if(!isset($errMSG))
  {
   $stmt = $koneksi->prepare('INSERT INTO file_image(id,image1,nama_image1,image2,nama_image2) VALUES(:id, :file1, :nama1, :file2, :nama2)');
   $stmt->bindParam(':id',$no);
   $stmt->bindParam(':file1',$userpic1);
   $stmt->bindParam(':nama1',$nmfoto1);
   $stmt->bindParam(':file2',$userpic2);
   $stmt->bindParam(':nama2',$nmfoto2);
   
   if($stmt->execute())
   {
    $successMSG = "New Record Succesfully Inserted ...";
    echo "<center><p><font size=4><b> $successMSG </b></font><p><a href='index.php?modul=pengukuran&file=data_pengukuran'>Kembali</a></p></center>";
   }
   else
   {
    $errMSG = "<center>Error While Inserting....</center>";
   }
  }
  else {
    echo $errMSG;
  }
?>