<?php
      require_once ("../../models/koneksi.php");
      $conn =$database->open_connection();

   
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    // $bulan = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
  
        $tahun = test_input($_POST["tahun"]);
        $bulan = test_input($_POST["bulan"]);
    
        $data_full=[];
        $query = "SELECT bulan_angka FROM bulan_executive ORDER BY bulan_angka ASC";
        $result =odbc_exec($conn,$query);
        while($arr = odbc_fetch_array($result)){
          $bln_k[] = $arr['bulan_angka'];
        }; 
 
        $query = "SELECT nama_jenis_eo FROM master_jenis_eo ORDER BY nama_jenis_eo DESC";
        $result =odbc_exec($conn,$query);
        while($arr = odbc_fetch_array($result)){
        $kategory[] = $arr['nama_jenis_eo'];
        }; 
   
        $data_full =[];
  
        foreach ($kategory as $ktg){
            
            $bln_data = data_jenis_bulan($conn,$tahun,$bln_k,$ktg);
            $data_full[] = $bln_data;
          
        
        }


  $json_encode = json_encode($data_full);

  echo $json_encode;


 function data_jenis_bulan($conn,$tahun,$bln_k,$ktg){
  foreach($bln_k as $bln){

       
    if($bln == 1){
          $mont = 01;
          $get_data = get_data($conn,$tahun,$mont,$ktg);
          $rowdata[] = $get_data;
          
        }
        elseif($bln == 2){
          $mont = 02;
          $get_data = get_data($conn,$tahun,$mont,$ktg);
          $rowdata[] = $get_data;
        }
        elseif($bln == 3){
          $mont = 03;
          $get_data = get_data($conn,$tahun,$mont,$ktg);
          $rowdata[] = $get_data;

        }
        elseif($bln == 4){
          $mont = 04;
          $get_data = get_data($conn,$tahun,$mont,$ktg);
          $rowdata[] = $get_data;

        }
        elseif($bln == 5){
          $mont = 05;
          $get_data = get_data($conn,$tahun,$mont,$ktg);
          $rowdata[] = $get_data;

        }
        elseif($bln == 6){
          $mont = 06;
          $get_data = get_data($conn,$tahun,$mont,$ktg);
          $rowdata[] = $get_data;

        }
        elseif($bln == 7){
          $mont = 07;
          $get_data = get_data($conn,$tahun,$mont,$ktg);
          $rowdata[] = $get_data;

        }
        elseif($bln == 8){
          $mont = 08;
          $get_data = get_data($conn,$tahun,$mont,$ktg);
          $rowdata[] = $get_data;

        }
        elseif($bln == 9){
          $mont = 09;
          $get_data = get_data($conn,$tahun,$mont,$ktg);
          $rowdata[] = $get_data;

        }
        elseif($bln == 10){
          $mont = 10;
          $get_data = get_data($conn,$tahun,$mont,$ktg);
          $rowdata[] = $get_data;

        }
        elseif($bln == 11){
          $mont = 11;
          $get_data = get_data($conn,$tahun,$mont,$ktg);
          $rowdata[] = $get_data;

        }
        elseif($bln == 12){
          $mont = 12;
          $get_data = get_data($conn,$tahun,$mont,$ktg);
          $rowdata[] = $get_data;

        }
  }  

  $expload = implode(",",$rowdata);
 
  $int = array_map('intval', explode(',', $expload));

  $data_array=[
    'name'=>$ktg,
    'data'=> $int
  ];


  return $data_array;

 }







  

function get_data($connection,$tahun,$mont,$ktg){
 
  $sql =" SELECT COUNT(tanggal) as jml FROM transaksi_executive WHERE YEAR(tanggal) ='".$tahun."'AND MONTH(tanggal) ='".$mont."'AND jenis_eo='".$ktg."'  ";
  $result = odbc_exec($connection,$sql);
  $arr = odbc_fetch_array($result); 
  $jml = $arr['jml'];
  return $jml;
  


}


?>