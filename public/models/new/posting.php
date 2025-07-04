<?php
require_once ("../../models/koneksi.php");
$connection =$database->open_connection();
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  };
  session_start();
$user_log = $_SESSION['login_user'];
 


$id_eo = test_input($_POST['id_eo']);

if(!$id_eo == null){
    $posting = 1;
    $tgl_posting = date('Y-m-d');
    $cek = 0;
$sql="UPDATE [transaksi_executive] SET user_posting='".$user_log."', posting='".$posting."', tgl_posting='".$tgl_posting."'  WHERE id_eo ='". $id_eo ."'" ; 
$result = odbc_exec($connection, $sql);
    if(!$result){
      $cek =$cek+1;
    }
  
    if ($cek==0){
      odbc_commit($connection);
      $status['nilai']=1; //bernilai benar
      $status['error']="Data Berhasil di posting";
    }else{
      odbc_rollback($connection);
      $status['nilai']=0; //bernilai benar
      $status['error']="Data Gagal diposting";
    }
    odbc_close($connection);
  
    echo json_encode($status);
} 
?>