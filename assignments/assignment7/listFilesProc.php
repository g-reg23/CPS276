<?php
    require_once 'classes/crud.php';
    $crud = new Crud();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">    
    <title>Assignment 7</title>
</head>
<body>
    <div class="container">
        <h1 class='mt-3'>List Files</h1>
        <a class='mt-3' href='index.php' >Add File</a>
        <div class='mt-3'><?php echo $crud->getFiles(); ?></div>
    </div>
</body>
</html>