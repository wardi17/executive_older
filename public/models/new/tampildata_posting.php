<?php 

require_once ("../../models/koneksi.php");
$connection =$database->open_connection();
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  };


$tahun =test_input($_POST['tahun']);
$status =test_input($_POST['status']);
$posting = 1;

$query = "SELECT * FROM transaksi_executive WHERE posting ='".$posting."' ORDER BY tanggal ASC";
$result2=odbc_exec($connection,$query);
while(odbc_fetch_row($result2)){
  $data[] = [
    "subject"=>rtrim(odbc_result($result2,'subject')),
    "pencetus"=>rtrim(odbc_result($result2,'pencetus')),
    "ket_pengirim"=>rtrim(odbc_result($result2,'ket_pengirim')),
    "tanggal"=>date('d-m-y',strtotime(rtrim(odbc_result($result2,'tanggal')))),
    "jam"=>rtrim(odbc_result($result2,'jam')),
    "id_eo"=>rtrim(odbc_result($result2,'id_eo')),
    "from_email"=>rtrim(odbc_result($result2,'from_email')),
    "to_email"=>rtrim(odbc_result($result2,'to_email')),
    "cc_email"=>rtrim(odbc_result($result2,'cc_email')),
    "importance"=>rtrim(odbc_result($result2,'importance')),
    "divisi"=>rtrim(odbc_result($result2,'divisi')),
    "jenis_eo"=>rtrim(odbc_result($result2,'jenis_eo')),
    "catatan"=>rtrim(odbc_result($result2,'catatan')),
    "image1"=>rtrim(odbc_result($result2,'image1')),
    "image2"=>rtrim(odbc_result($result2,'image2')),
    "image3"=>rtrim(odbc_result($result2,'image3')),
    "image4"=>rtrim(odbc_result($result2,'image4')),
    "user_id"=>rtrim(odbc_result($result2,'user_id')),
    "tgl_upload"=>date('d-m-y',strtotime(rtrim(odbc_result($result2,'tgl_upload')))),
    "posting"=>rtrim(odbc_result($result2,'posting')),
    "tgl_posting"=>date('d-m-y',strtotime(rtrim(odbc_result($result2,'tgl_posting')))),

  ];
}
if(empty($data)){
  $data = null;
  echo json_encode($data);
}else{
  echo json_encode($data);
}


  


