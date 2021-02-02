<?php
global $req;
?>
<?php
require('public/partie/TeteSeconnecter.php');
?>
<div class='formInscript'>
<h1>inscription</h1>
<form method='post'>
<input type='text' name='nom' placeholder='nom' class='input'><br/>
<input type='text' name='prenom' placeholder='prenom' class='input'><br/>
<select class='sel1' name='pays'>

<?php 
$pays=array('pays' => "Pays",'Burundi' => "Bururndi",'RDC' => "Rdc",'Angola' => "Angola",'Rwanda' => "Rwanda" );
foreach ($pays as $value) {
    ?>
    <option name='p'>
    <?php     echo $value;?>
    </option>
    <?php
}
?>

</select><br/>
<select  class='sel2'  name='jour'>
<?php 
if ($mois=2) {
    $jour=28;
}else{
    $jour=30;
}
for ($i=1; $i<=$jour ; $i++) { 
    
    ?>
    <option name='j'>
    <?php
     if($i==1){
     echo 'jour';
    }else{
     echo $i;
    }
    ?>
    </option>
    <?php
}
?>
</select>
<select  class='sel2' name='mois'>
<?php 
$mois=12;
for ($i=0; $i <=$mois ; $i++) { 
    
    ?>
    <option name='m'>
    <?php
     if($i==0){
        echo 'mois';
    }else{
        echo $i;
    };?>
    </option>
    <?php
}
?>
</option>
</select>
<select class='sel2' name='annees'>
<?php 
$annees=2021;
for ($i=1900; $i <=$annees ; $i++) { 
    
    ?>
    <option name='a'>
    <?php 
    if($i==1900){
        echo 'annees';
    }else{
        echo $i;
    }
    ?>
    </option>
    <?php
}
?>
</option>
</select>
<br/>
<input type='radio' name='sexe' value='Homme' class='sexe' id ='h'><label for='h'>H</label><input type='radio' name='sexe' value='Femme' class='sexe' id='f'><label for='f'>F</label><br/>
<input type='email' name='email' placeholder='email' class='input'><br/>
<input type='password' name='mdp' placeholder='mot de passe' class='input'>
<input type='submit' name='env' value='Inscrire' class='subm' onclick="">
</form>
</div>
<?php
if (isset($_POST['env'])) {
    if(
        isset($_POST['nom']) and !empty($_POST['nom']) and 
        isset($_POST['prenom']) and !empty($_POST['prenom']) and 
        isset($_POST['pays']) and $_POST['pays']!='p' and 
        isset($_POST['jour']) and $_POST['jour']!='j' and 
        isset($_POST['mois']) and $_POST['mois']!='m' and
        isset($_POST['annees']) and $_POST['annees']!='a' and 
        isset($_POST['sexe']) and !empty($_POST['sexe']) and 
        isset($_POST['email']) and !empty($_POST['email']) and 
        isset($_POST['mdp']) and !empty($_POST['mdp'])
     ){
         $date=$_POST['jour'].'/'.$_POST['mois'].'/'.$_POST['annees'];
        $req->Insertion($_POST['nom'],$_POST['prenom'],$_POST['pays'],$_POST['email'],$date,$_POST['mdp'],$_POST['sexe']);

     }else{
         echo 'veuille remplir toute les champs'; 
     }
}
?>