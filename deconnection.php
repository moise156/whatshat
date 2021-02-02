<?php

if(isset($_GET['path']) and $_GET['path']=='Dec' and isset($_SESSION['id_users']) and !empty($_SESSION['id_users'])){
    global $req;
    $req->Deconnection($_GET['path'],$_SESSION['id_users']);
    echo '<script language="Javascript">
    <!--
    document.location.replace("http://localhost/tchat/?path=Seconnecter");
    // -->
    </script>';
}