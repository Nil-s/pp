<?php
include "header.php";
$check_contact = $db -> prepare("SELECT * FROM contact_info");
$check_contact -> execute();
$control_contact = $check_contact -> rowCount();
$fetch_contact = $db -> prepare("SELECT * FROM contact_info WHERE contact_id=1");
$fetch_contact -> execute();
$fetch = $fetch_contact -> fetch(PDO::FETCH_ASSOC);
?>
<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>İletişim Sayfası</h3>
              </div>

              
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                  <div class="x_content">
                  <?php if(@$_GET['insert']=='ok'){ 
                ?>
                <div class="alert alert-success alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong> Başarılı, </strong> Veriler eklendi.
                  </div>

             <?php } else if(@$_GET['insert']=='no'){ ?>
             <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong> Hata! </strong> Bir sorunla karşılaşıldı.
                  </div>
                  <?php } else if(@$_GET['update']=='ok'){ ?>
             <div class="alert alert-success alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong> Başarılı, </strong> Veriler güncellendi.
                  </div>
                  <?php } else if(@$_GET['update']=='no'){ ?>
             <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong> Hata! </strong> Bir sorunla karşılaşıldı.
                  </div>
                  <?php } ?>  

                    <form class="form-horizontal form-label-left" action="process.php" method="POST">

                      

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Sayfa Başlığı 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  class="form-control col-md-7 col-xs-12" value="<?php echo $fetch['contact_title'];?>" name="contact_title"  required="required" type="text">
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Eposta
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" value="<?php echo $fetch['email'];?>"  name="email"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Telefon
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="tel" value="<?php echo $fetch['gsm'];?>"  name="gsm"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Adres</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" value="<?php echo $fetch['province'];?>" name="province">
                        </div>
                      </div>
                      
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="reset" class="btn btn-round btn-success">Temizle</button>
                          <?php 
                            if($control_contact==1){ ?>
                            <button id="send" type="submit" class="btn btn-round btn-warning" name="update_contact_info">Güncelle</button>

                           <?php } else { ?>
                            <button id="send" type="submit" class="btn btn-round btn-warning" name="insert_contact_info">Ekle</button>
                          <?php } ?>


                          
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
<?php
include "footer.php";
?>