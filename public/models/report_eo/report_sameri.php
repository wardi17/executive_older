<?php 

require_once ("../../models/koneksi.php");
$conn =$database->open_connection();

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  };
  
$tahun =test_input($_POST['tahun']);


$query = "SELECT nama_jenis_eo FROM master_jenis_eo ORDER BY nama_jenis_eo DESC";
$result =odbc_exec($conn,$query);
while($arr = odbc_fetch_array($result)){
  $kategory[] = $arr;
}; 


$data_full =[];
foreach ($kategory as $ktg){
    $jenis = $ktg['nama_jenis_eo'];
    $bln_data = get_data($conn,$tahun,$jenis);

    $data_full[] =[
      'tahun' => $tahun,
      'jenis' => $jenis,
      'jumlah'  => $bln_data
    ];
  

}

$json_encode = json_encode($data_full);

echo $json_encode;












  function get_data($connection,$tahun,$jenis){
    $sql =" SELECT COUNT(tanggal) as jml FROM transaksi_executive WHERE YEAR(tanggal) ='".$tahun."' AND jenis_eo='".$jenis."'  ";
    $result = odbc_exec($connection,$sql);
    $arr = odbc_fetch_array($result); 
    $jml = $arr['jml'];
    return $jml;

  }




