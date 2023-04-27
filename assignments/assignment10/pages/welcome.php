<?php

function init(){
    session_start();
    if($_SESSION['access'] !== "accessGranted"){
        header('Location: index.php?page=login');
    }
    return ["<h1>Welcome</h1>","<p>Welcome Greg Stauffer.  Click one of the lines above</p>"];
}

?>