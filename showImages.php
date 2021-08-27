<?php
session_start();
// echo "<pre>";
// print_r($_SESSION);
// echo "<pre>";
// echo "<pre>";
// print_r($_SESSION['imgPath']);
// echo "<pre>";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='CSS/all.min.css'>
    <link rel='stylesheet' href='CSS/bootstrap.min.css'>
    <title>Image Show</title>
</head>
<body>
    
    <?php
    foreach ($_SESSION['imgPath'] as $value) {
    ?>
    <a download='<?php  echo $value  ?>' href='upload/<?php echo $value ?> '>         <!--  to dwonload the image -->
      <img class='w-25 ' src="upload/<?php echo $value ?> ">
      </a>
    <?php
    }
    ?>
     <script src='JS/jquery-3.5.1.slim.min.js'></script>
    <script src='JS/popper.min.js'></script>
    <script src='JS/bootstrap.min.js'></script>
</body>
</html>














   