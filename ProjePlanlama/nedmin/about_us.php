<?php
include "header.php";
$check_about = $db -> prepare("SELECT * FROM about_page " );
 $check_about -> execute();
 $control_about = $check_about->rowCount();
 $fetch_about = $db -> prepare("SELECT * FROM about_page WHERE about_id=1");
 $fetch_about -> execute();
 $fetch = $fetch_about -> fetch(PDO::FETCH_ASSOC);
?>
<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Hakkımda Sayfası</h3>
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
                  <?php }else if(@$_GET['update']=='ok'){ ?>
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
                          <input  class="form-control col-md-7 col-xs-12" value="<?php echo $fetch['about_title']; ?>"  name="about_title" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Biyografi 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea id="textarea" required="required"   name="content" class="form-control col-md-7 col-xs-12"> <?php echo $fetch['content'];?> </textarea>

                        </div>
                      </div>
            
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Instagram 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  value="<?php echo $fetch['instagram']; ?>" name="instagram"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Twitter 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" value="<?php echo $fetch['twitter']; ?>" name="twitter"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Spotify
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" value="<?php echo $fetch['spotify']; ?>" name="spotify"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="reset" class="btn btn-round btn-success">Temizle</button>
                           <?php 
                            if($control_about==1){ ?>
                            <button id="send" type="submit" class="btn btn-round btn-warning" name="update_about_us">Güncelle</button>
                           <?php } else{ ?> 
                          <button id="send" type="submit" class="btn btn-round btn-primary" name="insert_about_us">Ekle</button>
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