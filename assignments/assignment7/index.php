<?php
    require_once 'fileUploadProc.php';
    $output = "";
    if(count($_POST) > 0) {
        // echo $_POST['fileName'];
        $files = new Files();
        $output = $files->createFile();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">    
    <title>Assignment 5</title>
</head>
<body>
    <div class="container">
        <h1 class='mt-3'>File Upload</h1>
        <a href='fileList.php' >Show File List</a>
        <p><?php echo $output ?>
        <form method='post' action='index.php' enctype="multipart/form-data">
            <div class='row mt-2'>
                <label for="fileName" class="form-label">File Name</label>
                <input type="text" class="form-control" id="fileName" name='fileName' >
            </div>
            <div class='mt-2'>
                <input type="file" value="Choose File" name="file" id="file">
            </div>
            <div class='mt-2'>
                <input class="btn btn-primary btn-sm" type="submit" value="Upload File" name="submit" id="submit">
            </div>
        </form>
    </div>
</body>
</html>