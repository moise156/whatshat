<?php
session_start();
require('modeles/database.class.php');
$start=new database('localhost','tchat','root','');
$start->bdd;
include('controleurs/controleur.class.php');
$starts=new Controleur();
require('modeles/requette.classe.php');
require('modeles/Achat.Classe.php');
$Achat=new Achat();
$res=new Requettes();
$Titre=new Titres();
$req=new Requettes();
$starts->Root();
require('public/partie/pied.php');
?>