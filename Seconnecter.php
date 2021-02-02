<?php
global $req;
?>
<?php
require('public/partie/TeteSeconnecter.php');
?>
<div class='formConnection'>
<h1>Seconnecter</h1>
<form method='post'>
<input type='email' name='email' placeholder='email' class='input'><br/>
<input type='password' name='mdp' placeholder='mot de passe' class='input'>
<input type='submit' name='env' value='Inscrire' class='subm'>
</form>
</div>
<?php
if (isset($_POST['env'])) {
    if(
      
    isset($_POST['email']) and !empty($_POST['email']) and 
    isset($_POST['mdp']) and !empty($_POST['mdp'])
     ){
        
       $req->Selection($_POST['email'],$_POST['mdp']);
        echo 'enregistrement avec succees';
     }else{
         echo 'veuille remplir toute les champs'; 
     }
}
?>