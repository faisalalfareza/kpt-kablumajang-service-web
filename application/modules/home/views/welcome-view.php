<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>KPT Kab. Lumajang</title>
        <link rel="shortcut icon" href="<?=base_img()."speech-bubble.png"?>">
        <link href="<?=base_css()."bootstrap.min.css"?>" rel="stylesheet" type="text/css" />
        <link href="<?=base_css()."font-awesome.min.css"?>" rel="stylesheet" type="text/css" /> 
        <link href="<?=base_css()."home.css"?>" rel="stylesheet" type="text/css"/>
        <link href="<?=base_css()."ripples.min.css"?>" rel="stylesheet" type="text/css"/>
        <link href="<?=base_css()."snackbar.min.css"?>" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <img src="<?=base_img()."kpt.png"?>" width="100px">
                <div class="title m-b-md">
                    <b>KANTOR</b> PELAYANAN TERPADU ( KPT )     
                </div>
                <div class="sub-title m-b-md">
                    <strong>KABUPATEN LUMAJANG</strong>   
                </div>

                <div class="links">
                    <a href="#tentang" data-backdrop="false" data-toggle="modal">Tentang Kami</a>
                    <a class="btn btn-info" href="#mekanisme-pelayanan" data-backdrop="false" data-toggle="modal">Mekanisme Pelayanan</a>
                    <a class="btn btn-primary" href="#pelayanan" data-backdrop="false" data-toggle="modal">Dapatkan Layanan</a>
                </div>
            </div>
        </div>

        <script src="<?=base_js()."jquery.min.js"?>"></script>
        <script src="<?=base_js()."bootstrap.min.js"?>"></script>
        <script src="<?=base_js()."material.min.js"?>"></script>
        <script src="<?=base_js()."snackbar.min.js"?>"></script>
        <script src="<?=base_js()."ripples.min.js"?>"></script>
        <script src="<?=base_js()."jquery-ui.min.js"?>"></script>
        <script src="<?=base_js()."paging-data.js"?>"></script>
        <script>
        $(function(){
          $.material.init();
          $('.modal-dialog').draggable(); 
          $('.group-list').pageMe({pagerSelector:'#paging',showPrevNext:true,hidePageNumbers:false,perPage:8});
          document.getElementById("caption-visi-misi").innerHTML = 'Visi, Misi, Moto dan Janji Layanan';  

          $(".detail-layanan").click(function(){
            var id = $(this).attr("data-id");
            $("#detailId").attr("value", id);
            var layanan = $(this).attr("data-layanan");
            $("#detailLayanan").attr("value", layanan); 

            var namaLayanan = $(this).attr("data-layanan");
            $("th#title").html(namaLayanan); 
            var dasarHukum = $(this).attr("data-dasarhukum");
            $("td#dasarhukum").html(dasarHukum);
            var persyaratan = $(this).attr("data-persyaratan");
            $("td#persyaratan").html(persyaratan);
            var jangkawaktu = $(this).attr("data-jangkawaktu");
            $("td#jangkawaktu").html(jangkawaktu); 
            var tarif = $(this).attr("data-tarif");
            tarif == 'Terlampir' ? $("td#tarif").html('<button onclick="tarifTerlampir()" class="btn" style="cursor:pointer;border:0;outline:0;background-color:#ecf0f1;font-weight:bold;">'+tarif+'</button>') : $("td#tarif").html(tarif);
            var berlaku = $(this).attr("data-berlaku");
            $("td#berlaku").html(berlaku);

            $(".portlet .portlet-body.janji-layanan").hide();
            $(".portlet .portlet-body.layanan").hide();
            $(".portlet .portlet-body.detail").show();   
            document.getElementById("caption-layanan").innerHTML = 'Detail Layanan ';     
          }); 

          /* Start : Tentang Kami */
          $(".to-maksud-tujuan").click(function(){              
            $(".portlet .portlet-body.visi-misi").hide();  
            $(".portlet .portlet-body.tugas-fungsi").hide();
            $(".portlet .portlet-body.maksud-tujuan").show();  
            $("#sizing-tentang").attr("class", "modal-dialog modal-lg");
            document.getElementById("caption-visi-misi").innerHTML = 'Maksud & Tujuan';                  
          });   
          $(".to-tugas-fungsi").click(function(){              
            $(".portlet .portlet-body.visi-misi").hide();  
            $(".portlet .portlet-body.maksud-tujuan").hide();
            $(".portlet .portlet-body.tugas-fungsi").show();
            $("#sizing-tentang").attr("class", "modal-dialog");  
            document.getElementById("caption-visi-misi").innerHTML = 'Tugas & Fungsi';                  
          });              
          $(".to-visi-misi").click(function(){   
            $(".portlet .portlet-body.maksud-tujuan").hide();  
            $(".portlet .portlet-body.tugas-fungsi").hide();                      
            $(".portlet .portlet-body.visi-misi").show();   
            $("#sizing-tentang").attr("class", "modal-dialog modal-lg"); 
            document.getElementById("caption-visi-misi").innerHTML = 'Visi, Misi, Moto dan Janji Layanan';                 
          }); 
          $(".end-visi-misi").click(function(){   
            $(".portlet .portlet-body.maksud-tujuan").hide(); 
            $(".portlet .portlet-body.tugas-fungsi").hide();                       
            $(".portlet .portlet-body.visi-misi").show();
            $("#sizing-tentang").attr("class", "modal-dialog modal-lg");
            document.getElementById("caption-visi-misi").innerHTML = 'Visi, Misi, Moto dan Janji Layanan';                                   
          }); 
          /* End : Tentang Kami */

          /* Start : Mekanisme Pelayanan */
          $(".to-alur").click(function(){   
            $(".portlet .portlet-body.step-mekanisme").hide();                        
            $(".portlet .portlet-body.alur-mekanisme").show();  
            document.getElementById("caption-mekanisme").innerHTML = 'Alur Pelayanan';                   
          }); 
          $(".to-step").click(function(){                          
            $(".portlet .portlet-body.alur-mekanisme").hide();
            $(".portlet .portlet-body.step-mekanisme").show();
            document.getElementById("caption-mekanisme").innerHTML = 'Mekanisme Pelayanan';                                    
          });             
          $(".end-mekanisme").click(function(){   
            $(".portlet .portlet-body.alur-mekanisme").hide();
            $(".portlet .portlet-body.step-mekanisme").show(); 
            document.getElementById("caption-mekanisme").innerHTML = 'Mekanisme Pelayanan';                       
          }); 
          /* End : Mekanisme Pelayanan */

          /* Start : Layanan Kami */
          $(".daftar-layanan").click(function(){              
            $(".portlet .portlet-body.detail").hide(); 
            $(".portlet .portlet-body.janji-layanan").hide(); 
            $(".portlet .portlet-body.layanan-pengaduan").hide(); 
            $(".portlet .portlet-body.tarif-terlampir").hide();
            $(".portlet .portlet-body.layanan").show(); 
            $("#sizing-layanan").attr("class", "modal-dialog modal-lg");
            document.getElementById("caption-layanan").innerHTML = 'Dapatkan Layanan Kami';                   
          });          
          $(".to-janji-layanan").click(function(){              
            $(".portlet .portlet-body.detail").hide();   
            $(".portlet .portlet-body.layanan").hide(); 
            $(".portlet .portlet-body.layanan-pengaduan").hide();
            $(".portlet .portlet-body.tarif-terlampir").hide();
            $(".portlet .portlet-body.janji-layanan").show();
            $("#sizing-layanan").attr("class", "modal-dialog");
            document.getElementById("caption-layanan").innerHTML = 'Janji Layanan';                   
          }); 
          $(".to-pengaduan").click(function(){              
            $(".portlet .portlet-body.detail").hide();   
            $(".portlet .portlet-body.layanan").hide(); 
            $(".portlet .portlet-body.janji-layanan").hide();
            $(".portlet .portlet-body.tarif-terlampir").hide();
            $(".portlet .portlet-body.layanan-pengaduan").show();
            $("#sizing-layanan").attr("class", "modal-dialog");
            document.getElementById("caption-layanan").innerHTML = 'Layanan Pengaduan';                   
          });                      
          $(".end-layanan").click(function(){              
            $(".portlet .portlet-body.detail").hide();  
            $(".portlet .portlet-body.janji-layanan").hide(); 
            $(".portlet .portlet-body.layanan-pengaduan").hide();
            $(".portlet .portlet-body.tarif-terlampir").hide();
            $(".portlet .portlet-body.layanan").show(); 
            $("#sizing-layanan").attr("class", "modal-dialog modal-lg");
            document.getElementById("caption-layanan").innerHTML = 'Dapatkan Layanan Kami';                   
          });     
          /* End : Layanan Kami */
                                                            
        });    

        function tarifTerlampir(){              
          $(".portlet .portlet-body.detail").hide();   
          $(".portlet .portlet-body.layanan").hide(); 
          $(".portlet .portlet-body.layanan-pengaduan").hide();
          $(".portlet .portlet-body.janji-layanan").hide();
          $(".portlet .portlet-body.tarif-terlampir").show();
          $("#sizing-layanan").attr("class", "modal-dialog modal-lg");
          document.getElementById("caption-layanan").innerHTML = 'Tarif Terlampir';                   
        }                 
        </script>        

    </body>

    <!--Tentang Kami-->
    <div class="modal fade" id="tentang" role="dialog">
        <div id="sizing-tentang" class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- BEGIN Portlet PORTLET-->
                <div class="portlet portlet-bordered">
                    <div class="portlet-container">
                        <div class="next">
                          <button class="btn btn-primary btn-raised end-visi-misi" data-dismiss="modal"><i class="fa fa-arrow-circle-left"></i></button>
                        </div> 

                        <div class="portlet-title">
                            <div class="caption caption-red">
                                <img src="<?=base_img()."group.png"?>" class="icon-form">
                                <span id="caption-visi-misi" class="caption-subject"></span>
                                <span class="caption-helper"> Kantor Pelayanan Terpadu </span>
                            </div>
                        </div>
                        <div id="msgOne"></div>
                        <div class="portlet-body visi-misi" style="font-weight: 700">
                            <div class="col-sm-6">
                                <h2>Visi</h2>     
                                <p>Visi adalah cita-cita atau sudut pandang pola pikir sebuah organisasi yang ingin dicapai dimasa depan untuk menjamin kelestarian dan kesuksesan jangka panjang. Visi Kantor Pelayanan Terpadu Kabupaten Lumajang dirumuskan sebagai berikut :</p>
                                <blockquote>"Unggul Dalam Kualitas Pelayanan"</blockquote>                                                        
                                <h2>Moto</h2>     
                                <p>Motto adalah kalimat, frasa, atau kata sebagai semboyan atau pedoman yang menggambarkan motivasi, semangat, dan tujuan dari suatu organisasi. Motto Kantor Pelayanan Terpadu Kabupaten Lumajang</p>
                                <div class="list-group">
                                    <div class="waiting-list">
                                      <div class="list-group-item">
                                          <div class="pull-left form-control-inline">
                                              <p class="list-group-item-text sub-title time">
                                              Meningkatkan kualitas pelayanan perizinan</p>     
                                          </div>
                                          <div class="clearfix"></div>
                                      </div>
                                      <div class="list-group-item">                             
                                          <div class="pull-left form-control-inline">
                                              <p class="list-group-item-text sub-title time">
                                              Meningkatkan partisipasi masyarakat dalam pembangunan</p>     
                                          </div>
                                          <div class="clearfix"></div>
                                      </div>
                                      <div class="list-group-item">
                                          <div class="pull-left form-control-inline">
                                              <p class="list-group-item-text sub-title time">
                                              Meningkatkan citra aparatur pemerintah dalam memberikan pelayanan</p>     
                                          </div>
                                          <div class="clearfix"></div>
                                      </div>
                                    </div>
                                </div>                                
                            </div> 
                            <div class="col-sm-6">                           
                                <h2>Misi</h2>     
                                <p>Misi adalah pernyataan tentang apa yang harus dikerjakan oleh organisasi dalam usahanya mewujudkan visi. Misi merupakan sesuatu yang nyata untuk dituju serta dapat memberikan petunjuk garis besar cara pencapaian visi. Misi Kantor Pelayanan Terpadu Kabupaten Lumajang dirumuskan sebagai berikut :</p>
                                <div class="list-group">
                                  <div class="list-group-item">
                                      <div class="pull-left form-control-inline">
                                          <p class="list-group-item-text sub-title time">
                                          Meningkatkan kualitas pelayanan perizinan</p>     
                                      </div>
                                      <div class="clearfix"></div>
                                  </div>
                                  <div class="list-group-item">                             
                                      <div class="pull-left form-control-inline">
                                          <p class="list-group-item-text sub-title time">
                                          Meningkatkan partisipasi masyarakat dalam pembangunan</p>     
                                      </div>
                                      <div class="clearfix"></div>
                                  </div>
                                  <div class="list-group-item">
                                      <div class="pull-left form-control-inline">
                                          <p class="list-group-item-text sub-title time">
                                          Meningkatkan citra aparatur pemerintah dalam memberikan pelayanan</p>     
                                      </div>
                                      <div class="clearfix"></div>
                                  </div>
                                  <div class="list-group-item">
                                      <div class="pull-left form-control-inline">
                                          <p class="list-group-item-text sub-title time">
                                          Meningkatkan kemampuan dan profesional SDM di bidang pelayanan</p>     
                                      </div>
                                      <div class="clearfix"></div>
                                  </div>
                                </div>

                                <div class="action_btns">                           
                                    <div class="one_half"><button type="button" class="btn to-maksud-tujuan" style="font-weight:bold">Maksud, Tujuan ?</button></div>  
                                  <div class="one_half last"><button type="button" class="btn to-tugas-fungsi" style="font-weight:bold">Tugas dan fungsi kami ?</button></div>  
                                </div>  
                            </div>
                            <div class="action_btns"></div>
                        </div>
                        <div class="portlet-body maksud-tujuan" style="font-weight: 700">
                            <div class="col-sm-6">
                                <h2>Maksud</h2>
                                <p>Maksud dibentuk Kantor Pelayanan Terpadu Kabupaten Lumajang adalah untuk <b>menyelenggarakan pelayanan perizinan kepada masyarakat yang prima</b>, sebagaimana tertuang dalam Keputusan Menteri Pendayagunaan Aparatur Negara Nomor 63 Tahun 2003 yaitu kesederhanaan, kejelasan, kepastian waktu, akurasi, keamanan, tanggung jawab, kelengkapan sarana dan prasarana, kemudahan akses, kedisiplinan, kesopanan, keramahan dan kenyamanan sehingga hal tersebut dapat mendorong terciptanya iklim usaha yang kondusif bagi investasi dalam rangka  memberdayakan ekonomi masyarakat Lumajang.</p>
                            </div>
                            <div class="col-sm-6">
                                <h2>Tujuan</h2>
                                <p>Secara umum tujunan Pelayanan Prima adalah adalah <b>kepuasan dan pemenuhi kebutuhan pelanggan</b>. Untuk mencapai tujuan tersebut diperlukan kualitas pelayanan yang sesuai dengan Indeks Kepuasan Masyarakat dan Standar Pelayanan Prima. Selain itu pada tujuan dibentukan Kantor Pelayanan Terpadu adalah :</p>
                                <div class="list-group">
                                    <div class="waiting-list">
                                      <div class="list-group-item">
                                          <div class="pull-left form-control-inline">
                                              <p class="list-group-item-text sub-title time">
                                              Menyederhanakan sistem dalam pelayanan</p>     
                                          </div>
                                          <div class="clearfix"></div>
                                      </div>
                                      <div class="list-group-item">                             
                                          <div class="pull-left form-control-inline">
                                              <p class="list-group-item-text sub-title time">
                                              Meningkatkan efisiensi dan efektivitas kinerja aparatur</p>     
                                          </div>
                                          <div class="clearfix"></div>
                                      </div>
                                      <div class="list-group-item">
                                          <div class="pull-left form-control-inline">
                                              <p class="list-group-item-text sub-title time">
                                              Mewujudkan pelayanan prima</p>     
                                          </div>
                                          <div class="clearfix"></div>
                                      </div>
                                    </div>
                                </div>                                

                                <div class="action_btns">                      
                                    <div class="col-sm-6"></div>
                                    <div class="one_half col-sm-6"><button type="button" class="btn to-visi-misi" style="font-weight:bold"><i class="fa fa-arrow-left"></i> &nbsp; Kembali ke visi misi</button></div>   
                                </div>                                  
                            </div>
                            <div class="action_btns"></div>
                        </div>
                        <div class="portlet-body tugas-fungsi" style="font-weight: 700">
                            <div class="col-sm-12">
                                <h2>Tugas</h2>
                                <p>Kantor Pelayanan Terpadu mempunyai tugas melaksanakan penyusunan dan pelaksanaan di bidang pelayanan perizinan</p>

                                <h3>Untuk melaksanakan tugas tersebut KPT mempunyai fungsi untuk :</h3>
                                  <blockquote>
                                    <ul class="layanan" style="font-weight: 700">
                                      <li>Perumusan kebijakan teknis di bidang pelayanan perizinan</li>
                                      <li>Pemberian dukungan atas penyelenggaraan pemerintahan daerah di bidang pelayanan perizinan</li>
                                      <li>Pembinaan dan pelaksanaan tugas dibidang pelayanan perizinan</li>
                                      <li>Pelaksanaan tugas lain yang diberikan oleh Bupati sesuai dengan tugas dan fungsinya</li> 
                                    </ul>
                                  </blockquote>                               

                                <div class="action_btns">                      
                                    <div class="col-sm-6"></div>
                                    <div class="one_half col-sm-6"><button type="button" class="btn to-visi-misi" style="font-weight:bold"><i class="fa fa-arrow-left"></i> &nbsp; Kembali ke visi misi</button></div>   
                                </div>                                  
                            </div>
                            <div class="action_btns"></div>
                        </div>                        
                    </div>    
                </div>
                <!-- END Portlet PORTLET-->
            </div>
        </div>
    </div>
    <!--/End Modal-->

    <!--Mekanisme Pelayanan-->
    <div class="modal fade" id="mekanisme-pelayanan" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- BEGIN Portlet PORTLET-->
                <div class="portlet portlet-bordered">
                    <div class="portlet-container">
                        <div class="next">
                          <button class="btn btn-primary btn-raised end-mekanisme" data-dismiss="modal"><i class="fa fa-arrow-circle-left"></i></button>
                        </div> 

                        <div class="portlet-title">
                            <div class="caption caption-red">
                                <img src="<?=base_img()."handshake.png"?>" class="icon-form">
                                <span id="caption-mekanisme" class="caption-subject"> Mekanisme Pelayanan </span>
                                <span class="caption-helper"> untuk masyarakat </span>
                            </div>
                        </div>
                        <div id="msgOne"></div>
                        <div class="portlet-body step-mekanisme" style="color:#7f8c8d;font-weight:700;">
                            <div class="col-sm-6">
                              <ul>
                                    <li><b>Melalui petugas pelayanan, pemohon memperoleh informasi</b> jenis - jenis Izin yang diperlukan (yang akan diajukan)</li>
                                    <li>Pemohon menuju meja pelayanan sesuai dengan Izin yang diajukan, <b>mengambil formulir dan mendapatkan informasi tentang syarat-syarat, waktu dan biaya</b> tentang jenis Izin yang diajukan ( terbagi menjadi 4 meja )</li>
                                    <li><b>Penelitian berkas kelengkapan</b> berkas permohonan dan syarat – syaratnya, memerlukan pemeriksaan lapangan atau tidak</li>
                                    <li><b>Penetapan biaya perizinan</b>, untuk diketahui oleh pemohon</li>
                                    <li>Pemberian tanda terima berkas permohonan kepada pemohon. Tanda terima ini dapat dijadikan <b>alat bukti untuk pengambilan izin</b> yang sudah selesai</li>
                              </ul>                                                             
                            </div> 
                            <div class="col-sm-6">                           
                              <ul>
                                    <li><b>Permohonan diproses sesuai dengan jenis perizinan</b> ( memerlukan pemeriksaan lap./tdk memerlukan pemeriksaan lapangan</li>
                                    <li><b>Pemberitahuan izin yang sudah selesai dilakukan melalui telepon</b> kepada pemohon atau pemohon langsung datang ke KPT sesuai dengan waktu yang telah ditetapkan</li>
                                    <li>Pemohon <b>menunjukkan tanda terima berkas permohonan</b> atau <b>bukti pembayaran retribusi</b> </li>
                                    <li><b>Penyerahan surat izin</b> yang sudah selesai kepada pemohon</li>
                                    <li>Pemohon menandatangai tanda terima penerimaan Izin</li>
                                    <li>Registrasi surat Izin yg sdh selesai & diambil oleh pemohon</li>
                              </ul>
                                <div class="action_btns" style="margin-top:5%">   
                                    <div class="col-sm-6"></div>                        
                                    <div class="one_half col-sm-6"><button type="button" class="btn to-alur" style="font-weight:bold">Lihat Alur ?</button></div>  
                                </div>
                            </div>
                            <div class="action_btns"></div>
                        </div>
                        <div class="portlet-body alur-mekanisme">
                            <div class="col-sm-12">
                                <img src="<?=base_img()."mekanisme.png"?>" width="100%" style="margin-bottom:3%">

                                <div class="col-sm-6"></div>
                                <div class="col-sm-6">                  
                                  <div class="action_btns">
                                      <div class="col-sm-6"></div>                           
                                      <div class="one_half col-sm-6"><button type="button" class="btn to-step" style="font-weight:bold;width:auto"><i class="fa fa-arrow-left"></i> &nbsp; Kembali ke Tata Cara</button></div>  
                                  </div>                      
                                </div>            
                            </div>
                            <div class="action_btns"></div>
                        </div>                        
                    </div>    
                </div>
                <!-- END Portlet PORTLET-->
            </div>
        </div>
    </div>
    <!--/End Modal-->

    <!--Pelayanan-->
    <div class="modal fade" id="pelayanan" role="dialog">
        <div id="sizing-layanan" class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- BEGIN Portlet PORTLET-->
                <div class="portlet portlet-bordered" >
                    <div class="portlet-container">
                        <div class="next">
                          <button class="btn btn-primary btn-raised end-layanan" data-dismiss="modal"><i class="fa fa-arrow-circle-left"></i></button>
                        </div> 

                        <div class="portlet-title">
                            <div class="caption caption-red">
                                <img src="./assets/images/speech-bubble.png" class="icon-form">
                                <span id="caption-layanan" class="caption-subject"> Dapatkan Layanan Kami </span>
                                <span class="caption-helper"> untuk masyarakat </span>
                            </div>
                        </div>
                        <div id="msgOne"></div>
                        <div class="portlet-body layanan" style="font-weight:700">
                            <div class="col-sm-6">
                                <p><b>Pelayanan Terpadu Satu Pintu (one stop service)</b>, Pola Pelayanan terpadu satu pintu diselenggarakan  pada  satu tempat yang meliputi berbagai jenis pelayanan perIzinan yang memiliki keterkaitan proses dan  dilayani melalu satu pintu</p>

                                <button class="btn to-janji-layanan" style="background-color:#ecf0f1;font-weight:700">Janji Layanan</button>
                                <button class="btn to-pengaduan" style="background-color:#ecf0f1;font-weight:700">Dapatkan Layanan Pengaduan</button>

                                <h3> Kemudahan Apa Yang Bisa Dinikmati Oleh Masyarakat Dan Daerah ? </h3>
                                  <blockquote>
                                    <ul class="layanan" style="font-weight:700">
                                      <li>Peningkatan pelayanan  kepada masyarakat</li>
                                      <li>Memperpendek jarak antara pemohon dan pemproses</li>
                                      <li>Mempersingkat waktu penyelesaian Izin</li>
                                      <li>Meningkatkan kesadaran masyarakat dalam memenuhi kewajibannya</li>
                                      <li>Penyatuan pengurusan  24 ( dua puluh empat ) jenis Izin yang sebelum nya tersebar di beberapa Dinas / Instansi, kedalam satu  lembaga Kantor Pelayanan Terpadu</li>
                                      <li>Meningkatkan Pendapatan Asli Daerah ( PAD )</li> 
                                    </ul>
                                  </blockquote>
                            </div> 
                            <div class="col-sm-6">                        
                                <div class="list-group">
                                <?php 
                                $i = 1; 
                                foreach($layanan as $list) { ?>
                                <div class="group-list">
                                  <a style="cursor:pointer;" class="list-group-item detail-layanan" data-id="<?=$list->id_layanan?>" data-layanan="<?=$list->nama_layanan?>" data-dasarhukum="<?=$list->dasar_hukum?>" data-persyaratan="<?=$list->persyaratan?>" data-jangkawaktu="<?=$list->jangka_waktu?>" data-tarif="<?=$list->tarif?>" data-berlaku="<?=$list->masa_berlaku?>">
                                      <div class="pull-left form-control-inline">  
                                          <p class="list-group-item-text layanan">
                                          <?=$i?>. <?=$list->nama_layanan?></p>     
                                      </div>
                                      <div class="clearfix"></div>
                                  </a>
                                </div>
                                <?php ++$i; } ?>
                                <ul class="pagination pagination-lg mark" id="paging"></ul>
                                </div> 
                            </div>
                            <div class="action_btns"></div>
                        </div>
                        <div class="portlet-body detail">
                          <table class="table table-hover" border="0" style="font-weight:700">
                            <tr>
                                <th id="title" colspan="3" style="text-align:center;font-size:18px;">No</th>
                            </tr>                                  
                            <tr class="info">
                                <th>No</th>
                                <th>Komponen</th>
                                <th>Uraian</th>
                            </tr>
                            <tr>
                                <td class="warning">1</td>
                                <td class="warning">Dasar Hukum</td>
                                <td id="dasarhukum"></td>
                            </tr>
                            <tr>
                                <td class="warning">2</td>
                                <td class="warning">Persyaratan Pelayanan</td>
                                <td id="persyaratan"></td>
                            </tr>
                            <tr>
                                <td class="warning">3</td>
                                <td class="warning">Jangka waktu penyelesaian</td>
                                <td id="jangkawaktu"></td>
                            </tr>
                            <tr>
                                <td class="warning">4</td>
                                <td class="warning">Biaya/tarif</td>
                                <td id="tarif"></td>
                            </tr>
                            <tr>
                                <td class="warning">5</td>
                                <td class="warning">Masa Berlaku Izin</td>
                                <td id="berlaku"></td>
                            </tr>                                                               
                          </table>

                          <div class="action_btns">   
                              <div class="col-sm-6">                     
                              <div class="one_half col-sm-6"><button type="button" class="btn daftar-layanan" style="font-weight:bold;width:auto;width:auto;"><i class="fa fa-arrow-left"></i> &nbsp; Kembali ke daftar layanan</button></div>  
                          </div>                           

                            <div class="action_btns"></div>
                        </div>
                    </div>                          
                    <div class="portlet-body layanan-pengaduan" style="font-weight:700">
                          <p>Dalam memberikan pelayanan, pastinya masyarakat mempunyai saran, kritik masukan ataupun pengaduan terhadap layanan yang ada di Kantor Pelayanan Terpadu Kabupaten Lumajang </p>
                          <h3>Bagaimana cara mendapatkan layanan pengaduan ?</h3>
                            <blockquote>
                              <ul class="layanan" style="font-weight: 700">
                                <li>Datang langsung ke Kantor Pelayanan Terpadu Kabupaten Lumajang dengan mengisi Formulir Pengaduan</li>
                                <li>Melalui surat dengan alamat Kantor Pelayanan Terpadu Kabupaten Lumajang Jl. Jendral Panjaitan Nomor 89 Lumajang</li>
                                <li>Melalui Telepon (0334) 889822, Fax. (0334) 894444</li>
                                <li>Kirim langsung pesan melalui email kpt@lumajang.go.id</li> 
                                <li>Atau dengan mengunjungi website <a href="http://www.lumajang.go.id">www.lumajang.go.id</a></li> 
                                
                              </ul>
                            </blockquote>                               

                          <div class="action_btns">                      
                              <div class="col-sm-6"></div>
                              <div class="one_half col-sm-6"><button type="button" class="btn daftar-layanan" style="font-weight:bold"><i class="fa fa-arrow-left"></i> &nbsp; Kembali ke daftar layanan</button></div>   
                          </div>                                  
                    </div>
                    <div class="portlet-body janji-layanan" style="font-weight:700">
                          <p>Untuk memacu semangat bekerja dan motivasi  aparatur pelayanan perizinan, maka janji layanan kami adalah </p>
                            <blockquote>
                              <ul class="layanan" style="font-weight: 700">
                                <li>Memberikan layanan yang Cepat dan Akurat</li>
                                <li>Menyajikan informasi produk perizinan yang berkualitas</li>
                                <li>Memberikan rujukan pengaduan pelanggan</li>
                                <li>Memberikan kemudahan dalam mendapatkan informasi yang diperlukan</li> 
                                <li>Menjamin seluruh penggunaan koleksi, layanan dan fasilitas pelayanan sesuai tata tertib yang berlaku</li> 
                                <li>Merespon cepat terhadap setiap permintaan pemohon sesuai dengan informasi yang tersedia</li>
                                <li>Memiliki empati, peduli dan penuh perhatian terhadap setiap pemohon</li>
                                <li>Menyiapkan ruang yang nyaman dan fasilitas yang tertata baik</li>
                                <li>Menyiapkan petugas berpenampilan rapi, berdedikasi dan siap melayani</li>
                              </ul>
                            </blockquote>                               

                          <div class="action_btns">                      
                              <div class="col-sm-6"></div>
                              <div class="one_half col-sm-6"><button type="button" class="btn daftar-layanan" style="font-weight:bold"><i class="fa fa-arrow-left"></i> &nbsp; Kembali ke daftar layanan</button></div>   
                          </div>                                  
                    </div> 
                    <div class="portlet-body tarif-terlampir" style="font-weight:700">
                        <div class="row">
                          <div class="col-sm-12">
                            <table class="table table-hover" border="0" style="font-weight:700">
                              <tr>
                                  <th id="title" colspan="6" style="text-align:center;font-size:18px;border:0;outline:0;">
                                  Indeks Lokasi
                                  </th>
                              </tr>   
                              <tr>
                               <th class="info" rowspan="2" style="vertical-align:middle;">No</th>   
                               <th class="info" rowspan="2" style="vertical-align:middle;">Ukuran (Luas)</th>
                               <td class="warning" colspan="4" style="text-align:center">Kawasan</td>
                              </tr>

                              <tr class="warning">
                               <td>Pemukian</td>
                               <td>Pertokoan / Pasar</td>
                               <td>Industri / Gudang</td>
                               <td>Lain - lain</td>
                              </tr>

                              <tr>
                               <td>1</td>
                               <td>0 s/d 100</td>
                               <td>Rp. 650</td>
                               <td>Rp. 675</td>
                               <td>Rp. 700</td>
                               <td>Rp. 625</td>
                              </tr> 
                              <tr>
                               <td>2</td>
                               <td>101 s/d 200</td>
                               <td>Rp. 600</td>
                               <td>Rp. 625</td>
                               <td>Rp. 650</td>
                               <td>Rp. 575</td>
                              </tr> 
                              <tr>
                               <td>3</td>
                               <td>201 s/d 300</td>
                               <td>Rp. 550</td>
                               <td>Rp. 575</td>
                               <td>Rp. 600</td>
                               <td>Rp. 525</td>
                              </tr>  
                              <tr>
                               <td>4</td>
                               <td>301 s/d 400</td>
                               <td>Rp. 500</td>
                               <td>Rp. 525</td>
                               <td>Rp. 550</td>
                               <td>Rp. 475</td>
                              </tr> 
                              <tr>
                               <td>5</td>
                               <td>401 s/d 500</td>
                               <td>Rp. 450</td>
                               <td>Rp. 475</td>
                               <td>Rp. 500</td>
                               <td>Rp. 525</td>
                              </tr> 
                              <tr>
                               <td>6</td>
                               <td>501 s/d 1000</td>
                               <td>Rp. 400</td>
                               <td>Rp. 425</td>
                               <td>Rp. 450</td>
                               <td>Rp. 375</td>
                              </tr>
                              <tr>
                               <td>7</td>
                               <td>Lebih dari 1001</td>
                               <td>Rp. 350</td>
                               <td>Rp. 375</td>
                               <td>Rp. 400</td>
                               <td>Rp. 325</td>
                              </tr>                                                                                                                                                                                                                                                
                            </table>                              
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-6">
                            <table class="table table-hover" border="0" style="font-weight:700">
                              <tr>
                                  <th id="title" colspan="4" style="text-align:center;font-size:18px;border:0;outline:0;">
                                  Indeks Lokasi
                                  </th>
                              </tr>                                  
                              <tr>
                                  <td>1</td>
                                  <td>Nilai 1</td>
                                  <td>Jalan Utama/Primer</td>
                                  <td>GSP 16m s/d 20m</td>
                              </tr>
                              <tr>
                                  <td>2</td>
                                  <td>Nilai 2</td>
                                  <td>Jalan Sekunder</td>
                                  <td>GSP 10m s/d 15m</td>
                              </tr>
                              <tr>
                                  <td>3</td>
                                  <td>Nilai 3</td>
                                  <td>Jalan Lingkungan</td>
                                  <td>GSP 0m s/d 9m</td>
                              </tr>                                                            
                            </table>                            
                          </div>
                          <div class="col-sm-6">
                            <table class="table table-hover" border="0" style="font-weight:700">
                              <tr>
                                  <th id="title" colspan="3" style="text-align:center;font-size:18px;border:0;outline:0;">
                                  Indeks Gangguan
                                  </th>
                              </tr>                                  
                              <tr>
                                  <td>1</td>
                                  <td>Nilai 1</td>
                                  <td>Tingkat Gangguan Rendah</td>
                              </tr>
                              <tr>
                                  <td>2</td>
                                  <td>Nilai 2</td>
                                  <td>Tingkat Gangguan Sedang</td>
                              </tr>
                              <tr>
                                  <td>3</td>
                                  <td>Nilai 3</td>
                                  <td>Tingkat Gangguan Tinggi</td>
                              </tr>                                                            
                            </table>                             
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12">
                            <table class="table table-hover" border="0" style="font-weight:700">
                              <tr>
                                  <th id="title" colspan="6" style="text-align:center;font-size:18px;border:0;outline:0;">
                                  Rincian Tarif Dengan Daya Penggerak / Mesin
                                  </th>
                              </tr>   
                              <tr>
                                  <th>No</th>
                                  <th>Daya Penggerak (PK)</th>
                                  <th>Tarif</th>
                                  <th>No</th>
                                  <th>Daya Penggerak (PK)</th>
                                  <th>Tarif</th>                                  
                              </tr>                                                             
                              <tr>
                                  <td>1</td>
                                  <td>0 s/d 10</td>
                                  <td>Rp. 250.000</td>
                                  <td>17</td>
                                  <td>161 s/d 170</td>
                                  <td>Rp. 4.250.000</td>                                 
                              </tr>
                              <tr>
                                  <td>2</td>
                                  <td>11 s/d 20</td>
                                  <td>Rp. 500.000</td>
                                  <td>18</td>
                                  <td>171 s/d 180</td>
                                  <td>Rp. 4.500.000</td>                                 
                              </tr>        
                              <tr>
                                  <td>3</td>
                                  <td>21 s/d 30</td>
                                  <td>Rp. 750.000</td>
                                  <td>19</td>
                                  <td>181 s/d 190</td>
                                  <td>Rp. 4.750.000</td>                                 
                              </tr>   
                              <tr>
                                  <td>4</td>
                                  <td>31 s/d 40</td>
                                  <td>Rp. 1.000.000</td>
                                  <td>20</td>
                                  <td>191 s/d 200</td>
                                  <td>Rp. 5.000.000</td>                                 
                              </tr>    
                              <tr>
                                  <td>5</td>
                                  <td>41 s/d 50</td>
                                  <td>Rp. 1.250.000</td>
                                  <td>21</td>
                                  <td>201 s/d 210</td>
                                  <td>Rp. 5.250.000</td>                                 
                              </tr> 
                              <tr>
                                  <td>6</td>
                                  <td>51 s/d 60</td>
                                  <td>Rp. 1.500.000</td>
                                  <td>22</td>
                                  <td>211 s/d 220</td>
                                  <td>Rp. 5.500.000</td>                                 
                              </tr>  
                              <tr>
                                  <td>7</td>
                                  <td>61 s/d 70</td>
                                  <td>Rp. 1.750.000</td>
                                  <td>23</td>
                                  <td>221 s/d 230</td>
                                  <td>Rp. 5.750.000</td>                                 
                              </tr>                                                                       
                              <tr>
                                  <td>8</td>
                                  <td>71 s/d 80</td>
                                  <td>Rp. 2.000.000</td>
                                  <td>24</td>
                                  <td>231 s/d 240</td>
                                  <td>Rp. 6.000.000</td>                                 
                              </tr>  
                              <tr>
                                  <td>9</td>
                                  <td>81 s/d 90</td>
                                  <td>Rp. 2.250.000</td>
                                  <td>25</td>
                                  <td>241 s/d 250</td>
                                  <td>Rp. 6.250.000</td>                                 
                              </tr>                                                                       
                              <tr>
                                  <td>10</td>
                                  <td>91 s/d 100</td>
                                  <td>Rp. 2.500.000</td>
                                  <td>26</td>
                                  <td>251 s/d 260</td>
                                  <td>Rp. 6.500.000</td>                                 
                              </tr>    
                              <tr>
                                  <td>11</td>
                                  <td>101 s/d 110</td>
                                  <td>Rp. 2.750.000</td>
                                  <td>27</td>
                                  <td>261 s/d 270</td>
                                  <td>Rp. 6.750.000</td>                                 
                              </tr>  
                              <tr>
                                  <td>12</td>
                                  <td>111 s/d 120</td>
                                  <td>Rp. 3.000.000</td>
                                  <td>28</td>
                                  <td>271 s/d 280</td>
                                  <td>Rp. 7.000.000</td>                                 
                              </tr>  
                              <tr>
                                  <td>13</td>
                                  <td>121 s/d 130</td>
                                  <td>Rp. 3.250.000</td>
                                  <td>29</td>
                                  <td>281 s/d 290</td>
                                  <td>Rp. 7.250.000</td>                                 
                              </tr> 
                              <tr>
                                  <td>14</td>
                                  <td>131 s/d 140</td>
                                  <td>Rp. 3.500.000</td>
                                  <td>30</td>
                                  <td>291 s/d 300</td>
                                  <td>Rp. 7.500.000</td>                                 
                              </tr> 
                              <tr>
                                  <td>15</td>
                                  <td>141 s/d 150</td>
                                  <td>Rp. 3.750.000</td>
                                  <td>31</td>
                                  <td>301 s/d 310</td>
                                  <td>Rp. 7.750.000</td>                                 
                              </tr>     
                              <tr>
                                  <td>16</td>
                                  <td>151 s/d 160</td>
                                  <td>Rp. 4.000.000</td>
                                  <td>32</td>
                                  <td>Lebih dari 310</td>
                                  <td>Rp. 8.000.000</td>                                 
                              </tr>                                                                                                                                                                                                                                                                              
                            </table>                              
                          </div>                          
                        </div>

                          <div class="action_btns">   
                              <div class="col-sm-6">                     
                              <div class="one_half col-sm-6"><button type="button" class="btn daftar-layanan" style="font-weight:bold;width:auto;width:auto;"><i class="fa fa-arrow-left"></i> &nbsp; Kembali ke daftar layanan</button></div>  
                          </div>      
                    </div>                                        
                </div>
                <!-- END Portlet PORTLET-->
            </div>
        </div>
    </div>
    <!--/End Modal-->    

</html>
