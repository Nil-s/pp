<?php
include "header.php";
$check_info = $db -> prepare("SELECT * FROM personal_info" );
$check_info -> execute();
$control_info = $check_info -> rowCount();
$fetch_info = $db -> prepare("SELECT * FROM personal_info WHERE personal_id=1");
$fetch_info -> execute();
$fetch = $fetch_info -> fetch(PDO::FETCH_ASSOC);
?>
<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Bilgiler Sayfası</h3>
              </div>

              
              </div>
            </div>
            <div class="clearfix"></div>
<!-- form input mask -->
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Kişisel Bilgiler</h2>
                    
                    <div class="clearfix"></div>
                  </div>
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

                    
                    <form class="form-horizontal form-label-left " action="process.php" method="POST">
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Sayfa Başlığı 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  class="form-control col-md-7 col-xs-12" value="<?php echo $fetch['personal_title'];?>"  name="personal_title"  required="required" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">İsim</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" value="<?php echo $fetch['personal_name'];?>" name="personal_name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Soyisim</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" value="<?php echo $fetch['personal_surname'];?>" name="personal_surname">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Yaş</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" value="<?php echo $fetch['age'];?>" name="age">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >CV
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file"  name="cv"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      


                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                          <button type="reset" class="btn btn-round btn-success">Temizle</button>

                            <?php
                            if($control_info==1){ ?>
                             <button type="submit" class="btn btn-round btn-warning" name="update_personal_info">Güncelle</button>
                          <?php } else{ ?>
                          <button type="submit" class="btn btn-round btn-warning" name="insert_personal_info">Ekle</button>
                          <?php } ?>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
              <!-- /form input mask -->
            
          </div>
        </div>
        <!-- /page content -->
<?php
include "footer.php";
?>