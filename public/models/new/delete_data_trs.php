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

if(!empty($id_eo)){

    $sql="DELETE FROM document_atter_eo WHERE id_eo = '".$id_eo."'"; 
    $result = odbc_exec($connection, $sql);

$cek = 0;
  $sql2="DELETE FROM transaksi_executive WHERE id_eo = '".$id_eo."' "; 
  $result = odbc_exec($connection, $sql2); 
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


// function deleterdata($item){
//     $doc = $item['nama_document'];
//     $link ='../../uploads_doc/'.$doc;
//     $unlink = unlink($link);
//     return $unlink;

// }

// function deleterimage($image){
   
//     $link ='../../uploads_img/'.$image;
//     $unlink = unlink($link);
//     return $unlink;
// }