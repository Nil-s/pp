<?php
include "header.php";
$check_setting = $db -> prepare("SELECT * FROM settings_page");
$check_setting -> execute();
$control_setting = $check_setting -> rowCount();
$fetch_setting = $db -> prepare("SELECT * FROM settings_page WHERE settings_id=1");
$fetch_setting -> execute();
$fetch = $fetch_setting -> fetch(PDO::FETCH_ASSOC);

?>
<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Ayarlar Sayfası</h3>
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
                    <strong> Başarılı </strong>Veriler güncellendi.
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Başlık
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  value="<?php echo $fetch['first_menutitle'];?>"  name="first_menutitle"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>
                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Başlık 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" value="<?php echo $fetch['second_menutitle'];?>" name="second_menutitle"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>
                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Başlık 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" value="<?php echo $fetch['third_menutitle'];?>" name="third_menutitle"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Başlık
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" value="<?php echo $fetch['title'];?>"  name="title"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Alt Başlık 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" value="<?php echo $fetch['subtitle'];?>" name="subtitle"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                   
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Profil Fotoğrafı 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file"  name="picture"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Eski Şifre 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" name="password"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Şifre 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" name="password_1"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Şifre Tekrarı
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password"  name="password_2"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                        <button type="reset" class="btn btn-round btn-success">Temizle</button>

                  
                           
                           <?php if($control_setting==1){ ?>
                          <button id="send" type="submit" class="btn btn-round btn-warning" name="update_settings">Güncelle</button>
                          <?php } else { ?>
                            <button id="send" type="submit" class="btn btn-round btn-warning" name="insert_settings">Ekle</button>
                            <?php }?>
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