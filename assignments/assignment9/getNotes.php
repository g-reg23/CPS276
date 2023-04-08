<?php
    require_once 'notesProc.php';
    $output = "";
    if(count($_POST) > 0) {
        $output = getNotes();
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
        <h1 class='mt-3'>Display Notes</h1>
        <a class='mt-3' href='index.php' >Add Note</a>
        <form method='post' action='getNotes.php' enctype="multipart/form-data">
            <div class='row mt-2'>
                <label for="begDate" class="form-label">Beginning Date</label>
                <input type="date" class="form-control" id="begDate" name="begDate">
            </div>
            <div class='row mt-2'>
                <label for="endDate" class="form-label">Ending Date</label>
                <input type="date" class="form-control" id="endDate" name="endDate">
            </div>
            <div class='mt-2'>
            <input class="btn btn-primary btn-sm" type="submit" value="Get Notes" name="submit" id="submit">
        </div>
        </form>
        <div class="table-responsive mt-3"><?php echo $output ?></div>
    </div>
</body>
</html>