<?php 
    class Directories {
        function createDirAndFile() {
            try {
                $dir = "directories/".$_POST['folderName'];
                if ( !file_exists($dir) ) {
                    $success = mkdir($dir);
                    if ($success) {
                        file_put_contents($dir.'/readme.txt', $_POST['readmetext']);
                    }
                    return $dir.'/readme.txt';
                } else {
                    return "A directory already exists with that name";
                }
            }catch(Exception $e) {
                return "Error creating file";
            }
        }
    }
?>