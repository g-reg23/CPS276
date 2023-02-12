
<?php 
    $table = "<table border='1'>";
    $i = 1;
    while ($i <= 15) {
        $j = 1;
        $table .= '<tr>';
        while ($j < 6) {
            $table .= '<td>Row '.$i.' Cell '.$j.'</td>';
            $j++;
        }
        $table .= '</tr>';
        $i++;
    }
    $table .= '</table>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Exercise3</title>
</head>
<body class="container">
    <p><?php echo $table ?></p>
</body>
</html>