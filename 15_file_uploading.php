<?php

$allowed_ext= array('png', 'jpeg', 'jpg', 'gif');


if(isset($_POST['submit'])){
// Check if file was uploaded
    if(!empty($_FILES['upload']['name'])){
        // print_r($_FILES);
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp = $_FILES['upload']['tmp_name'];
        $target_dir = "uploads/${file_name}";

        // Get File Extensions
        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));
        // echo $file_ext;


        // Validate File Type/Extensions
        if(in_array($file_ext, $allowed_ext)){

            // Validate File Size
            if($file_size <= 1000000){
                // 1000000 bytes = 1 MB

                // Move the file
                move_uploaded_file($file_tmp, $target_dir);

                // Success Message
            echo '<p style="color: green;">File Uploaded!! </p>';
            }else{
                echo '<p style="color: red;"> File is too large!!</p>';
            }
        }
        else{
            $message = '<p style="color: red;"> Invalid File Type!! </p>';
        }

    }

    else{
        $message = '<p style="color: red;"> Please Choose a File </p>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <?php echo $message ?? null; ?>
    <form action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>"
    method = "POST" enctype="multipart/form-data">
    Select an Image to Upload:
    <input type="file" name="upload">
    <input type = "submit" value = "Submit" name = "submit">
    </form>
</body>
</html>