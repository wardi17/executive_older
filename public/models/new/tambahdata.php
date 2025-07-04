<?php

//include library
require_once ("../../models/koneksi.php");
$connection =$database->open_connection();

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

session_start();
        
$user_log = $_SESSION['login_user'];

$class = $_SESSION['classku'];

  $cek = 0;
  $valid = 0;
 
$tanggal= test_input($_POST["tanggal"]);
$jam= test_input($_POST["jam"]);
$tanggal =test_input($_POST["tanggal"]);
$id= test_input($_POST["id"]);
$from_email= test_input($_POST["from_email"]);
$to_email = test_input($_POST["to_email"]);
$cc_email = test_input($_POST["cc_email"]);
$importance = test_input($_POST["importance"]);
$catatan = test_input($_POST["catatan"]);
$jenis = test_input($_POST["jenis"]);
$divisi = test_input($_POST["div"]);

$subject = test_input($_POST["subject"]);
$pencetus = test_input($_POST["pencetus"]);
$ket_pengirim = test_input($_POST["ket_pengirim"]);

$user_id = $user_log;

$tgl_upload = date('Y-m-d');

if(!empty($_FILES)){
 
    if(!empty($_FILES["image1"])){
      $fileupload      = $_FILES['image1']['tmp_name'];
      $ImageName       = $_FILES['image1']['name'];
      $ImageType       = $_FILES['image1']['type'];
      $error           = $_FILES["image1"]["error"];
      //  ganti nama
      $NewImageName = $ImageName;
      if(($ImageType == "image/gif") || ($ImageType == "image/jpeg") || ($ImageType == "image/png") || ($ImageType == "image/pjpeg")){
        $filename =compress_image($fileupload, "../../uploads_img/" . $NewImageName, 80);
    
      }else{
        echo "Uploaded image should be jpg or gif or png.";
      }
      //  $pathupload = "https://27.123.222.151:886/bmi/public/visit/uploads_img/" . $newfilename;
      $gambar1 =$NewImageName;
      }else{
        $gambar1 ="";
      }

    if(!empty($_FILES["image2"])){
      $fileupload      = $_FILES['image2']['tmp_name'];
      $ImageName       = $_FILES['image2']['name'];
      $ImageType       = $_FILES['image2']['type'];
      $error           = $_FILES["image2"]["error"];
      //  ganti nama
        $NewImageName = $ImageName;
    
        //  $newName = round(microtime(true).'.'.end($temp_name));

        if(($ImageType == "image/gif") || ($ImageType == "image/jpeg") || ($ImageType == "image/png") || ($ImageType == "image/pjpeg")){
          $filename =compress_image($fileupload, "../../uploads_img/" . $NewImageName, 80);
        }else{
          echo "Uploaded image should be jpg or gif or png.";
        }
        //  $pathupload = "https://27.123.222.151:886/bmi/public/visit/uploads_img/" . $newfilename;
        $gambar2 =$NewImageName;

      }else{
        $gambar2 ='';
      }

    if(!empty($_FILES["image3"])){
      $fileupload      = $_FILES['image3']['tmp_name'];
      $ImageName       = $_FILES['image3']['name'];
      $ImageType       = $_FILES['image3']['type'];
      $error           = $_FILES["image3"]["error"];
      //  ganti nama
        $NewImageName = $ImageName;
    
        //  $newName = round(microtime(true).'.'.end($temp_name));

        if(($ImageType == "image/gif") || ($ImageType == "image/jpeg") || ($ImageType == "image/png") || ($ImageType == "image/pjpeg")){
          $filename =compress_image($fileupload, "../../uploads_img/" . $NewImageName, 80);
        }else{
          echo "Uploaded image should be jpg or gif or png.";
        }
        //  $pathupload = "https://27.123.222.151:886/bmi/public/visit/uploads_img/" . $newfilename;
        $gambar3 =$NewImageName;

      }else{
        $gambar3 ='';
      }

    if(!empty($_FILES["image4"])){
      $fileupload      = $_FILES['image4']['tmp_name'];
      $ImageName       = $_FILES['image4']['name'];
      $ImageType       = $_FILES['image4']['type'];
      $error           = $_FILES["image4"]["error"];
      //  ganti nama
        $NewImageName = $ImageName;
    
        //  $newName = round(microtime(true).'.'.end($temp_name));

        if(($ImageType == "image/gif") || ($ImageType == "image/jpeg") || ($ImageType == "image/png") || ($ImageType == "image/pjpeg")){
          $filename =compress_image($fileupload, "../../uploads_img/" . $NewImageName, 80);
        }else{
          echo "Uploaded image should be jpg or gif or png.";
        }
        $gambar4 =$NewImageName;

      }else{
        $gambar4 ='';
    }
}else{
  $gambar1 ='';
  $gambar2 ='';
  $gambar3 ='';
  $gambar4 ='';
}



 if(!empty($id)){
  $query = "SELECT DISTINCT * FROM transaksi_executive where id_eo ='$id' ";
  $sql=odbc_exec($connection,$query);
  $rows= odbc_fetch_array($sql); 

  if($rows > 0){
        $valid=1;
    }
 
 
    if($valid == 0){
     $sql="INSERT INTO [transaksi_executive] (tanggal,jam,id_eo,from_email,to_email,divisi,cc_email,importance,jenis_eo,catatan,subject,pencetus,ket_pengirim,image1,image2,image3,image4,user_id,tgl_upload) 
     Values ('". $tanggal ."','". $jam ."','".$id."', '". $from_email ."','". $to_email."','".$divisi."','".$cc_email."', '".$importance."','".$jenis."','".$catatan."','".$subject."','".$pencetus."','".$ket_pengirim."','". $gambar1 ."', '". $gambar2 ."','". $gambar3 ."','". $gambar4 ."','".$user_id."','".$tgl_upload."'
     )"; 
    
     $result = odbc_exec($connection, $sql);
     if(!$result){
       $cek =$cek+1;
     }
   
     if ($cek==0){
       odbc_commit($connection);
       $status['nilai']=1; //bernilai benar
       $status['error']="Data Berhasil Ditambahkan";
     }else{
       odbc_rollback($connection);
       $status['nilai']=0; //bernilai benar
       $status['error']="Data Gagal Ditambahkan";
     }
     odbc_close($connection);
   
    }
    else{
     $status['nilai']= 0; //bernilai salah
     $status['error']="id_eo Sudah terdaftar silahkan ganti";
     }
     echo json_encode($status);
 }
 

 function compress_image($source_url, $destination_url, $quality)
 {
 
     $info = getimagesize($source_url);
     if ($info['mime'] == 'image/jpeg') 
     $image = imagecreatefromjpeg($source_url);
     elseif ($info['mime'] == 'image/gif') $image = imagecreatefromgif($source_url);
     elseif ($info['mime'] == 'image/png') $image = imagecreatefrompng($source_url);
     imagejpeg($image, $destination_url, $quality);
     //echo "Image uploaded successfully.";
 }
 
//  function new_name($ImageName){
//    $acak           = rand(11111111, 99999999);
//    $ImageExt       = substr($ImageName, strrpos($ImageName, '.'));
//    $ImageExt       = str_replace('.','',$ImageExt); // Extension
//    $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
//    $NewImageName   = str_replace(' ', '', $acak.'.'.$ImageExt);
 
//    return $NewImageName;
//  }