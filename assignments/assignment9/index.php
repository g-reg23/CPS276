<?php
    require_once 'notesProc.php';
    $output = "";
    if(count($_POST) > 0) {
        $output = addNote();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">    
    <title>Assignment 9</title>
</head>
<body>
    <div class="container">
        <h1 class='mt-3'>Add Note</h1>
        <a href='getNotes.php' >Display notes</a>
        <p><?php echo $output ?></p>
        <form method='post' action='index.php' enctype="multipart/form-data">
            <div class='row mt-2'>
                <label for="dateTime" class="form-label">Date Time</label>
                <input type="datetime-local" class="form-control" id="dateTime" name="dateTime">
            </div>
            <div class='mt-2'>
                <label for="note" class="form-label">Note</label>
                <textarea style="height: 300px;" class="form-control" id="note" name="note"></textarea>
            </div>
            <div class='mt-2'>
                <input class="btn btn-primary btn-sm" type="submit" value="Add Note" name="submit" id="submit">
            </div>
        </form>
    </div>
</body>
</html>