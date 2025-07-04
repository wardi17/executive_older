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





$id_eo = test_input($_POST["id_eo"]);
$kode_atter= test_input($_POST["atter"]);


if($id_eo !== ''){

if(!empty($_FILES)){
    $files = $_FILES['files'];
    $total = count($files['name']);
    for ($i = 0; $i < $total; $i++) {
      $file_name = $files['name'][$i];
      $file_tmp = $files['tmp_name'][$i];
      $file_size = $files['size'][$i];
      $file_error = $files['error'][$i];

//       $file_ext = strtolower(pathinfo($file_name,PATHINFO_EXTENSION));
//  $upok = 1 ;
//  $allow_up = ['pdf','docx'];

//     if(!in_array($file_ext,$allow_up)){
//         $status['nilai']=0; //bernilai benar
//         $status['error'] = "Hanya file PDF dan DOCX yang diperbolehkan.";
//         echo json_encode($status);
//         $upok = 0;
//     }
//     if($upok !== 0){
          // Handle file upload errors
          if ($file_error !== UPLOAD_ERR_OK) {
              echo "Error uploading $file_name. Error code: $file_error<br>";
              continue;
          }
          $upload_dir = '../../uploads_doc/';
          $new_nama = $file_name;
          $destination = $upload_dir . $new_nama;
          if (move_uploaded_file($file_tmp, $destination)) {
            $nama_atter = $new_nama;
        } else {
          $status['error'] = "file sudah ada  ganti file";
          echo json_encode($status);
        }
    }
    //}

}

$cek =0;
$sql = "INSERT INTO [document_atter_eo](id_eo,nama_document,kode_atter)
      VALUES('".$id_eo."','".$nama_atter."','".$kode_atter."')";
$result = odbc_exec($connection, $sql);
if(!$result){
  $cek =$cek+1;
}

if ($cek==0){
  odbc_commit($connection);
  $status['nilai']=1; //bernilai benar
  $status['nama_file'] = $new_nama;
  $status['error']="Data Berhasil Ditambahkan";
}else{
  odbc_rollback($connection);
  $status['nilai']=0; //bernilai benar
  $status['nama_file'] = $new_nama;
  $status['error']="Data Gagal Ditambahkan";
}
odbc_close($connection);
echo json_encode($status);
}


// function new_name($filenama){
//   $acak           = rand(11111111, 99999999);
//   $fileExt       = substr($filenama, strrpos($filenama, '.'));
//   $fileExt       = str_replace('.','',$fileExt); // Extension


//  $filenama      = preg_replace("/\.[^.\s]{3,4}$/", "", $filenama);
//  $name_doc ="doc_war".$acak;
//   $NewName   = str_replace(' ', '', $name_doc.'.'.$fileExt);
//   return $NewName;
// }