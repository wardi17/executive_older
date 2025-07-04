

<div class ="col-md-12 col-12">
  <div class="card">
    <div class="card-header">
    <h5>VIEW EXECUTIVE ORDER </h5>
    </div>
    <div class="card-content">
      <div class="card-body">
      <button onclick="goBack()" class="btn btn-lg mb-4"><i class="fa-solid fa-chevron-left"></i></button>
      <form  id ="formtview" class ="form form-horizontal">
        <div class="row col-md-12-col-12">
          <div class= "col-md-6">
                        <div class="row col-md-12 mb-3">
                                  <label for="subject" class="col-sm-2 col-form-label">Subject</label>
                                  <div class="col-sm-8">
                                  <textarea style="height:65px;" id="subject"  class="form-control" name ="subject" value="" required></textarea>
                                  </div>
                        </div>
                        <div class="row col-md-12 mb-3">
                                <label for="id_eo" class="col-sm-2 col-form-label">ID</label>
                                <div class="col-sm-4">
                                <input type="text" disabled class="form-control" name ="id_eo" id="id_eo" value="" required>
                                </div>
                        </div>
                        <div class="row col-md-12 mb-3">
                                <label for="importance" class="col-sm-2 col-form-label">Prioritas</label>
                                <div class="col-sm-6">
                                <input  class="form-control" name ="importance" id="importance" value="" required></input>
                                </div>
                        </div>
                      <div class="row col-md-12 mb-3">
                                <label for="pencetus" class="col-sm-2 col-form-label">Pencetus</label>
                                <div class="col-sm-6">
                                <input  class="form-control" name ="pencetus" id="pencetus" value="" required></input>

                                </div>
                      </div>
                      <div class="row col-md-12 mb-3">
                                <label for="ket_pengirim" class="col-sm-2 col-form-label">Refrensi</label>
                                <div class="col-sm-8">
                                <textarea style="height:65px;" id="ket_pengirim"  class="form-control" name ="ket_pengirim" value="" required></textarea>

                                </div>
                      </div>
                      <div class="row col-md-12 mb-3">
                                <label for="attach" class="col-sm-2 col-form-label">Attach Refrensi</label>
                                <!-- <div class="col-sm-8 mt-0">
                                <label style="cursor:pointer"  for="attach_bp"><i class="fa-solid fa-file-arrow-up fa-2x"></i>
                                  <input class="col-md-1" id="attach_bp"  type="file" multiple>
                                </label>
                                </div> -->
                                <div id="tampil_attach_bp" class="row mt-0"></div>
                        </div>
                   <div class =" row col-md-12 mb-3">
                      <label for="tanggal" class="col-sm-2 col-form-label" >Tgl/Jam Email</label>
                        <div class = "col-md-3">
                            <input type="text" class="form-control" name ="tanggal" id="tanggal" value="" required>
                        </div>
                        <div class = "col-md-2">
                            <input type="text" class="form-control" name ="jam" id="jam" value="" required>
                        </div>
                    </div>
                    <div class="row col-md-12 mb-3">
                                <label for="from_email" class="col-sm-2 col-form-label">Pengirim Email</label>
                                <div class="col-sm-6">
                                <input  class="form-control" name ="from_email" id="from_email" value="" required></input>
                                </div>
                    </div>
                    <div class="row col-md-12 mb-3">
                                <label for="jenis_eo" class="col-sm-2 col-form-label">Jenis EO</label>
                               <div id="jenis_eo"class="col-sm-6"></div>

                      </div>
                     
                   
                  <div class ="row col-md-12 mb-2">
                        <label for="direksi" class="col-sm-2 col-form-label" >Divisi</label>
                                <div id="divisi" class ="col-md-6"></div>
                  </div>
                   
                  
              </div>
          
          <div class= "col-md-6">
                        <div class="row col-md-12 mb-3">
                                <label for="to_email" class="col-sm-2 col-form-label">To</label>
                                <div class="col-sm-8">
                                <textarea style="height:100px;"  class="form-control" name ="to_email" id="to_email" value="" required></textarea>
                                </div>
                        </div>
                        <div class="row col-md-12 mb-3">
                                <label for="cc_email" class="col-sm-2 col-form-label">Cc</label>
                                <div class="col-sm-8">
                                <textarea style="height:100px;"  class="form-control" name ="cc_email" id="cc_email" value="" required></textarea>
                                </div>
                        </div>
                        <div class="row col-md-12 mb-4">
                                <label for="catatan" class="col-sm-2 col-form-label">Catatan</label>
                                <div class="col-sm-8">
                                <textarea style="height:100px;" class="form-control" name ="catatan" id="catatan" value="" required></textarea>
                                </div>
                        </div>
                        <div class="row col-md-12 mb-3">
                                <label for="attach" class="col-sm-2 col-form-label">Attach File</label>
                                <!-- <div class="col-sm-8 mt-0">
                                <label style="cursor:pointer"  for="attach"><i class="fa-solid fa-file-arrow-up fa-2x"></i>
                                <input class="col-md-1" id="attach"  type="file" multiple></input>
                              </label>
                                </div> -->
                                <div id="tampil_attach" class="row mt-0"></div>
                        </div>
                        <div class="row col-md-12 mb-3 ">
                                <label for="attach2" class="col-sm-2 col-form-label">Body Email</label>
                                <!-- <div class="col-sm-8 mt-0">
                                  <label style="cursor:pointer"  for="attach2"><i class="fa-solid fa-file-arrow-up fa-2x"></i>
                                  <input class="col-md-1" id="attach2" type="file" multiple>
                                </label>  
                                  
                                </div> -->
                                <div id="tampil_attach_2" class="row mt-0"></div>
                              
                        </div>
                      <div class="row col-md-12">
                                <label for="image_toko" class="col-sm-2 col-form-label">Foto</label>
                            <div class=" col-md-12 row mb-3">
                              <div class="col-md-3">
                                  <div class="col-md-8 row">
                                    <div class="col-md-1">  
                                    <input alt="" id="toko_upload1" type="file"  class="form-control border-0">
                                    </div>
                                    <div class="col-md-7">  
                                    <!-- <label style="cursor:pointer" id="upload-label1" for="toko_upload1" class="font-weight-light text-muted">Upload</label> -->
                                    <img id="tokoImage1" src="#" class="box md-3"> 
                                    <p style="cursor:pointer" id="delete_image1"class="mt-3"><i class="fa-regular fa-trash-can xl text-danger"></i></p>   
                                    </div> 
                                    
                                  </div>
                              </div>
                              <div class="col-md-3">
                              <div class="col-md-8 row">
                                <div class="col-md-1">  
                                <input alt="" id="toko_upload2" type="file"  class="form-control border-0">
                                </div>
                                <div class="col-md-7">  
                                <!-- <label style="cursor:pointer" id="upload-label1" for="toko_upload2" class="font-weight-light text-muted">Upload</label> -->
                                <img id="tokoImage2" src="#" class="box2" >    
                                <p style="cursor:pointer" id="delete_image2"class="mt-3"><i class="fa-regular fa-trash-can xl text-danger"></i></p>   
                              </div>                            
                              </div>
                              </div>
                              <div class="col-md-3">
                              <div class="col-md-8 row">
                                <div class="col-md-1">  
                                <input alt="" id="toko_upload3" type="file"  class="form-control border-0">
                                </div>
                                <div class="col-md-7">  
                                <!-- <label style="cursor:pointer" id="upload-label1" for="toko_upload3" class="font-weight-light text-muted">Upload</label> -->
                                <img id="tokoImage3" src="#" class="box3" > 
                                  <p style="cursor:pointer" id="delete_image3"class="mt-3">
                                  <i class="fa-regular fa-trash-can xl text-danger"></i></p>   
                                </div>                            
                              </div>
                              </div>
                              <div class="col-md-3">
                              <div class="col-md-8 row">
                                <div class="col-md-1">  
                                <input alt="" id="toko_upload4" type="file"  class="form-control border-0">
                                </div>
                                <div class="col-md-7">  
                                <!-- <label style="cursor:pointer" id="upload-label1" for="toko_upload4" class="font-weight-light text-muted">Upload</label> -->
                                <img id="tokoImage4" src="#" class="box4" >
                                  <p style="cursor:pointer" id="delete_image4"class="mt-3">
                                  <i class="fa-regular fa-trash-can xl text-danger"></i></p>                                 </div>                            
                              </div>
                              </div>
                              
                            </div>
                            
                      </div>
    
                      
          </div>

        </div>
    
                            </div>
                            <div class="col-sm-11 d-flex justify-content-end">
                                    <button type="button" class="btn btn-secondary me-1 mb-3" onclick="goBack();">CLose</button>
                                  </div>
          </form>
      </div>
    </div>
  </div>



<!-- modal data email  -->
<!-- Button trigger modal -->


<!-- Modal -->

<!-- end modal  -->
<script>
$(document).ready(function(){
  let id_get  ='<?=$_POST['id_eo']?>';
    get_data_divisi();
    get_data_jenis();
    $("#delete_image1").hide();
    $("#delete_image2").hide();
    $("#delete_image3").hide();
    $("#delete_image4").hide();
  getdata_excutive(id_get);








//untuk tambah document atter 

  $("#attach").on('change',function(){    
    let at = $('#attach').prop('files');
    let id_eo = $('#id_eo').val();
    let atter = "AF";
    let id_appen ="#tampil_attach";
    post_dataAtter(at,id_eo,atter,id_appen);
  });

  $(document).on("click",".delete_span",function(){
    $(this).parents('span').remove();
  });


//  $("#attach2").on('change',function(){    
//   let at = $('#attach2').prop('files');
//     let id_eo = $('#id_eo').val();
//     let atter = "BF";
//     let id_appen ="#tampil_attach_2";
//     post_dataAtter(at,id_eo,atter,id_appen);
//   });

//   $("#attach_bp").on('change',function(){    
//   let at = $('#attach_bp').prop('files');
//     let id_eo = $('#id_eo').val();
//     let atter = "BP";
//     let id_appen ="#tampil_attach_bp";
//     post_dataAtter(at,id_eo,atter,id_appen);
//   });
// //end tambah document atter
//   //delete image 
// $("#delete_image1").on("click",function(){
//     let img =$("#tokoImage1").attr('src');
//     let newUrl ='';
//     let gambar1 = $("#tokoImage1");
//     gambar1.attr('src',newUrl);
//     $("#delete_image1").hide();
// });
// $("#delete_image2").on("click",function(){
//     let img =$("#tokoImage2").attr('src');
//     let newUrl ='';
//     let gambar2 = $("#tokoImage2");
//     gambar2.attr('src',newUrl);
//     $("#delete_image2").hide();

// });
// $("#delete_image3").on("click",function(){
//     let img =$("#tokoImage3").attr('src');
//     let newUrl ='';
//     let gambar3 = $("#tokoImage3");
//     gambar3.attr('src',newUrl);
//     $("#delete_image3").hide();

// });
// $("#delete_image4").on("click",function(){
//     let img =$("#tokoImage4").attr('src');
//     let newUrl ='';
//     let gambar4 = $("#tokoImage4");
//     gambar4.attr('src',newUrl);
//     $("#delete_image4").hide();
// });
//   //end delete image
//     // upload gambar
//   $('#toko_upload1').on('change', function () {
//     $("#delete_image1").show();
//         let id = '#tokoImage1';
//         readURL(this,id);
//   });
//   $('#toko_upload2').on('change', function () {
//     $("#delete_image2").show();
//         let id = '#tokoImage2';
//         readURL(this,id);
//   });
//   $('#toko_upload3').on('change', function () {
//     $("#delete_image3").show();
//         let id = '#tokoImage3';
//         readURL(this,id);
//   });
//   $('#toko_upload4').on('change', function () {
//     $("#delete_image4").show();
//         let id = '#tokoImage4';
//         readURL(this,id);
//   });




  });
// untuk kirim data atter_ketabel  by wardi 2023
function post_dataAtter(at,id_eo,atter,id_appen){
  if(id_eo !== ''){
      let formData = new FormData();
      for (var i = 0; i < at.length; i++) {
        formData.append('files[]', at[i]);
        formData.append('id_eo',id_eo);
        formData.append('atter',atter);
      }

      $.ajax({
        url:'models/document_atter/tambahdata.php',
        method:'POST',
        data: formData,
        cache: false,
        processData: false,
        contentType: false,
        dataType:'json',
        beforeSend :function(){  
            Swal.fire({
              title: 'Sedang simpan Document...',
              html: 'Please wait...',
              allowEscapeKey: false,
              allowOutsideClick: false,
              didOpen: () => {
                Swal.showLoading()
            }
              });
          },
        success:function(result){ 
          let nilai = result.nilai;
          let status = result.error;
          let  n_file = result.nama_file
          if(nilai !== 0){
            Swal.fire({
                  position: 'top-center',
                icon: 'success',
                title: status,
                }).then(
              $.each(at,function(a,b){
                let url ="/executive/public/uploads_doc/"+n_file;
                  $(id_appen).append(`<span>
                  <a href="${url}" target="_blank">${b['name']} </a>&nbsp;&nbsp;&nbsp;
                  <a style="cursor:pointer" onclick="close_attr('${n_file}','${id_eo}','${atter}');" class="delete_span col-md-2 text-danger">X</a></span>
                  `)
                })
                ); 
          }else{
            Swal.fire({
                  position: 'top-center',
                icon: 'success',
                title: status,
                });
          }
               


        }
      })
    }else{
      Swal.fire({
        position: 'top-center',
          icon: 'success',
            title: "ID EO harus di isi",
                      
      });  
    }
}
//end  kirim data atter_ketabel
//untuk hapus data atter 
  function close_attr(nama_file,id_eo,atter){
    $.ajax({
      url:'models/document_atter/deletedata.php',
      method :'POST',
      data : {nama_file:nama_file,id_eo:id_eo,atter},
      dataType:'json',
      success:function(result){
      } 
    });
 
  };
  $( function() {
        $( "#tanggal" ).datepicker(
            {dateFormat : 'dd/mm/yy',
              changeMonth : true,
              changeYear : true
            }
        );
   
  });

  function myformat(date){
    let d = date.split('/')[0];
    let m = date.split('/')[1];
    let y = date.split('/')[2];
    let format = y + "-" + m + "-" + d;
   
    return format;
  }


  function readURL(input,id){
    let file = input.files[0];
    if(file){
            var reader = new FileReader();
 
            reader.onload = function(){
                $(id).attr("src",reader.result);
            }
            reader.readAsDataURL(file);
        }
}
// untu data excutive edit
function getdata_excutive(id_eo){
  $("#formtview input").prop("disabled", true)
  $("#formtview textarea").prop("disabled", true)
  $('.checkjenis').prop("disabled",true);
  $.ajax({
    url:'models/new/data_edit.php',
    method:'POST',
    data:{id_eo:id_eo},
    dataType:'json',
    cache: false,
    success:function(result){
      $.each(result,function(key,val){
         
          let sub = val.subject;
          let id_eo = val.id_eo;
          let importance = val.importance;
          let pencetus = val.pencetus;
          let ket_pengirim = val.ket_pengirim;
          let tanggal = val.tanggal;
          let jam = val.jam;
          let jenis_eo = val.jenis_eo;
          let divisi = val.divisi;
          let to_email = val.to_email;
          let from_email = val.from_email;
          let cc_email = val.cc_email;
          let catatan = val.catatan;

          let image1 = val.image1;
          let image2 = val.image2;
          let image3 = val.image3;
          let image4 = val.image4;

          

          $("#subject").val(sub);
          $("#id_eo").val(id_eo);
          $("#importance").val(importance);
          $("#pencetus").val(pencetus);
          $("#ket_pengirim").val(ket_pengirim);
          $("#tanggal").val(tanggal);
          $("#jam").val(jam);
          $("#from_email").val(from_email)
          $("#to_email").val(to_email);
          $("#cc_email").val(cc_email);
          $("#catatan").val(catatan);
        
         
        if(jenis_eo !== ''){
          let id_jenis ="#"+jenis_eo+"_2J";
          $(id_jenis).attr("checked",'checked');
        }

        if(divisi !== ''){
          let id_div ="#"+divisi+"_2D";
          $(id_div).attr("checked",'checked');
        }

        $("#tokoImage1").attr("src","uploads_img/"+image1);
        $("#tokoImage2").attr("src","uploads_img/"+image2);
        $("#tokoImage3").attr("src","uploads_img/"+image3);
        $("#tokoImage4").attr("src","uploads_img/"+image4);

        let data_bp = val.attach_bp;

        $.each(data_bp,function(a,b){
          let nama_doc = b.nama_document;
          let atter = "BP";
          let url ="/executive/public/uploads_doc/"+nama_doc;
                  $("#tampil_attach_bp").append(`<span>
                  <a href="${url}" target="_blank">${nama_doc} </a>&nbsp;&nbsp;&nbsp;
            `)
        });

         let data_af = val.attach_af;
          $.each(data_af,function(a,b){
            let nama_doc = b.nama_document;
            let atter = "AF";
            let url ="/executive/public/uploads_doc/"+nama_doc;
                    $("#tampil_attach").append(`<span>
                    <a href="${url}" target="_blank">${nama_doc} </a>&nbsp;&nbsp;&nbsp;
              `)
          });
       
          let data_bf = val.attach_bf;
          $.each(data_bf,function(a,b){
            let nama_doc = b.nama_document;
            let atter = "BF";
            let url ="/executive/public/uploads_doc/"+nama_doc;
                    $("#tampil_attach_2").append(`<span>
                    <a href="${url}" target="_blank">${nama_doc} </a>&nbsp;&nbsp;&nbsp;
              `)
          });
      })
    }
  })



}

// UNTUK MENAMILKAN DATA DIVISI
function get_data_divisi(){
    $.ajax({
            url:'models/master_divisi/tampildata.php',
            method:'POST',
            dataType:'json',      
            success:function(response){
                  let data =``;
                  let datas =``;
                  // chexbox divisi
                $.each(response,function(key,value){
                  let divisi = value.nama_divisi;
                  let id_div = value.nama_divisi +"_2D";
                  data +=`
                  <div  class="form-check form-check-inline col-md-5">
                                  <input disabled class="form-check-input checkdivisi" for ="${divisi}" type="radio" id="${id_div}" name="divisi" value="${divisi}" required>
                                  <label class="form-check-label" for ="${divisi}" >${divisi}</label>
                      </div>
                  `;

                });
                $("#divisi").empty().html(data); 
                //end chex box divisi
      
            }

          });

   
}
//END DATA DIVISI                                   

// UNTUK MENAMILKAN DATA jenis
function get_data_jenis(){

  $.ajax({
        url:'models/master_jenis_eo/tampildata.php',
        method:'POST',
        dataType:'json',      
        success:function(response){
              let datas_js =``;
            $.each(response,function(key,value){
              let jenis = value.nama_jenis_eo;
              let id_js = value.nama_jenis_eo +"_2J";
              datas_js +=`
                          <div class="form-check form-check-inline col-md-5">
                                          <input disabled  class="form-check-input checkjenis" for ="${jenis}" type="radio" id="${id_js}"name="jenis_eo" value="${jenis}" required>
                                          <label class="form-check-label" for ="${jenis}" >${jenis}</label>
                              </div>
                            
                     
                  `;
              
            });
            $("#jenis_eo").empty().html(datas_js);  
        
      }

      });
}
//END DATA jenis

// untuk kembali ke halaman sebelumnya
function goBack(){
  $("#tabelhead").show();
  $("#file_edit").hide();
  window.location.href="index.php?page=list_posting";
}
</script>