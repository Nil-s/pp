<?php
include "connect.php";
ob_start();
session_start();



//admin kayıt
if (isset($_POST["signup"])) {
     $user_name = $_POST["user_name"];
     $email = $_POST["email"]; 
     $password_1 = $_POST["password_1"];
     $password_2 = $_POST["password_2"];

    //şifre kontrolü
     if($password_1 === $password_2){
       // echo "şifreler aynı";
        if(strlen($password_1)>=6){
            //echo "başarılı";
            $admin_control = $db->prepare("SELECT * FROM user");
            $admin_control->execute();

            $has_admin = $admin_control->rowCount();
            if($has_admin==0){
               
                $pass = md5($password_2);
                $admin_signup = $db->prepare("INSERT INTO user SET
                user_name = '$user_name',
                email= '$email',
                password= '$pass'
            ");
             $insert = $admin_signup->execute();
             if($insert){
                     //echo "başarılı";
                    header("Location: login.php?status=ok&user_name=$user_name");
                   }else{
                      
                     //echo "başarısız";
                     header("Location: login.php?register=no#signup");
           } 

            }else{
                //echo"Kayıtlı admin mevcuttur.";
                header("Location: login.php?register=hasadmin#signup");

            }

        }else{
            //echo "şifre 6 karakterden az.";
           header("Location: login.php?register=lowchar#signup");

        }
#signup
     }


     else {
        // echo "şifreler farklı";
        header("Location: login.php?register=inequal#signup");

     }


}
//admin giriş
if(isset($_POST['login'])){
    $user_name= $_POST['user_name'];
    $pass= md5($_POST['password']);

    $login = $db->prepare("SELECT * FROM user WHERE user_name='$user_name' and password='$pass'");
    $login->execute();

    $count = $login -> rowCount();

    if($count==1)
    {
        $_SESSION['user_name'] = $user_name;
        header("Location: index.php");
    }else{
        header("Location: login.php?login=no");
    }

}

// update && isset

// skill isset
if(isset($_POST['insert_skills'])){
    $skills_title = $_POST['skills_title'];
    $first_skill = $_POST['first_skill'];
    $second_skill = $_POST['second_skill'];
    $third_skill = $_POST['third_skill'];
    $first_counter = $_POST['first_counter'];
    $second_counter = $_POST['second_counter'];
    $third_counter = $_POST['third_counter'];
    

    $insert_skill = $db -> prepare("INSERT INTO skills_page SET
       skills_title = '$skills_title',
        first_skill = '$first_skill',
        second_skill = '$second_skill',
        third_skill = '$third_skill',
        first_counter = '$first_counter',
        second_counter = '$second_counter',
        third_counter = '$third_counter'
       
    ");
    $insert = $insert_skill -> execute();
    if($insert){
        header("Location: skills.php?insert=ok");
    }else{
        header("Location: skills.php?insert=no");
    }
    


}
 //skill update
 if(isset($_POST['update_skills'])){
    $skills_title = $_POST['skills_title'];
    $first_skill = $_POST['first_skill'];
    $second_skill = $_POST['second_skill'];
    $third_skill = $_POST['third_skill'];
    $first_counter = $_POST['first_counter'];
    $second_counter = $_POST['second_counter'];
    $third_counter = $_POST['third_counter'];

    $update_skill = $db -> prepare("UPDATE skills_page SET
       skills_title = '$skills_title',
        first_skill = '$first_skill',
        second_skill = '$second_skill',
        third_skill = '$third_skill',
        first_counter = '$first_counter',
        second_counter = '$second_counter',
        third_counter = '$third_counter' WHERE skills_id=1
    ");
    $update= $update_skill -> execute();
    if($update){
        header("Location: skills.php?update=ok");
    }else{
        header("Location: skills.php?update=no");
    }
 }
 //about_page isset
 if(isset($_POST['insert_about_us'])){
     $about_title = $_POST['about_title'];
     $content = $_POST['content'];
     $instagram = $_POST['instagram'];
     $twitter = $_POST['twitter'];
     $spotify = $_POST['spotify'];
     

     $insert_about = $db -> prepare("INSERT INTO about_page SET
     about_title = '$about_title',
     content = '$content',
     instagram = '$instagram',
     twitter = '$twitter',
     spotify = '$spotify'
     
     ");
      $insert = $insert_about -> execute();
      if($insert){
          header("Location: about_us.php?insert=ok");
      }else{
          header("Location:about_us.php?insert=no");
      }

 }
 // about_page update
 if(isset($_POST['update_about_us'])){
    $about_title = $_POST['about_title'];
    $content = $_POST['content'];
    $instagram = $_POST['instagram'];
    $twitter = $_POST['twitter'];
    $spotify = $_POST['spotify'];
    
    $update_about = $db -> prepare("UPDATE about_page SET
    about_title = '$about_title',
     content = '$content',
     instagram = '$instagram',
     twitter = '$twitter',
     spotify = '$spotify' WHERE about_id=1
     ");
     $update = $update_about -> execute();
     if($update){
        header("Location: about_us.php?update=ok");
     }else{
        header("Location: about_us.php?update=no");
     }

 }
 // contact insert
 if(isset($_POST['insert_contact_info'])){
     $contact_title = $_POST['contact_title'];
     $email = $_POST['email'];
     $gsm = $_POST['gsm'];
     $province = $_POST['province'];

     $insert_contact = $db ->prepare("INSERT INTO contact_info SET
     contact_title = '$contact_title',
     email = '$email',
     gsm = '$gsm',
     province = '$province'
     ");
     $insert = $insert_contact -> execute();
     if($insert){
        header("Location: contact.php?insert=ok");
    }else{
        header("Location: contact.php?insert=no");
    }
 }
 // contact update 
 if(isset($_POST['update_contact_info'])){
     $contact_title = $_POST['contact_title'];
     $email = $_POST['email'];
     $gsm = $_POST['gsm'];
     $province = $_POST['province'];

     $update_contact = $db -> prepare("UPDATE contact_info SET
     contact_title = '$contact_title',
     email = '$email',
     gsm = '$gsm',
     province = '$province' WHERE contact_id=1
     ");
     $update = $update_contact -> execute();
     if($update){
        header("Location: contact.php?update=ok");
    }else{
        header("Location: contact.php?update=no");
    }
     
 }
 // info insert
 if(isset($_POST['insert_personal_info'])){
     $personal_title = $_POST['personal_title'];
     $personal_name = $_POST['personal_name'];
     $personal_surname = $_POST['personal_surname'];
     $age = $_POST['age'];
     $cv = $_POST['cv'];

     $insert_personal = $db -> prepare("INSERT INTO personal_info SET
     personal_title = '$personal_title',
     personal_name = '$personal_name',
     personal_surname = '$personal_surname',
     age = '$age',
     cv = '$cv'
     ");
     $insert = $insert_personal -> execute(); 
     if($insert){
        header("Location: info.php?insert=ok");
    }else{
        header("Location: info.php?insert=no");
    }
 }
 // info update 
 if(isset($_POST['update_personal_info'])){
    $personal_title = $_POST['personal_title'];
    $personal_name = $_POST['personal_name'];
    $personal_surname = $_POST['personal_surname'];
    $age = $_POST['age'];
    $cv = $_POST['cv'];

    $update_personal = $db -> prepare("UPDATE personal_info SET
    personal_title = '$personal_title',
     personal_name = '$personal_name',
     personal_surname = '$personal_surname',
     age = '$age',
     cv = '$cv' WHERE personal_id=1
     ");
     $update = $update_personal -> execute(); 
     if($update){
        header("Location: info.php?update=ok");
    }else{
        header("Location: info.php?update=no");
    
    }
 }

// settings insert
if(isset($_POST['insert_settings'])){
    $first_menutitle = $_POST['first_menutitle'];
    $second_menutitle = $_POST['second_menutitle'];
    $third_menutitle = $_POST['third_menutitle'];
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];

    $insert_setting = $db -> prepare("INSERT INTO settings_page SET
    first_menutitle= '$first_menutitle',
    second_menutitle = '$second_menutitle',
    third_menutitle = '$third_menutitle',
    title = '$title',
    subtitle = '$subtitle'
    ");
    $insert = $insert_setting -> execute();
    if($insert){
        header("Location: settings.php?insert=ok");
    }else{
        header("Location: settings.php?insert=no");

    }
}
    
//settings update
if(isset($_POST['update_settings'])){
    $first_menutitle = $_POST['first_menutitle'];
    $second_menutitle = $_POST['second_menutitle'];
    $third_menutitle = $_POST['third_menutitle'];
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $picture = $_POST['picture'];
    $password = $_POST['password'];
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];
    

    

    
            $pass2 = md5($password);
            $chancePass = $db -> prepare("SELECT * FROM user WHERE user_id=1 AND password='$pass2'");
            $chancePass -> execute();
            $count = $chancePass -> rowCount();
            if($count==1){
                $pass3 = md5($password_1);
                if(!($pass2==$pass3)){
                    if($password_1==$password_2){
                        if(strlen($password) >= 6){
                            $pass1 = md5($password_1);
                            $newPass = $db -> prepare("UPDATE user SET password='$pass1'");
                            $updatePass = $newPass ->execute();

                        }
                    }
                }

           

        
    

    $update_setting = $db -> prepare("UPDATE settings_page SET
    first_menutitle = '$first_menutitle',
    second_menutitle = '$second_menutitle',
    third_menutitle = '$third_menutitle',
    subtitle = '$subtitle',
    title = '$title',
    picture = '$picture' WHERE settings_id=1
    
    ");
    $update = $update_setting ->execute();

    if($update and $updatePass){
        header("Location: logout.php");
    }else{
        header("Location: settings.php?update=no ");
    }
  }
}

