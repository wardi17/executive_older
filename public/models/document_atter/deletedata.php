<?php
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
$nama_atter= test_input($_POST["nama_file"]); 

if(!empty($id_eo)){
    // $link ='../../uploads_doc/'.$nama_atter;
    // $unlink = unlink($link);

$cek = 0;
  $sql="DELETE FROM document_atter_eo WHERE id_eo = '".$id_eo."' AND  nama_document = '".$nama_atter."' AND  kode_atter = '".$kode_atter."' "; 
  $result = odbc_exec($connection, $sql); 
    if(!$result){
    $cek = $cek+1;
    }
    if ($cek==0){
    odbc_commit($connection);
    $status['nilai']=1; //bernilai benar
    $status['error']="Data Berhasil Dihapus";
    }else{
    odbc_rollback($connection);
    $status['nilai']=0; //bernilai benar
    $status['error']="Data Gagal Dihapus";
    }

    odbc_close($connection);
    echo json_encode($status);
}

