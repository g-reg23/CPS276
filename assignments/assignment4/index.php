<?php
    $output = '';
    if(count($_POST) > 0){
        require_once 'addNameProc.php';
        $addName = new AddNamesProc();
        $output = $addName->addClearNames();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">    
    <title>Assignment 4</title>
</head>
<body>
    <div class="container">
        <h1 class='mt-3'>Add Names</h1>
        <form method='post' action='index.php'>
            <div class='mt-2'>
                <input class="btn btn-primary btn-sm" type="submit" value="Add Name" name="addName" id="addName">
                <input class="btn btn-primary btn-sm" type="submit" value="Clear Names" name="clearNames" id="clearNames">
            </div>
            <div class='row mt-2'>
                <label for="name" class="form-label">Enter Name</label>
                <input type="text" class="form-control" id="name" name='name' >
            </div>
            <div class="row mt-2">
                <label for="namelist" class="form-label">List of Names</label>
                <textarea style="height: 500px;" class="form-control" id="namelist" name="namelist"><?php echo $output ?></textarea>
            </div>
        </form>
    </div>
</body>
</html>