<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
</head>
<body>
    <form action="handle-uploadImages.php" method='POST' enctype='multipart/form-data'>
         <input type="file" name='images'>
         <input type="text" name='imgName' placeholder='Enter New Name'>
         <button type='submit'name='submit'>Upload</button>
    </form>
</body>
</html>