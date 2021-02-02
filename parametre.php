<style type="text/css">
         .contens{

    float:left;
    

}
   .pub_icone{
              width: 1070px;
            height:559px;
            margin: auto;
            padding: 10px;
            margin-left: 10px;
            overflow: auto;
            float: left;
        }
.amie{
  width: 1000px;
  height: 90px;
  background: white;
  margin-left: 20px;
}
.Update{
    width: 1000px;
  height: 400px;
  background: white;
  margin-left: 20px;
  margin-top: 10px;
}
.pub{
      width: 1000px;
  height: 150px;
  background: white;
  margin-left: 20px;
  margin-top: 10px;
}
.signale{
  width: 980px;
  height: 30px;
  margin-top: 10px;
  margin-left: 10px;
  padding-left: 10px;
  outline: none;
}
.signales{
  width: 485px;
  height: 30px;
  float: left;
  margin-top: 10px;
  margin-left: 10px;
  padding-left: 10px;
  outline: none;
}
#amie_btn{
  background: green;
  outline: none;
  border: none;
  padding: 8px;
  margin-left: 10px;
color: white;

}
#amie_btns{
    width: 982px;
      height: 30px;
  background: green;
  outline: none;
  border: none;
  padding: 8px;
  margin-left: 10px;
color: white;

}
#upd{
    width: 970px;
    margin-left: 10px;
    padding-top: 10px;
    color: white;
    float: left;
    padding-left: 10px;
  height: 25px;
  background: orange;
}
</style>

<?php 
global $res;
if(isset($_SESSION['id_users']) AND !empty($_SESSION['id_users'])){
  

require('public/partie/tete.php');
?>
<div class='contens'>
<?php
require('partie/partie.php');

?>
</div>
<div class="pub_icone">    
<div class="amie">
  <form method="post">
    <input type="email" name="mails" placeholder="Entrer l'email desvos amies que vous savez pour demander les amie " class="signale">
    <input type="submit" name="ens" value="demande d'amis" id="amie_btn">
  </form>
  <?php 
if (isset($_POST['ens'])) {
 if (isset($_POST['mails'])) {
 $rev=$res->Mailusers($_POST['mails'],$_SESSION['email']);
}
}

   ?>
</div>
<div class="Update">
   <form method="post"  enctype='multipart/form-data'>
    <input type="text" name="nom" placeholder="Entrer votre Nom " class="signale" value="<?php echo $_SESSION['nom'] ?>">
    <input type="text" name="prenom" placeholder="Entrer votre Prenom " class="signale" value="<?php echo $_SESSION['prenom'] ?>">
    <input type="text" name="sexe" placeholder="Entrer votre sexe " class="signale"  value="<?php echo $_SESSION['sexe'] ?>">
    <label for="pasteque" id="upd">Uploader votre photo</label>
<input type="file" name="photo" placeholder="Entrer votre nom " id="pasteque" class="signales" style="display: none;">
    <input type="email" name="email" placeholder="Entrer votre Nouveau " class="signale" value="<?php echo $_SESSION['email'] ?>">
    <input type="password" name="mdpn" placeholder="Entrer votre Nouveau mot de passe " class="signale">
    <input type="submit" name="sub" value="Chnager votre profile" id="amie_btns">
  </form>
  <?php 
  global $tart;
  $id=intval($_SESSION['id_users']);

if (isset($_POST['sub'])) {
  if (
isset($_POST['nom']) AND 
isset($_POST['prenom']) AND 
isset($_POST['sexe']) AND 
isset($_POST['email']) AND 
isset($id) AND !empty($id) AND
isset($_POST['mdpn']) 
) {
if (isset($_FILES['photo']) AND $_FILES['photo']['error']== 0)
{
// Testons si le fichier n'est pas trop gros
if ($_FILES['photo']['size'] <= 1000000)
{
// Testons si l'extension est autorisée
$infosfichier =pathinfo($_FILES['photo']['name']);
$extension_upload = $infosfichier['extension'];
$extensions_autorisees = array('jpg', 'jpeg', 'gif','png','PNG','JPG','JPEG','GIF');
if (in_array($extension_upload,$extensions_autorisees))
{
 $resultat=move_uploaded_file($_FILES['photo']['tmp_name'],'src/'.basename($_FILES['photo']['name']));
 if ($resultat) {

    $bdd=$start->bdd->prepare("UPDATE users SET nom=:n,prenom=:p,sexe=:s,photo=:h,mdp=:m,email=:e WHERE id_users=:id");
    $bdd->execute(array(
    'n'=>$_POST['nom'],
    'p'=>$_POST['prenom'],
    's'=>$_POST['sexe'],
    'h'=>$_FILES['photo']['name'],
    'm'=>$_POST['mdpn'],
    'e'=>$_POST['email'],
    'id'=>$id
     ));

        $bddse=$start->bdd->prepare('SELECT users.id_users,users.nom,users.prenom,users.email,users.photo,users.sexe,users.adresse,roles.nom_role FROM users INNER JOIN roles ON users.id_role=roles.id_role WHERE users.email=:e AND users.id_users=:m');
        $bddse->execute(array(
        'e'=>$_POST['email'],
        'm'=>$_POST['mdpn']
         ));
         $fetche=$bddse->fetch();
         $_SESSION['id_users']=$fetche['id_users'];
         $_SESSION['nom']=$fetche['nom'];
         $_SESSION['prenom']=$fetche['prenom'];
         $_SESSION['email']=$fetche['email'];
         $_SESSION['photo']=$fetche['photo'];
         $_SESSION['sexe']=$fetche['sexe'];
         $_SESSION['adresse']=$fetche['adresse'];
         $_SESSION['nom_role']=$fetche['nom_role'];
         
       
         

echo '<p style="color: rgba(77, 175, 124, 1);margin-top: 10px;">envoie avec succes</p>';
}
    }
  }
 }
}
}

   ?>
</div>
<div class="pub">
   <form>
    <input type="email" name="" placeholder="Entrer le Titre de votre Publicite " class="signale">
 <label for="pasteques" id="upd">Uploader votre photo</label>
<input type="file" name="photo" placeholder="Entrer votre nom " id="pasteques" class="signales" style="display: none;">
<input type="submit" name="" value="Publier" id="amie_btns">
  </form>
</div>
</div>
<?php
}else{
 echo '<script language="Javascript">
    <!--
    document.location.replace("http://whatschats1.000webhostapp.com/?path=Seconnecter");
    // -->
    </script>';
  }
?>

