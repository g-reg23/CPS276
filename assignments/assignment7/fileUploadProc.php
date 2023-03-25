<?php 
    require_once 'classes/crud.php';
    class Files {
        function createFile() {
            $crud = new Crud();
            if(array_key_exists('file', $_FILES)){
                //CHECK TO SEE IF A FILE WAS UPLOADED.  ERROR EQUALS 4 MEANS THERE WAS NO FILE UPLOADED
                if ($_FILES["file"]["error"] == 4){
                    return "No file was uploaded. Make sure you choose a file to upload.";
                }
                /*MAKE SURE THE FILE SIZE IS LESS THAN 1000000 BYTES.  THE ERROR EQUALS ONE MEANS THE FILE WAS TOO BIG ACCORDING TO THE SETINGS IN
                post_max_size LOCATED IN THE PHP INI FILE.*/
                elseif($_FILES["file"]["size"] > 1000000 || $_FILES["file"]["error"] == 1){
                    return "The file is too large";
                }
                //CHECK TO MAKE SURE IT IS THE CORRECT FILE TYPE IN THIS CASE JPEG OR PNG
                elseif ($_FILES["file"]["type"] != "application/pdf" ) {
                    return "<p>pdf files only, thanks!</p>";
                }
                //IF ALL GOES WELL MOVE FILE FROM TEMP LCOATION TO THE folderS DIRECTORY 
                elseif (!move_uploaded_file( $_FILES["file"]["tmp_name"], "folders/".$_POST['fileName'])){
                    return "<p>Sorry, there was a problem uploading that file.</p>";
                }
                else {
                    return $crud->addFile();
                }
            }else return "array key not existed";

            
        }
    }
?>