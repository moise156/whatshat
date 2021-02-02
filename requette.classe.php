<?php
global $start;

class Requettes
{
protected $_id_users;
protected $_nom;
protected $_prenom;
protected $_adresse ;
protected $_email;  
protected $_datenaissance;
protected $_ip  ;
protected $_mdp ;
protected $_sexe ;
protected $_id_role ;
protected $_deconnection_id;
protected $_id_exp;
protected $_id_dest ;
protected $_message;
protected $_ip_exp;
protected $_ip_dest;


public function Insertion($nom,$prenom,$adresse,$email,$daten,$mdp,$sexe)
{
    global $start;
    $this->_nom=$nom;
    $this->_prenom=$prenom;
    $this->_adresse=$adresse;
    $this->_email=$email;
    $this->_datenaissance=$daten; 
    $this->_mdp=$mdp;
    $this->_sexe=$sexe;
    //$this->_id_role=2;
if (filter_var($this->_email, FILTER_VALIDATE_EMAIL)) {
$bddst=$start->bdd->prepare('SELECT COUNT(email) AS mail FROM users WHERE email=:e AND mdp=:m');
$bddst->execute(array(
'e' =>$this->_email,
'm' =>$this->_mdp 
 ));
 $fetc=$bddst->fetch();
 if($fetc['mail']==0){
    $bdd=$start->bdd->prepare("INSERT INTO users(nom,prenom,adresse,photo,mdp,id_role,sexe,email,datenaissance,datadec)VALUES(:n,:p,:a,'avatar.jpg',:m,:r,:s,:e,:d,NOW())");
    $bdd->execute(array(
    'n' =>$this->_nom,
    'p'=>$this->_prenom,
    'a'=> $this->_adresse,
    'm'=>$this->_mdp,
    'r'=> $this->_id_role,
    's'=>$this->_sexe,
    'e'=>$this->_email,
    'd'=>$this->_datenaissance
     ));
        $bddse=$start->bdd->prepare('SELECT users.mdp,users.id_users,users.nom,users.prenom,users.email,users.photo,users.sexe,users.adresse,roles.nom_role FROM users INNER JOIN roles ON users.id_role=roles.id_role WHERE users.email=:e AND users.mdp=:m');
        $bddse->execute(array(
        'e'=>$this->_email,
        'm'=>$this->_mdp 
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

         
         echo '<script language="Javascript">
         <!--
         document.location.replace("http://localhost/tchat/?path=Membre");
         // -->
         </script>';
         

 }else{
    header('location:http://localhost//tchat/?error=email_ex');
}

    }else{
        header('location:http://localhost//tchat/?error=email_v');
    }

}
public function Messanger($idexp,$iddest,$messages)
{

    global $start;
     $this->_id_exp=$idexp;
    $this->_id_dest=$iddest;
    $this->_message=htmlspecialchars($messages);
    $bdd=$start->bdd->prepare("INSERT INTO messanger(id_exp,id_dest,datames,messages)VALUES(:n,:p,NOW(),:m)");
    $bdd->execute(array(
    'n' =>$this->_id_exp,
    'p'=>$this->_id_dest,
    'm'=> $this->_message,
   
     ));
  return $bdd;

}
public function Selection($email,$mdp)
{
    global $start;
    $this->_email=$email;
    $this->_mdp=$mdp;
 
if (filter_var($this->_email, FILTER_VALIDATE_EMAIL)) {
$bddst=$start->bdd->prepare('SELECT COUNT(email) AS mail FROM users WHERE email=:e AND mdp=:m');
$bddst->execute(array(
'e' =>$this->_email,
'm' =>$this->_mdp 
 ));
 $fetc=$bddst->fetch();
 if($fetc['mail']==1){
     $nombre="1";
    $bddse=$start->bdd->prepare("UPDATE users SET enligne=:n,datadec=NOW() WHERE email=:e AND mdp=:m");
    $bddse->execute(array(
    'n'=> $nombre,
    'e'=>$this->_email,
    'm'=>$this->_mdp 
     ));
        $bddse=$start->bdd->prepare('SELECT users.mdp,users.enligne,users.id_users,users.nom,users.prenom,users.email,users.photo,users.sexe,users.adresse,roles.nom_role FROM users INNER JOIN roles ON users.id_role=roles.id_role WHERE users.email=:e AND users.mdp=:m');
        $bddse->execute(array(
        'e'=>$this->_email,
        'm'=>$this->_mdp 
         ));
         $fetche=$bddse->fetch();
         $_SESSION['id_users']=$fetche['id_users'];
         $_SESSION['enligne']=$fetche['enligne'];
         $_SESSION['nom']=$fetche['nom'];
         $_SESSION['prenom']=$fetche['prenom'];
         $_SESSION['email']=$fetche['email'];
         $_SESSION['photo']=$fetche['photo'];
         $_SESSION['sexe']=$fetche['sexe'];
         $_SESSION['adresse']=$fetche['adresse'];
         $_SESSION['nom_role']=$fetche['nom_role'];


         echo '<script language="Javascript">
         <!--
         document.location.replace("http://localhost//tchat/?path=Membre");
         // -->
         </script>';

 }else{
    header('location:http://localhost//tchat/?error=email_ex');
}

}else{
        header('location:http://localhost//tchat/?error=email_v');
}

}
public function RequeUsers($section)
{
    global $start;
    $this->_id_users=$section;
    $tab=array();
    $bddse=$start->bdd->prepare('SELECT users.nom,users.prenom,users.photo FROM users  WHERE id_users=:i');
    $bddse->execute(array(
    'i'=>$this->_id_users
     ));
     
     $fetche=$bddse->fetch();
     $tab[]=$fetche;
     return $tab;
     
}
public function Ajourmis($id,$session)
{
  global $start;
  $this->_id_users=$id;
    $bddse=$start->bdd->prepare("UPDATE messanger SET lire=0 WHERE id_exp=:id  AND id_dest=:ids");
    $bddse->execute(array(
    'id'=>$session,
    'ids'=>$this->_id_users
   
     ));
    return  $bddse;
  # code...
}
public function Deconnection($decoid,$id)
{
    global $start;
    $this->_deconnection_id=$decoid;
    $this->_id_users=$id;
    if(isset($this->_deconnection_id) and $this->_deconnection_id=="Dec"){
    $_SESSION=array();
    $nombre="0";
    $bddse=$start->bdd->prepare("UPDATE users SET enligne=:n WHERE id_users=:i");
    $bddse->execute(array(
    'n'=> $nombre,
    'i'=>$this->_id_users
    
     ));
return $bddse;

}
  
}

public function facebook_time_ago($timestamp)  
{  
     $time_ago = strtotime($timestamp);  
     $current_time = time();  
     $time_difference = $current_time - $time_ago;  
     $seconds = $time_difference;  
     $minutes      = round($seconds / 60 );           // value 60 is seconds  
     $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
     $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
     $weeks          = round($seconds / 604800);          // 7*24*60*60;  
     $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
     $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  
     if($seconds <= 60)  
     {  
    return "Enligne";  
  }  
     else if($minutes <=60)  
     {  
    if($minutes==1)  
          {  
      return "Une minute ";  
    }  
    else  
          {  
      return "$minutes minutes ";  
    }  
  }  
     else if($hours <=24)  
     {  
    if($hours==1)  
          {  
      return "1 heure ";  
    }  
          else  
          {  
      return "$hours heurs ";  
    }  
  }  
     else if($days <= 7)  
     {  
    if($days==1)  
          {  
      return "1 Journee";  
    }  
          else  
          {  
      return "$days Jours ";  
    }  
  }  
     else if($weeks <= 4.3) //4.3 == 52/12  
     {  
    if($weeks==1)  
          {  
      return "Le week ";  
    }  
          else  
          {  
      return "$weeks weeks ";  
    }  
  }  
      else if($months <=12)  
     {  
    if($months==1)  
          {  
      return "1 month ";  
    }  
          else  
          {  
      return "$months months ";  
    }  
  }  
     else  
     {  
    if($years==1)  
          {  
      return "1 Annees ";  
    }  
          else  
          {  
      return "$years years ";  
    }  
  }  
}

public function Boucler($session)
{
global $start;
$this->_id_users=$session;
$bddse=$start->bdd->prepare("SELECT amie.email,amie.email_ex,users.id_users,users.nom,users.prenom,users.photo,users.email,users.datadec,users.enligne FROM users INNER JOIN amie ON users.email=amie.email OR users.email=amie.email_ex WHERE users.email=amie.email OR users.email=amie.email_ex AND amie.amies=1 AND id_users <>:id");
$bddse->execute(array(
'id'=>$this->_id_users 
 ));
$bddset=$bddse->fetch();
$data=$bddset;
return $data;

}
public function Boucle($session)
{
global $start;
$this->_id_users=$session;
$bddse=$start->bdd->prepare("SELECT count(id_users) AS id ,nom,prenom,photo,email,datadec,enligne FROM users WHERE  id_users <>:id");
$bddse->execute(array(
'id'=>$this->_id_users 
 ));
while($bddset=$bddse->fetch()){
  $data=$bddset;
}

return $data;

}
public function UtilserBoucle($session)
{
global $start;
$data= array();
$this->_id_users=$session;
$bddse=$start->bdd->prepare("SELECT count(id_users) AS id ,nom,prenom,photo,email,datadec,enligne FROM users WHERE  id_users <>:id ");
$bddse->execute(array(
'id'=>$this->_id_users 
 ));
while ($bddset=$bddse->fetch()) {
  $data=$bddset;
}
  

return $data;

}
public function Boucles($id,$session)
{
global $start;
$data=array();
$this->_id_users=$id;
$bddse=$start->bdd->prepare("SELECT  messanger.messages,messanger.datames,users.nom,users.prenom,users.photo,messanger.id_dest,messanger.id_exp,users.id_users ,users.email,users.datadec,users.enligne FROM messanger INNER JOIN users ON messanger.id_exp=users.id_users WHERE (messanger.id_exp=:e AND messanger.id_dest=:d) OR (messanger.id_exp=:d AND messanger.id_dest=:e) ORDER by messanger.id_mess ASC");
$bddse->execute(array(
'e'=>$session ,
'd' =>$this->_id_users,
'd'=>$session ,
'e' =>$this->_id_users

 ));
 while ($bddset=$bddse->fetch()) {
    $data[]=$bddset;
}
return $data;

}
public function Echange($id)
{
global $start;
$data=array();
$this->_id_users=$id;
$bddset=$start->bdd->prepare("SELECT  nom,prenom,photo,id_users,email,datadec,enligne FROM  users  WHERE id_users=:e  ");
$bddset->execute(array(
'e' =>$this->_id_users
 ));
return $bddset;

}
public function Compteur($id,$session)
{

global $start;
$datas=array();
$this->_id_users=$id;
$bddse=$start->bdd->prepare("SELECT  messages FROM messanger WHERE (id_dest=:d AND id_exp=:e) OR (id_dest=:e AND id_exp=:d)  order by id_mess DESC limit 0,1");
$bddse->execute(array(
  'd'=>$session ,
  'e'=>$this->_id_users,
  'e'=>$session ,
  'd'=>$this->_id_users,

   ));

$bddset=$bddse->fetch();
   $datas[]=$bddset;

 return $datas;
}
public function Limite($session,$id)
{


 global $start;
$data=array();
$this->_id_users=$session;
$bddse=$start->bdd->prepare("SELECT  COUNT('id_mess') AS compteurs FROM messanger WHERE id_exp=:e and id_dest=:id and lire=1   order by id_mess ASC limit 0,1  ");
$bddse->execute(array(
'e' =>$this->_id_users,
'id'=>$id


 ));
 while ($bddset=$bddse->fetch()) {
    $data[]=$bddset;
}
return $data;
}
public function Mailusers($email,$ex)
{
   global $start;
  $data=array();
  $this->_email=$email;
if (filter_var($this->_email, FILTER_VALIDATE_EMAIL)) {
if ($this->_email===$_SESSION['id_users']) {
  echo "vous ne pouvez vous envoyer les demande amie";
}else{
$bddst=$start->bdd->prepare('SELECT COUNT(email) AS mail FROM users WHERE email=:e');
$bddst->execute(array(
'e' =>$this->_email
 ));
 $fetc=$bddst->fetch();
 if($fetc['mail']==1){
$bddst=$start->bdd->prepare('SELECT COUNT(email) AS mail FROM amie WHERE email=:e OR email=:em');
$bddst->execute(array(
'e' =>$this->_email,
'em'=>$ex
 ));
 $fetcsr=$bddst->fetch();
 if($fetcsr['mail']==0){
if ($this->_email==$ex) {
  echo "vous ne pouvez pas vous ajouter";
}else{
 
    $bdd=$start->bdd->prepare("INSERT INTO amie(email,email_ex)VALUES(:e,:ex)");
    $bdd->execute(array(
    'e'=>$this->_email,
    'ex'=>$ex
     ));
    
}

 }else{
   echo "votre amie existe deja ";
 }
     }else{
      echo "utilisateur inconnue";
     }
   }

  }
}
public function Message_groupe($session_users)
{
 global $start;
$data=array();
$this->_id_users=$session_users;
$bddse=$start->bdd->query("SELECT membre_groupes.admistrateur, users.photo,membre_groupes.id_membre,messanger.datames,users.id_users,users.nom,users.prenom,messanger.messages,messanger.datames,Groupes.nom_groupe FROM users,messanger,Groupes,membre_groupes WHERE messanger.id_groupe=Groupes.id_groupe AND messanger.id_membre=membre_groupes.id_membre AND users.id_users=membre_groupes.id_membre  ORDER by messanger.id_mess ASC");

 while ($bddset=$bddse->fetch()) {
    $data[]=$bddset;
}
return $data;
}
public function Mes($session_users)
{
 global $start;
$data=array();
$this->_id_users=$session_users;
$bddse=$start->bdd->query("SELECT membre_groupes.admistrateur, users.photo,membre_groupes.id_membre,messanger.datames,users.id_users,users.nom,users.prenom,messanger.messages,messanger.datames,Groupes.nom_groupe FROM users,messanger,Groupes,membre_groupes WHERE messanger.id_groupe=Groupes.id_groupe AND messanger.id_membre=membre_groupes.id_membre AND users.id_users=membre_groupes.id_membre  ORDER by messanger.id_mess DESC limit 0,1");

 while ($bddset=$bddse->fetch()) {
    $data[]=$bddset;
}
return $data;
}
public function Message_groupes($session_users)
{
 global $start;

$data=array();
$this->_id_users=$session_users;
$bddse=$start->bdd->prepare("SELECT users.photo,membre_groupes.id_membre,messanger.datames,users.id_users,users.nom,users.prenom,messanger.messages,messanger.datames,Groupes.nom_groupe,membre_groupes.admistrateur FROM users,messanger,Groupes,membre_groupes WHERE messanger.id_groupe=Groupes.id_groupe AND messanger.id_membre=membre_groupes.id_membre AND users.id_users=membre_groupes.id_membre AND users.id_users=:id ORDER by messanger.id_mess ASC");
$bddse->execute(array('id' =>$this->_id_users  ));
 while ($bddset=$bddse->fetch()) {
    $data[]=$bddset;
}
return $data;
}
public function facebook_time_agmessanger($timestamp)  
{  
     $time_ago = strtotime($timestamp);  
     $current_time = time();  
     $time_difference = $current_time - $time_ago;  
     $seconds = $time_difference;  
     $minutes      = round($seconds / 60 );           // value 60 is seconds  
     $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
     $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
     $weeks          = round($seconds / 604800);          // 7*24*60*60;  
     $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
     $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  
     if($seconds <= 60)  
     {  
    return "Maintenat";  
  }  
     else if($minutes <=60)  
     {  
    if($minutes==1)  
          {  
      return "1 minute ";  
    }  
    else  
          {  
      return "$minutes minutes ";  
    }  
  }  
     else if($hours <=24)  
     {  
    if($hours==1)  
          {  
      return "1 heure ";  
    }  
          else  
          {  
      return "$hours heurs ";  
    }  
  }  
     else if($days <= 7)  
     {  
    if($days==1)  
          {  
      return "1 jour";  
    }  
          else  
          {  
      return "$days Jours ";  
    }  
  }  
     else if($weeks <= 4.3) //4.3 == 52/12  
     {  
    if($weeks==1)  
          {  
      return "Le week ";  
    }  
          else  
          {  
      return "$weeks weeks ";  
    }  
  }  
      else if($months <=12)  
     {  
    if($months==1)  
          {  
      return "Le month ";  
    }  
          else  
          {  
      return "$months months ";  
    }  
  }  
     else  
     {  
    if($years==1)  
          {  
      return "Une Annees ";  
    }  
          else  
          {  
      return "$years years ";  
    }  
  }  
}

}
class Titres
{
    public function Titre()
    {

        if(empty($_GET['path'])){
        if(isset($_SESSION['nom'])){
         $nom=$_SESSION['nom'];
         $prenom=$_SESSION['prenom'];
         echo (ucfirst($nom)."-".ucfirst($prenom));
        }
}elseif(isset($_GET['path']) AND !empty($_GET['path']) AND $_GET['path']=="Membre"){
    if(isset($_SESSION['nom'])){
        $nom=$_SESSION['nom'];
        $prenom=$_SESSION['prenom'];
        echo (ucfirst($nom)."-".ucfirst($prenom));
    }
} elseif(isset($_GET['path']) AND !empty($_GET['path']) AND $_GET['path']=="Seconnecter"){
    echo("Seconnecter");
} elseif(isset($_GET['path']) AND !empty($_GET['path']) AND $_GET['path']=="Inscription"){
    echo ("Inscription");
}elseif(isset($_GET['path']) AND !empty($_GET['path']) AND $_GET['path']=="Paiement"){
    echo ("Paiement");
}elseif(isset($_GET['path']) AND !empty($_GET['path']) AND $_GET['path']=="Parametre"){
    echo ("Parametre");
}
 elseif(isset($_GET['path']) AND !empty($_GET['path']) AND $_GET['path']=="Messanger"){
    if(isset($nom_dest['nom_dest'])){
        $nom=$_SESSION['nom'];
        $prenom=$_SESSION['prenom'];
    echo (ucfirst($nom)."-".ucfirst($prenom));

    }

    else{
    echo ("Messanger");
    }
} elseif(isset($_GET['path']) AND !empty($_GET['path']) AND $_GET['path']=="Groupes"){
   
    echo ("Groupes");
    
}

else{
    echo "page introuvable";
}
}

}



      /* 
       }
     
      
       */