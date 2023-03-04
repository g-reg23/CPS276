<?php
    $link = '';
    $message = '';
   if(count($_POST) > 0){
    if (strlen($_POST['readmetext']) === 0 || strlen($_POST['folderName']) === 0) {
        $message = "Please fill out the form";
    } else {
        $message = '';
        require_once 'directories.php';
        $directory = new Directories();
        $file = $directory->createDirAndFile();
        if ($file === 'A directory already exists with that name' || $file === 'Error creating file') {
            $message = $file;
        }
        else {
            $link = "https://russet-v8.wccnet.edu/~sgm114/assignments/assignment5/".$file;
            $message = "File and directory were created.";
        }
    }
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
        <h1 class='mt-3'>File and Directory Assignment</h1>
        <p>Enter a folder name and the contents of a file. Folder names should contain alpha numeric characters only.</p>
        <p><?php echo $message ?></p>
        <?php echo strlen($link) > 0 ? "<p><a href='{$link}'>Path where file located</a></p>" : "" ?>
        <form method='post' action='index.php'>
            <div class='row mt-2'>
                <label for="folderName" class="form-label">Folder Name</label>
                <input type="text" class="form-control" id="folderName" name='folderName' >
            </div>
            <div class="row mt-2">
                <label for="namelist" class="form-label">File Content</label>
                <textarea style="height: 150px;" class="form-control" id="readmetext" name="readmetext"></textarea>
            </div>
            <div class='mt-2'>
                <input class="btn btn-primary btn-sm" type="submit" value="Submit" name="submit" id="submit">
            </div>
        </form>
    </div>
</body>
</html>