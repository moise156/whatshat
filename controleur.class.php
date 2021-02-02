<?php
class  Controleur 
{
    
    public function Root()
    {
        
        if(empty($_GET['path'])){
            require('public/accueil.php');
        }
        elseif(isset($_GET['path']) AND !empty($_GET['path']) AND $_GET['path']=="Membre"){
            require('public/accueil.php');
        }elseif(isset($_GET['path']) AND !empty($_GET['path']) AND $_GET['path']=="Dec"){
            require('public/deconnection.php');
        }
        elseif(isset($_GET['path']) AND !empty($_GET['path']) AND $_GET['path']=="Seconnecter"){
            require('public/Seconnecter.php');
        }elseif(isset($_GET['path']) AND !empty($_GET['path']) AND $_GET['path']=="Inscription"){
            require('public/Inscription.php');
        }
        elseif(isset($_GET['path']) AND !empty($_GET['path']) AND $_GET['path']=="Messanger" OR $_GET['path']=='Groupes'){
            require('public/Message.php');
        } elseif(isset($_GET['path']) AND !empty($_GET['path']) AND $_GET['path']=="Paiement"){
            require('public/paiment.php');
        } elseif(isset($_GET['path']) AND !empty($_GET['path']) AND $_GET['path']=="Parametre"){
            require('public/parametre.php');
        }
        else{
            require('public/404.php');
        }
    }
}

?>