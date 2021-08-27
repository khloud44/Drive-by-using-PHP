<?php
if(isset($_POST['submit'])){                                           //to ensure he is loggin from the correct way
    // echo '<pre>';
    // print_r($_POST);
    // print_r($_FILES['images']);
    // echo '<pre>';

    session_start();                                                   // to open the session


    $images=$_FILES['images'];
    $tmp=$images['tmp_name'];
    $imgName=$images['name'];
    $imgExtension=pathinfo($imgName,PATHINFO_EXTENSION);
    $imgOldName=pathinfo($imgName,PATHINFO_FILENAME);


    if($_POST['imgName']!=NULL){                                         //if he want to rename
        $newNameImg=$_POST['imgName'] . uniqid() .".$imgExtension";
    }else{
        $newNameImg=$imgOldName . uniqid() .".$imgExtension";
    }
    move_uploaded_file($tmp,"upload/$newNameImg");                      // to set the photos in upload file   


    $dir = "upload";                                                  // take all images at upload & put them in array
    $imgPath = scandir($dir);

    $_SESSION['imgPath']=$imgPath;                                   // keep the source of image at session
    // echo "<pre>";
    // print_r($_SESSION['imgPath']);                                 
    // echo "<pre>";
  
    header("location: showImages.php");                                      // go to index page

}else{
    header("location: index.php");
}
