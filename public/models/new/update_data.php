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

     $sql="UPDATE [transaksi_executive] SET tanggal ='". $tanggal ."',jam ='". $jam ."',from_email ='". $from_email ."',
     to_email ='". $to_email."',divisi ='".$divisi."',cc_email ='".$cc_email."',importance ='".$importance."',
     jenis_eo ='".$jenis."',catatan ='".$catatan."',subject='".$subject."',pencetus ='".$pencetus."',ket_pengirim ='".$ket_pengirim."',
     image1='". $gambar1 ."',image2 ='". $gambar2 ."',image3 ='". $gambar3 ."',image4 ='". $gambar4 ."' WHERE  id_eo ='".$id."' "; 
    
     $result = odbc_exec($connection, $sql);
     if(!$result){
       $cek =$cek+1;
     }
   
     if ($cek==0){
       odbc_commit($connection);
       $status['nilai']=1; //bernilai benar
       $status['error']="Data Berhasil DiUpdate";
     }else{
       odbc_rollback($connection);
       $status['nilai']=0; //bernilai benar
       $status['error']="Data Gagal DiGagalUpdate";
     }
     odbc_close($connection);
   
    }
   
     echo json_encode($status);
 
 

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