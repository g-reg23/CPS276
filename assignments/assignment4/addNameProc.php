<?php
class AddNamesProc {
    function addClearNames() {
        if(isset($_POST['clearNames'])) {
            return '';
        }else {
            $list = $_POST['namelist'];
            list($first, $last) = explode(' ', $_POST['name']);
            $list .= $last.", ".$first."\r\n";
            $nameArr = explode("\n", $list);
            if (count($nameArr) > 2) {
                natcasesort($nameArr);
            }
            $str = implode("\n",$nameArr);
            return $str;
        }
    }
}

?>