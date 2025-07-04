<?php 

    $user_log ="herman";

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
$posting = 0;

$query = "SELECT subject,pencetus,ket_pengirim,tanggal,jam,tanggal,id_eo,from_email,to_email,cc_email,importance,divisi,jenis_eo,catatan,
image1,image2,image3,image4,user_id,tgl_upload,posting
 FROM transaksi_executive WHERE posting ='".$posting."' ORDER BY tanggal ASC";
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

  ];

  $full_data =[];
  foreach($data as $datas){
    $full_data[] =[
      'subject' =>$datas['subject'],
      'pencetus' =>$datas['pencetus'],
      'ket_pengirim' =>$datas['ket_pengirim'],
      'tanggal' =>$datas['tanggal'],
      'jam' =>$datas['jam'],
      'id_eo' =>$datas['id_eo'],
      'from_email' =>$datas['from_email'],
      'to_email' =>$datas['to_email'],
      'cc_email' =>$datas['cc_email'],
      'importance' =>$datas['importance'],
      'divisi' =>$datas['divisi'],
      'jenis_eo' =>$datas['jenis_eo'],
      'image1' =>$datas['image1'],
      'image2' =>$datas['image2'],
      'image3' =>$datas['image3'],
      'image4' =>$datas['image4'],
      'user_id' =>$datas['user_id'],
      'tgl_upload' =>$datas['tgl_upload'],
      'posting' =>$datas['posting'],
      'userlogin' =>$user_log,
      //'attach_bp' =>get_data_bp($connection,$datas['id_eo'],$id_attach="BP"),
      // 'subject' =>$datas['subject'],
      // 'subject' =>$datas['subject'],


    ];
  }
}

if(empty($full_data)){
  $full_data = null;
  echo json_encode($full_data);
}else{
  echo json_encode($full_data);
}


  function get_data_bp($connection,$id_eo,$id_attach){
    $sql = "SELECT  nama_document FROM document_atter_eo WHERE kode_atter ='".$id_attach."' AND id_eo ='".$id_eo."'";
    $result2=odbc_exec($connection,$sql);
    $data_atter =[] ;
    while($d = odbc_fetch_array($result2)){
      $data_atter[] = $d;
    
    }
  return $data_atter;
  }


