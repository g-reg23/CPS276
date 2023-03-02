<?php 
    class Directories {
        function createDirAndFile() {
            // $old = umask(0);
            $dir = "directories/".$_POST['folderName'];
            echo "**Folder Name**".$dir;
            if ( !file_exists($dir) ) {
                $success = mkdir($dir);
                if ($success) {
                    file_put_contents($dir.'/readme.txt', $_POST['readmetext']);
                }
                return $dir.'/readme.txt';
            } else {
                echo "Folder exists";
            }
            // umask($old);
        }
    }
?>