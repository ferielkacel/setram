<?php
    // $pwd ="belach";
    // $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    // echo $hashedPwd;
    if(isset($_POST['submit'])&& isset($_FILES['image'])){
        
        $img_name= $_FILES["image"]['name'];
        $img_size= $_FILES["image"]['size'];
        $tmp_name= $_FILES["image"]['tmp_name'];        
        $error= $_FILES["image"]['error'];
        
        if($error === 0){
            if($img_size > 125000){
                $em = "sorry file is too larg";
                header("Location: index.php?error=$em");
            }else{
                $img_ex = pathinfo($img_name,PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);

                $allowed_exs = array("jpg", "jpeg", "png");
                if(in_array($img_ex_lc, $allowed_exs)){
                    $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
                    $img_upload_path = 'uploads/'.$new_img_name;
                    $move_uploaded_file($tmp_name, $img_upload_path);
                }
            }
        }else{
            $em = "unknown error occurred!";
            header("Location: index.php?error=$em");
        }
    }
?>