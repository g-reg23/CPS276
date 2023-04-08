<?php 
    require_once 'classes/crud.php';
    
    function addNote() {
        $pdo = new PdoMethods();
        $sql = "INSERT INTO notes_ii (note, date_time) VALUES (:note, :date_time)";
        // $timestamp = strtotime($_POST['dateTime']);

        $bindings = [
            [':note',$_POST['note'],'str'],
            ['date_time', date('Y-m-d H:i:s',strtotime($_POST['dateTime'])), 'int']
        ];
        $result = $pdo->otherBinded($sql, $bindings);
        if($result === 'error'){
            return "There was an error uploading note.";
        }
        else {
            return "Successfully stored note.";
        }
    }

    function getNotes() {
        $pdo = new PdoMethods();
        $start = strtotime($_POST['begDate']);
        $end = strtotime($_POST['endDate']);
        $sql = "SELECT * FROM notes_ii WHERE UNIX_TIMESTAMP(date_time) BETWEEN $start and $end ORDER BY date_time DESC";
        $records = $pdo->selectNotBinded($sql);
        if($records === 'error'){
            echo "<p>There was an error retrieving notes.</p>";
        }
        else {
            if (count($records) === 0) {
                return '<p>No notes found for specified time period</p>';
            }
            $table = '<table class="table table-bordered table-striped"><thead><tr><th width="50%">Date and Time</th><th width="50%">Note</th></tr></thead>';
            foreach ($records as $row) {
                $table .= '<tr><td>'.date("m-d-Y h:i A", strtotime($row['date_time'])).'</td><td>'.$row['note'].'</td></tr>';
            }
            $table .= '</table>';
            return $table;
        }
    }
?>