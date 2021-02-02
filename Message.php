<style>
.contents{
    width:730px;
    height:600px;
    background:white;
    margin-top:-10px;
    float:left;
}
.contenty{
    width:380px;
    height:600px;
    background:white;
    margin-top:-10px;
    border-left:1px solid rgba(0,0,0,0.1);
    float:left;
}
.content{
   
    float:left;
 
}
.entet{
    width:100%;
    height:49px;
    background:white;
    border:1px solid rgba(0,0,0,0.1);
}
.error{
    color:grey;
    margin-top:15px;
    margin-left:10px;
}
.imgs{
    width:40px;
    height:40px;
    border-radius:50%;
    float:left;
    margin-top:-5px;
    margin-left:10px;
    margin-right:10px;
    
}
.groupe_imgs{
    width:37px;
    height:37px;
    border-radius:50%;
margin-top: 6px;
    float:left;
    margin-left:10px;
    margin-right:5px;
    
}
 .p{
    
    margin-top:9px;
    margin-left:15px;


}
.groupe_p{
    
    margin-top:9px;
    margin-left:-10px;


}
.horaire{
    font-family:normal;
    
}
.contentt{
    width:100%;
    height:80%;
    float:left;
    border-bottom:1px solid rgba(0,0,0,0.1);
    font-family:arial;
    overflow:auto;
}
.messagers{
    width:100%;
    height:15%;
    float:left;
    
}
.mess{
    width:100%;
    height:35px;
    border-radius:10px;
    margin-left:10px;
    margin-top:10px;
    float:left;

}
.areas{
    width:90%;
    height:35px;
    padding-left:10px;
    padding-top:10px;
    border-radius:10px;
    border:none;
    outline:none;
    overflow:hidden;
    float:left;
    background:rgb(238, 237, 237);
    resize: none;
}
.ins{
    width:35px;
    height:35px;
    border:none;
    outline:none;
    float:left;
    background:transparent;
    background-image:url('src/3106794.png');
    background-repeat: no-repeat;
    background-size: cover;
    margin-left:10px;
    margin-top:2px;
   
    
}
.imgst{
width:30px;
height:30px;
float:left;
margin-left:10px;
margin-right:20px;
margin-top:10px;
}
.imgste{
width:30px;
height:30px;
float:right;
margin-top:10px;
margin-right:10px;
}
.desc{
    max-width: 200px;
    padding:10px;
    border-radius:10px;
    margin-left:45px;
    margin-top:10px;
   word-break: break-all;

    
}
.pause{
    max-width: 200px;
    padding:10px;
    border-radius:10px;
    margin-left:-35px;
     color: white;
    margin-top:10px;
  background:#0078FF;
   word-break: break-all;
float: left;

    
}
.pauses{
    max-width: 200px;

    padding:10px;
    border-radius:10px;
    margin-right:-30px;
    margin-top:15px;
    background: rgb(219, 219, 219);
   word-break: break-all;

    
}
.droites{
    width: 650px;
    padding:10px;
    border-radius:10px;
     margin-top:10px;
     margin-bottom:10px;
     float:left;
    }    

.exp{
    max-width: 200px;
    padding:10px;
    border-radius:10px;
    margin-right:5px;
    margin-top:10px;
    float:right;
    text-align: right;
    word-break: break-all;

}
.desc p{
margin-left: -3;
}
.gauches{
    width:650px;
    padding:10px;
    border-radius:10px;
    margin-top:10px;
     margin-bottom:10px;
    float: right;
   

}
.gauchesy{
    width:650px;
    padding:10px;
    border-radius:10px;
    margin-top:10px;
     margin-bottom:10px;
    float: right;
   

}
.nos_amie{
    width: 100%;
    height: 600px;
    background: rgba(0,0,0,0.1);
    position: fixed;
    float: left;
    margin-left: -255px;
    margin-top: -28px;
    display: none;

}
.nos_amiez{
     width: 30%;
    height: 580px;
    background: black;
    margin-top: 100px;
    margin: auto;
}
.liste{
    width: 100%;
    height: 100%;
        overflow: auto;

}
.bar_inner{
    width: 100%
    height:70px;
    color: white;
    padding: 10px;

    border-bottom: 2px solid grey;
}
.accepte_refuse{
    width: 200px;
    height: 30px;
     margin-top: 15px;
    float: right;
}
.demande_nom{
    float: left;
    color: white;
    margin-left: -15px;
    margin-top: 15px;
}
.amie_users{
    width: 100%;
    height: 50px;
    border-bottom: 1px solid grey;

}
.btn{
    float: left;
    margin-left: 10px;
    border: none;
outline: none;

}
.pause{
    width: 200px;
    
   
}
.userprofil{

}
</style>
<?php
global $req;
global $start;
?>
<?php 
if(empty($_SESSION['id_users'])){
header('location:http://localhost/tchat/?path=Seconnecter');
}else{
    require('public/partie/tete.php');

    ?>
<div class='content'>

<?php
require('partie/partie.php');

?>
</div>
<div class='contents'>
<div class='entet'>
<?php
if (isset($_GET['path']) AND $_GET['path']=='Messanger') {
    # code...
if(isset($_GET['id']) AND !empty($_GET['id'])){
    $id=intval($_GET['id']);
 $datas=$req->Boucle($_SESSION['id_users']);
$datos=$req->Echange($id);
if (is_array($datos) || is_object($datos)){  
foreach ($datos as $key => $values) {
if(isset($datas['id']) AND !empty($datas['id'])){
?>
<div class='compte'>
<img src='src/<?php echo $values['photo']?>' class='imgs'>
<p class='p'><?php echo ucfirst($values['nom']).'-'. ucfirst($values['prenom'])?></p>
<div class="right" style="float:right;margin-top: -15px;margin-right: 10px;">
    <a href="" style="list-style: none;text-decoration: none;color: grey" class="">voir les amies</a>

</div>
<div class="nos_amie">
    <div class="nos_amiez">
        <div class="bar_inner">
         <p>Vos demande damie</p>  
        </div>
        <div class="liste">
          <?php 

$liste=$start->bdd->query("SELECT amie.email_bloquer,amie.id_amie,amie.email ,amie.status,amie.email_ex as mail,users.id_users,users.nom,users.prenom,users.photo,users.email,users.datadec,users.enligne FROM users INNER JOIN amie ON users.email=amie.email  OR users.email=amie.email_ex WHERE users.email='".$_SESSION['id_users']."' OR users.email <> '".$_SESSION['email']."'  AND users.id_users <>'".$_SESSION['id_users']."'");
/*$liste=$start->bdd->query("SELECT amie.id_amie,amie.email,amie.status,amie.email_ex,users.id_users,users.nom,users.prenom,users.photo,users.email,users.datadec,users.enligne FROM users,amie WHERE id_users <>'".$_SESSION['id_users']."' AND  amie.email='".$_SESSION['email']."'  ");*/
while($listes=$liste->fetch()){
    ?>
<div class="amie_users">
    <img src="src/<?php echo $listes['photo']  ?>" class='imgst'><p class="demande_nom"><?php echo $listes['nom'].''.$listes['nom'];  ?></p><div class="accepte_refuse">
           <form method="post"> 
        <?php 
        
            # code...
   
if ($listes['status']==1) {
    if ($listes['mail']<>$_SESSION['email'] AND $listes['status']==1) {

?>

        <button class="accepter btn">Accepter</button>
        <?php
  }
else{
echo "<p style='color:white;float:left;font-size:14px;margin-right:5px'>demande encours</p>";
  ?>

  <?php        
        }
}elseif ($listes['status']==2) {
         ?>
              
          <button class="amies  btn">Amies</button>
          <?php 
if ($listes['email_bloquer']==$listes['mail'] OR $listes['email_bloquer']==$listes['mail'] AND $listes['status']==3) {
    ?>
           <button class="bloquer  btn">Debloquer</button>
           <?php

}
           ?>
        <button class="bloquer  btn">Bloquer</button>
    <?php } 
?>
        <button class="refuse  btn">Supprimer</button>
        </form>

    </div>
</div>
    <?php
         # code...
}
           ?>  
        </div>
    </div>
   
</div>
<p class='horaire'>
<?php
if(isset($values['enligne']) and $values['enligne']==1){
 echo 'Enligne';
}else{

date_default_timezone_set("GMT");  
$datast=$req->facebook_time_ago($values['datadec']); 
echo $datast;
}

?>
</p>
</div>

<?php
}
}
}else{
    echo '<p class="error">Aucun Utilisateur</p>';
}
}
}
elseif (isset($_GET['path']) AND $_GET['path']=='Groupes' AND empty($_GET['id'])) {
    ?>
    <div class='compte'>
    <img src="src/<?php echo $_SESSION['photo']  ?>"  class='groupe_imgs'>
</div>
   <p class='groupe_p'> <?php  echo $_SESSION['nom'];  ?> <?php  echo $_SESSION['prenom'];  ?></p>
    <?php
}


?>
</div>
<div class='contentt'>
    <?php
    if(!isset($_GET['id'])){
        $datast= '';

        }
    if(isset($_GET['id'])){
    $id=intval($_GET['id']);
     $datast=$req->Boucles($id,$_SESSION['id_users']);
     $datos=$req->Echange($id);

      $datastes=$req->Ajourmis($id,$_SESSION['id_users']);
    }else{
        if (isset($_GET['path']) AND $_GET['path']=='Messanger') {
           echo '<p class="error">Aucun Message</p>';        }
        
    }

if (is_array($datast) || is_object($datast)){  
foreach ($datast as $key => $value) {

if (isset($value['id_dest']) AND $value['id_dest']===$id OR $value['id_dest']==$_SESSION['id_users'] ) {
    date_default_timezone_set('GMT'); 
    //UTC 
    $dataste=$req->facebook_time_agmessanger($value['datames']); 


    ?>

<div class='droites'>
<img src='src/<?php echo $value['photo']?>' class='imgst'>
<div class='desc'>
<p><?php echo ucfirst($value['nom']).''.ucfirst($value['prenom']);?></p>
   <p class='pause'><?php echo str_rot13($value['messages'])?></p>
   <p><?php echo $dataste?></p>
</div>
</div>
<?php
}elseif(isset($value['id_exp']) AND $value['id_exp']===$_SESSION['id_users'] OR $value['id_exp']==$_SESSION['id_users']  ){
    date_default_timezone_set('GMT');  
    $dataste=$req->facebook_time_agmessanger($value['datames']);
?>
<div class='gauches'>
<img src='src/<?php echo $_SESSION['photo']?>' class='imgste'>
<div class='exp'>
<p><?php echo ucfirst($_SESSION['nom']).''.ucfirst($_SESSION['prenom']);?></p>
<p class='pauses'><?php echo str_rot13($value['messages']);?></p>
<p><?php echo  $dataste?></p>
</div>
</div>
<?php
}
}
?>
<?php

     
    }
if (isset($_GET['path']) AND $_GET['path']=='Groupes' AND empty($_GET['id'])) {
    if (isset($_GET['id_groupe'])) {
 $users=$req->Message_groupe($_SESSION['id_users']);
  
 if (is_array($users) || is_object($users)){  
foreach ($users as $key => $value_group) {
       date_default_timezone_set('GMT');  
      $date_g=$req->facebook_time_agmessanger($value_group['datames']);
    if ($value_group['id_membre']==$_SESSION['id_users']) {


 ?>
 <div class='droites'>
<img src='src/<?php echo $value_group['photo']?>' class='imgst'>
<div class='desc'>
<p><?php echo ucfirst($value_group['nom']).''.ucfirst($value_group['prenom']);?></p>
   <p class='pause'><?php echo $value_group['messages']?></p>
   <p><?php echo $date_g ?></p>
</div>
</div>
<?php 
      # code...
    }else{
 ?>
 <div class='gauches'>
<img src='src/<?php echo $value_group['photo']?>' class='imgste'>
<div class='exp'>
<p><?php echo ucfirst($value_group['nom']).''.ucfirst($value_group['prenom']);?></p>
<p class='pauses'><?php echo $value_group['messages'];?></p>
<p><?php echo $date_g ?></p>
</div>
</div>
 <?php
}
?>
 <?php
  }
}
       # code...
    }else{
        ?>
        <p class="error">Selectionner le groupe</p>
        <?php
    }

}

  ?>
</div>
<div class='messagers'>
<div class='mess'>
<form method='post' id="#form_listeCible" action="?path=Messanger&id=<?php echo $_GET['id'] ?>">
<textarea class='areas' placeholder='Entrer le Message.....' name='message' id="idItem" ></textarea>
<input type='submit' value='' class='ins' name='env'>
</form>
<div id="div_creation">
    
</div>
</div>
<?php
if(isset($_GET['id'])){
    $id=intval($_GET['id']);
     $datast=$req->Boucles($id,$_SESSION['id_users']);
    }else{
        $id='';
    }

$datats=$req->Boucler($_SESSION['id_users']);

if(isset($_POST['env'])){
if(
isset($_POST['message']) and !empty($_POST['message']) and
isset($_SESSION['id_users']) and !empty($_SESSION['id_users']) 
){
    $id=intval($_GET['id']);
    $message=str_rot13($_POST['message']);
 if (isset($id) AND !empty($id)) {
    $req->Messanger($id,$_SESSION['id_users'],$message);
 }else{
    $req->Messanger($id,$_SESSION['id_users'],$message);
 }

}
}

?>
</div>
</div>
<div class='contenty'>
<?php if (isset($datas['id'])) {
if(isset($_GET['id']) AND !empty($_GET['id'])){
    $id=intval($_GET['id']);
 $datas=$req->Boucle($_SESSION['id_users']);
$datos=$req->Echange($id);
if (is_array($datos) || is_object($datos)){  
foreach ($datos as  $values) {

 ?>
<div class="userprofil">

<img src='src/<?php echo $values['photo']?>' class='imgstes' style='width:200px;height:200px;margin-top:20px;margin-left: 25%;float: left;'>
<a href="" style="margin-left: 100px;color: grey;text-decoration: none;"><?php echo ucfirst($values['nom']).''.ucfirst($values['prenom']);?></a>
</div>
<?php
    # code...

}
}
}
}
?>
<?php
if (isset($_GET['path']) AND $_GET['path']=='Groupes' AND empty($_GET['id'])) {
    if (isset($_GET['id_groupe'])) {
 $users=$req->Message_groupes($_SESSION['id_users']);
  
 if (is_array($users) || is_object($users)){  
foreach ($users as $key => $value_groups) {
     ?>
<div class="userprofil">

<img src='src/<?php echo $value_groups['photo']?>' class='imgstes' style='width:200px;height:200px;margin-top:20px;margin-left: 25%;float: left;'>
<a href="" style="margin-left: 100px;margin-top:10px;float:left;color: grey;text-decoration: none;"><?php echo ucfirst($value_groups['nom']).''.ucfirst($value_groups['prenom']);?></a><?php 
if ($value_groups['admistrateur']=='1') {
    ?>
    <img src="src/admistrator.png" style="width: 15px;height: 15px;margin-top: 13px;margin-left: 10px;float: left;">
    <?php
}
 ?>
</div>
<?php
}
}
}
}
?>
</div>
<script type="text/javascript">
    $(document).ready( function(){
$('.contentt').load('message.php');
refresh();
});
 
function refresh()
{
setTimeout( function() {
  $('.contentt').fadeOut('slow').load('message.php').fadeIn('slow');
  refresh();
}, 2500);
}
</script>
<?php

/*$string = '中國是我的家';

$encrypted = rot13encrypt ($string); // produces 5Yvg5MlY5cvi5bvE55dR5n62

$decrypted = rot13decrypt ($encrypted); // produces 中國是我的家*/
}
?>