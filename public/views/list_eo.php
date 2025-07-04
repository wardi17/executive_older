<div id="main">
    <?php include 'views/pages/burger.php' ?> 

    <div id="tabelhead"></div>
    <div id="file_edit"></div>
</div>
<script>
$(document).ready(function(){
    const dateya = new Date();
    let bulan = dateya.getMonth()+1;
    let tahun = dateya.getFullYear();
    let status = "All";

    get_dataEO(tahun,bulan,status);
});
//bata document ready

function get_dataEO(tahun,bulan,status){

    get_tables(tahun);
    let dataTable =``;
    let image1 ='';
    let image2 ='';
    let image3 ='';
    let image4 ='';
    let id_kunjungan = '';
    let myData ={};
    let data ={};
    $.ajax({
            url:'models/new/tampildata.php',
            method:'POST',
            data:{tahun:tahun,bulan:bulan,status:status},
            dataType:'json',      
            success:function(result){
                datatabel(result);
                
            }
    });      

};  


function datatabel(result){
  $("#tabel1").DataTable({
                    "ordering": false,
                    "destroy":true,
                    bAutoWidth: false, 
                    "order":[[0,'desc']],
                    
                        data: result,
                        'rowCallback': function(row, data, index){
                            let posting = data.posting;
                         
                                if(posting == 0){
                                  $(row).find('.postingdata').css('background-color', '#F79327');
                                  $(row).find('.postingdata').css('color', '#FFFF');

                                  $(row).find('.editdata').css('background-color', '#448dee');
                                  $(row).find('.editdata').css('color', '#FFFF');

                                  $(row).find('.viewdata').css('background-color', '#448dee');
                                  $(row).find('.viewdata').css('color', '#FFFF');
                                }

                            
                                
     
                            },
                        pageLength: 5,
                        lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 'All']],
                        // "columnDefs": [
                        //   { "width": "3%", "targets": 2 },
                        //   { "width": "20%", "targets": 7 }
                        //   ],

                            columns: [
                              { 'data': 'subject' },
                              { 'data': 'id_eo' },
                              { 'data': 'importance' },
                              { 'data': 'pencetus' },
                              {'data': 'from_email'},
                              {"render": function(data,type,row){
                                  let tgl = row.tanggal;
                                  let jam = row.jam;
                                  let date = tgl+"&ensp;&ensp;"+jam;
                                  return date;
                              }},
                                {
                                  "render": function (data, type,row) { 
                                    let user_id = row.user_id;
                                    let user_log = row.userlogin;
                                  // Tampilkan kolom aksi
                                
                                    let html  =`<button type="button"   data-id_eo ="${row.id_eo}" style="width:100px" class=" postingdata btn btn-sm text-center mb-2 ">Posting</button>`;
                                        if(user_id == user_log){
                                            html  +=`<button type="button"  data-id_eo ="${row.id_eo}" style="width:100px" class="editdata btn btn-sm text-center  mb-2 ">Edit</button>`;
                                            }else{
                                             html  +=`<button type="button"  data-id_eo ="${row.id_eo}" style="width:100px" class="viewdata btn btn-sm text-center mb-2">View</button>`;    
                                            }
                                     return html;
                                 }
                                },
                            
                            ]      
                
              });
}
//untuk posting data 

$(document).on("click",".postingdata",function(){
    let id_eo = $(this).data('id_eo');
  
        $.ajax({
        url:'models/new/posting.php',
            method:'POST',
            data:{id_eo:id_eo},
            dataType:'json',      
            success:function(result){
                let status = result.error;
                  Swal.fire({
                    position: 'top-center',
                  icon: 'success',
                  title: status,
                
                  }).then(
                    location.reload()
                  ); 
            }
    })
})

$(document).on("click",".editdata",function(e){
    e.preventDefault()
    let id_eo = $(this).data('id_eo');
    $("#file_edit").show();
    $("#tabelhead").hide();
   $("#file_edit").load('views/edit_eo.php?',{id_eo:id_eo});
 
});

$(document).on("click",".viewdata",function(e){
    e.preventDefault()
    let id_eo = $(this).data('id_eo');
  
    $("#file_edit").show();
    $("#tabelhead").hide();
    $("#file_edit").load('views/view_eo.php?',{id_eo:id_eo});
 
});

//untuk tabel head 
function get_tables(tahun){
          let dataTable =`
          <section class="section">
                  <div class="card">
                  <div class="card-header"></div>
                  <div  class="page-heading mb-3">
                      <div class="page-title">
                      <h5 class="text-center">List Executive Order </h5>
                      </div></div>
                      <div class="card-body">
                      <table id="tabel1" class="display table-info">                    
                                      <thead  id='thead'class ='thead'>
                                      <tr>      
                                                 <th style="width:50%">Subject Email</th>
                                                 <th style="width:8%">Id</th>
                                                 <th>Prioritas</th>
                                                 <th>Pencetus</th>
                                                 <th>Pengirim</th>
                                                 <th style="width:15%">Tanggal</th>
                                                  <th style="width:8%">Action</th>       
                                      </tr>
                                      </thead>
                                      <tbody>
                                      </tbody>
                                  </table><br>
                                  </div>
                              </div>
                          </section>

          `;
      $("#tabelhead").empty().html(dataTable);
  };


</script>