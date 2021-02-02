<?php
global $start;
?>
<style>
.div1{
    width:251px;
    height:600px;
    background:white;
    overflow:auto;
    border-right:1px solid rgba(0,0,0,0.1);
    float:left;
    margin-top:-10px;
    
   
}
.src{
    width:170px;
    height:170px;
    border-radius:10%;
    margin-left:35px;
    margin-top:15px;

}
.pp{
   text-align: center;
   margin-top: -35px;
   margin-bottom: 20px;
   margin-left: -27px;
       
}
.navs{
    width:100%;


}
.navs .uls{
    list-style:none;
}
.navs .uls li {
    display:block;
}
.navs .uls li a{
text-decoration:none;
padding:5px;
padding-top: 5px;
display:block;
color: black;
margin-top: 10px;

}
.active{
background:rgba(0,0,0,0.3);
padding: 1px;
}
.user{
    width:100%;
    height:60px;
    border-bottom:1px solid rgba(0,0,0,0.1);
    float:left;
}
.img{
    width:50px;
    height:50px;
    margin-top:5px;
    border-radius:50%;
    margin-left:5px;
    margin-bottom:5px;
    float:left;
}
.nom{
    margin-top:15px;
    margin-left:10px;
    color: grey;
    font-size:15px;
    
}
.noms{
    margin-top:15px;
    margin-left:10px;
    color:  rgb(50, 45, 121);
    font-size:15px;
    
}
.onligne .img{
    width:15px;
    height:15px;
    float:right;
    margin-top:-15px;
    margin-right:5px;
}
.onligne .imgs{
    width:12px;
    height:12px;
    float:right;
    margin-top:-15px;
    margin-right:5px;
}
.rech{
    width:100%;
    height:50px;
    border-bottom:1px solid rgba(0,0,0,0.1);
    margin-bottom:105px;
    float:left;
    
    
}
.input{
    background:rgb(219, 217, 217);
    padding-left:10px;
    color:white;
    outline:none;
    border:none;
    width:220px;
    border-radius:10px;
    height:32px;
    margin-left:8px;
    margin-top:10px;
    background-attachment: fixed;
    float:left;

}
.inpt{
    width:22px;
    height:22px;
    background-repeat: no-repeat;
    border:none;
    margin-top:15px;
    margin-left:-25px;
    background:transparent;
    background-size:100%;
    background-image:url('src/194_Instagram_Search_Sets-512.png');
    float:left;
    outline:none;
}
.message{
    float:left;
    margin-left:7px;
    font-family:normal;
    color:grey;
}
.isco{
    background: transparent;
    width: 30px;
    height: 30px;
    font-size: 10px;
    margin-right: 6px;
    margin-left: 6px;
    margin-top: -9px;
    float: left;
}
.src{
    width: 50px;
    height: 50px;
    margin-left: 15px;
    margin-top: 5px;

}
</style>

<div class='div1'>


<div class='rech'>

<?php
if(isset($_GET['path'])  and $_GET['path']=='Messanger'){
    ?>
<form method='post'>
<input type='text' name='recherche' class='input' placeholder='Rechercher....'/>
<input type='submit' name='recherche' value=''  class='inpt'/>
</form>
    <?php
    global $req;
global $start;

$bddse=$start->bdd->query("SELECT amie.email,amie.email_ex,users.id_users,users.nom,users.prenom,users.photo,users.email,users.datadec,users.enligne FROM users INNER JOIN amie ON users.email=amie.email  OR users.email=amie.email_ex WHERE users.email='".$_SESSION['id_users']."' OR users.email <> '".$_SESSION['email']."'  AND users.id_users <>'".$_SESSION['id_users']."' AND status=2");
while($bddset=$bddse->fetch()){
if($bddset['enligne']=="1"){
?>

<a href="?path=Messanger&id=<?php echo  $bddset['id_users'];?>">
<div class='user'>
<img src='src/<?php echo $bddset['photo'] ?>' class='img'>
<p class='noms'><?php echo ucfirst($bddset['nom']) .'-'. ucfirst($bddset['prenom'])

?></p>
<p class='message'><?php 
$laf='';
 if(isset($_GET['id'])){
    $id=intval($_GET['id']);
   
     }
    $laf=$req->Compteur($bddset['id_users'],$_SESSION['id_users']);  
      $laft=$req->Limite($_SESSION['id_users'],$bddset['id_users']);
      $boucle=$req->Boucler($_SESSION['id_users']);
if (is_array($laf) || is_object($laf)){ 

foreach ($laf as $key => $value) {
foreach ($laft as $key => $values) {
    if (isset($value['messages'])) {
    
    echo str_rot13($value['messages']);if ($values['compteurs']>=1) {
       echo '<div style="width:10px;height:10;background:red;color:white;margin-left:10px;float:left;padding:5px;text-align:center;border-radius:50%">'.$values['compteurs'] .'</div>';
    }

}else{
    echo 'pas de message';
}
    # code...
    }
}


}
?></p>
<p class='onligne'><i><img src='src/335-3354103_home-icon-button-png-green-online-icon-png.png' class='img'></i></p>
</div>
</a>
<?php
}elseif($bddset['enligne']=="0"){
?>
<a href="?path=Messanger&id=<?php echo $bddset['id_users'];?>">
<div class='user'>
<img src='src/<?php echo $bddset['photo'] ?>'  class='img'>
<p class='nom'><?php echo ucfirst($bddset['nom']) .'-'. ucfirst($bddset['prenom'])?></p>
<p class='message'><?php 
$laf='';
 if(isset($_GET['id'])){
    $id=intval($_GET['id']);
   
     }
       $lafs=$req->Compteur($bddset['id_users'],$_SESSION['id_users']);  
      $laft=$req->Limite($_SESSION['id_users'],$bddset['id_users']);
if (is_array($laf) || is_object($laf)){  
foreach ($lafs as $key => $value) {
foreach ($laft as $key => $values) {
    echo $value['messages'];
      echo  '<div style="width:10px;height:10;background:red;color:white;margin-left:10px;float:left;padding:5px;text-align:center;border-radius:50%">'.$values['compteurs'] .'</div>';
    

}
}


}
?></p>
<p class='onligne'><i><img src='src/unnamed.png'  class='imgs'></i></p>
</div>
</a>
<?php
}
}
?>

<?php
}elseif(isset($_GET['path']) AND $_GET['path']=='Groupes'){
    ?>
    <form method='post'>
<input type='text' name='recherche' class='input' placeholder='Rechercher....'/>
<input type='submit' name='recherche' value=''  class='inpt'/>
</form>
<?php
$groupes=$start->bdd->query("SELECT groupes.id_groupe,groupes.nom_groupe,groupes.photo,membre_groupes.id_membre,membre_groupes.id_groupe  FROM Groupes, membre_groupes WHERE groupes.id_groupe=membre_groupes.id_groupe AND id_membre='".$_SESSION['id_users']."' ");



while($groupe=$groupes->fetch()){
$mes=$res->Mes($_SESSION['id_users']);
 if (is_array($mes) || is_object($mes)){  
foreach ($mes as $key => $value_groupes) {
  ?>
<a href="?path=Groupes&id_groupe=<?php echo $groupe['id_groupe'];?>">
<div class='user'>
    <img src="src/<?php echo $groupe['photo'] ?>"  class='img'>
    <p  class='noms'><?php  echo $groupe['nom_groupe']  ?></p>
    <p class='message'><?php echo $value_groupes['messages']?></p>
</div>
</a>
<?php
}
}
 } ?>
<?php 

}elseif(isset($_GET['path']) or !isset($_GET['path']) or $_GET['path']=='Membre' or $_GET['path']=='Paiement'){
?>
<?php 
$result=$res->RequeUsers($_SESSION['id_users']);
foreach ($result as $value) {

?>
<img src='src/<?php echo $value['photo'] ?>' class='src'>
<p class='pp'><?php echo ucfirst($value['nom']).'-'. ucfirst($value['prenom'])  ?></p>
<nav class='navs'>
<ul class='uls'>
<li class='<?php if($_GET["path"]=="Membre"){echo "active";}?> '>

<a href='?path=Membre'><i><img src="src/favicon-24x24.png" class="isco"></i>Membre</a>
</li>
<li>
<a href='?path=Messanger'><i><img src="src/favicon-24x242.png" class="isco"></i>Message</a>
</li>
<li>
<a href='?path=Paiement' class=" "><i><img src="src/imagespaiement.png" class="isco"></i>Paiment</a>
</li>
<li>
<a href='?path=Parametre' class="<?php if($_GET["path"]=="Parametre"){echo "active";}?> "><i><img src="src/125623-200.png" class="isco"></i>Parametre</a>
</li>
</ul>
</nav>
<?php
}
}
?>

</div>
<div>
</div>