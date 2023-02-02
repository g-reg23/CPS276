


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>MySQL PHP Test</title>
    <style type="text/css">
        body {
            text-align:center;
        }
        input, textarea {
            margin: 10px 0;
        }

    </style>
</head>
<body class="container">
    <h1>Input form</h1>
    <form method='post' action='index.php'>
        <input type='text'name='name' placeholder='Name' id='nameInput'/><br />
        <textarea class='textarea' placeholder='Some Text Here' rows='5' cols='22'></textarea><br />
        <label><input type='checkbox' name='size' checked>Small</label>
        <label><input type='checkbox' name='size'>Medium</label>
        <label><input type='checkbox' name='size'>Large</label><br />
        <select>
            <option value='blue'>Blue</option>
            <option value='red'>Red</option>
            <option value='yellow'>Yellow</option>
            <option value='black'>Black</option>
            <option value='white'>White</option>
        </select><br />
        <input type='file' accept='application/pdf'/><br />
        <?php
            if(isset($_POST['submit'])) {
                echo '<p>button clicked</p>';
            }
        ?>
        <input type='submit' name='submit'> 
    </form>
</body>
</html>