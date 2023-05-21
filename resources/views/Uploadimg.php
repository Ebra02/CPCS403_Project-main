<?php

if (isset($POST['submit']) && isset($FILES['image'])) {

    echo "<pre>";
    print_r($FILES['Uploadimage']);
    echo "</pre>";


    $img_name = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $error = $_FILES['image']['error'];
    
    if($error == 0){
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);

        $allowed_exs = array("jpg","jpeg","png");

        if(in_array($img_ex_lc, $allowed_exs)){
            $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
            $img_upload_path = 'uploaded/'.$new_img_name;
            move_uploaded_file($tmp_name,$img_upload_path);


        }else{
            $em = "error";
            header("route('home')");

        }

    }else{
        $em = "error";
        header("route('home')");


    }
    header("route('home')");
}