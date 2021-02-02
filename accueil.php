<style>
.contens{

    float:left;
    

}
.data{
    width:1099px;
    height:600px;
    float:left;
    margin-top:10px;
    float: left;
       overflow: auto;
}
        body{
            background: grey;
        }
        .but{
            width: 500px;
            height:100px;
            margin: auto;
            background: white;
            margin-top: 10px;
        }
        .pub_icone{
              width: 839px;
            height:259px;
            margin: auto;
            background: white;
            margin-top: 20px;
            padding: 10px;
            margin-left: -170px;
            margin-bottom: 20px;
            float: left;
        }
        .rtext{
            resize: none;
            margin-left: 10px;
            margin-top: 10px;
            border-radius: 10px;
            padding-top: 15px;
            outline: none;
        }
        #text{

outline: none;
display: none;

        }
            #tex{
margin-top: 7px;
width: 50px;
display: none;
outline: none;
        }
        .txts{
display: none;
outline: none;
        }
        #texts{
            font-size: 22px;
            margin-left: 10px;
            float:left;
            cursor: pointer;
            margin-right: 20px;
        }
        .formidable{
            float: left;
        }
        .srct{
            width: 25px;
            height: 25px;
            margin-top: 5px;
            float: left;
        }
        .srcte{
            width: 25px;
            height: 25px;
            margin-top: 5px;
            float: left;
        }

        .sub{
            float: right;
            margin-right: 15px;
            margin-top: 2px;
            border: none;
            background: rgba(44, 130, 201, 1);
            color: white;
            padding: 5px;

        }
        .emojin{
            width: 250px;
            height: 230px;
            float: left;
            background: white;
            border: 1px solid grey;
            padding: 1px;
            margin-left: -100px;
            border-radius: 10px;
            margin-top: 30px;
            position: fixed;
            display: none;

        }
        .emojin p{
            float: left;
            cursor: pointer;
        }
    .exmp{
    width:95%;
    height:200px;
    margin-left:3%;
    margin-top:1%;
    border:0px;
}
.amis{
    width:21.3%;
    height:320px;
    background:white;
    margin-top:0.1%;
    margin-bottom: 1%;
    float:left;
    margin-left:8.7%;
    box-shadow: 0.1px 0.1px 0.1px 0.1px;
    border:0px;
    padding: 10px;
}
.achat_tof{
      width:200px;
      height: 200px;
      float: left;

}
.achat_tofs{
      width:30px;
      height: 30px;
      margin-top: 10px;
      float: left;

}
.achat_tofp{
      width:80px;
      height: 40px;
      margin-top: 15px;
      font-size: 14px;      margin-left: 5px;
      float: left;

}
.achat_toft{
      width:100%;
      height: 40px;
      margin-top: -10px;
      font-size: 14px;     
      float: left;

}
.btn_vente {
    width:200px;
    height: 20px;
    background: green;
    text-align: center;
    text-decoration: none;
    color: white;
    float: left;
}
/*diport css */
* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}
</style>
<?php 
global $Achat;

if(empty($_SESSION['id_users'])){
 echo '<script language="Javascript">
    <!--
    document.location.replace("http://whatschats1.000webhostapp.com/?path=Seconnecter");
    // -->
    </script>';
}else{
    ?>
    <?php
require('public/partie/tete.php');
?>
<div class='contens'>
<?php
require('partie/partie.php');

?>
</div>
<div class='data'>
    <div class="but">
<form method="post" enctype='multipart/form-data'>
    <textarea name="nom_prix" class="rtext" rows="2" cols="65" placeholder="Entrer le nom de votre article"></textarea>
        <div class="emojin">
<p>&#128551</p>
<p>&#128552</p> 
<p>&#128553</p> 
<p>&#128554</p>
<p>&#128555</p>
<p>&#128556</p>
<p>&#128557</p> 
<p>&#128558</p> 
<p> &#128559</p>
<p>&#128560</p> 
<p> &#128561    </p>
<p> &#128562    </p>
<p> &#128563</p>    
<p>&#128564 </p>
<p> &#128565    </p>
<p> &#128566    </p>    
<p>&#128567 </p>
<p> &#128577    </p>        
<p>&#128578 </p>        
<p>&#128579 </p>    
<p>&#128580 </p>    
<p>&#129296 </p>    
<p> &#129297    </p>        
<p>&#129298 </p>        
<p> &#129299    </p>        
<p>&#129300 </p>    
<p>&#129301 </p>        
<p>&#129312 </p>        
<p> &#129313    </p>        
<p> &#129314    </p>        
<p> &#129315    </p>        
<p>&#129316 </p>        
<p>&#129317 </p>        
<p>&#129319 </p>        
<p>&#129320 </p>        
<p> &#129321    </p>
<p>&#129322 </p>    
<p>&#129323 </p>        
<p>&#129324 </p>        
<p> &#129325    </p>        
<p> &#129326    </p>    
<p> &#129327    </p>        
<p> &#129488    </p>     
<p>&#9757</p>   
  <p> &#9977  </p>    
<p>  &#9994   </p> 
<p> &#9995  </p>
<p>  &#9996   </p>
<p>  &#9997   </p>
<p>  &#127877 </p>
<p>  &#127938 </p>   
<p>  &#127939  </p>
<p> &#127940  </p>   
<p> &#127943  </p>   
<p> &#127946  </p>   
<p> &#127947  </p>
<p>  &#127948  </p> 
<p>&#128066  </p>
<p> &#128067</p> 
<p>  &#128070  </p>  
<p>  &#128071  </p>  
<p> &#128072 </p>   
<p> &#128073 </p>
<p>  &#128074 </p> 
<p> &#128075 </p>   
<p> &#128076 </p>
<p> &#128077 </p>
<p>  &#128078  </p>  
<p> &#128079  </p>   
<p>  &#128080 </p>
<p> &#128102  </p> 
<p>  &#128103  </p>
<p>  &#128104  </p>
<p> &#128105  </p> 
<p> &#128110  </p>
<p>   &#128112  </p>   
<p>  &#128113  </p>
<p> &#128114  </p>
<p>  &#128115  </p>
<p>  &#128116  </p>  
<p>  &#128117 </p> 
<p>  &#128118  </p>
<p>  &#128119  </p>
<p>   &#128120  </p>
<p>   &#128124  </p>
<p>  &#128129  </p>
<p> &#128130  </p>
<p>   &#128131  </p>
<p>   &#128133  </p>
<p>  &#128134  </p>
<p>   &#128135  </p>
<p>  &#128170  </p>
<p> &#128372  </p>
<p>   &#128373  </p> 
<p>  &#128378  </p>
<p>  &#128400  </p> 
<p>  &#128405  </p>
<p>   &#128406  </p>
<p>  &#128581  </p>
<p>  &#128582  </p> 
<p>  &#128583  </p>
<p> &#128587  </p>
<p>  &#128588 </p>  
<p>  &#128589  </p>  
<p> &#129335 </p> 
<p> &#129336  </p>   
<p> &#129337  </p>
<p>  &#129341 </p> 
<p> &#129342  </p>   
<p>  &#129489  </p> 
<p> &#129490  </p>  
<p>  &#129491  </p>  
<p> &#129492  </p>
<p> &#129493  </p>
<p>  &#129494  </p> 
<p> &#129495 </p>  
<p> &#129496  </p>
<p>  &#&#129497  </p>
<p>  &#129498  </p>  
<p> &#129500  </p>  
<p>   &#129501</p>
 <!--<p><?php /*
$Achate=$Achat->/*Recupemojin();
foreach ($Achate as  $value) {

echo $value['nom_emojin'];
}
  */?></p>-->
    </div>
    <label for="" id="texts">&#128512</label>
    <input type="text" name="" id="text">
    <label for="tex" id="texts" title="entrer le prix "><img src='src/panier.png' class="srcte"></label>
    <input type="text" name="prix" id="tex">
    <label for="txt" id="texts" title="entrer les photos "><img src='src/70895.png' class="srct"></label>
    <input type="file" name="photo" class="txts" id="txt" >
    <input type="submit" name="validation" class="sub">
</form>
<div class="pub_icone">
    <!-- Slideshow container -->
<div class="slideshow-container" >

  <!-- Full-width images with number and caption text -->
  <?php
  $achater =$Achat->RecupPubl();
if (is_array( $achater) || is_object( $achater)){
foreach ( $achater as $value) {

   ?>
  <div class="mySlides fade">
    <div class="numbertext">1 / <?php echo $value['id_pub']?></div>
    <img src="src/<?php echo $value['photo'] ?>" style="width:100%;height: 200px;">
    <div class="text"><?php echo $value['titre_public'] ?></div>
  </div>
<?php
}
}
?>
 

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
    <script type="text/javascript">


var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

/*var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}*/
    </script>
</div>

<?php 
global $start;


 if (isset($_POST['validation'])) {
    if (
isset($_POST['nom_prix']) AND !empty($_POST['nom_prix']) AND 
isset($_POST['prix']) AND !empty($_POST['prix']) AND 
intval($_POST['prix'])

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
$basededonnee=$start->bdd->prepare('INSERT INTO Liste(id_vendeur,nom_produit,prix,photo,date_achat)VALUES(:i,:n,:p,:h,NOW())
');
$basededonnee->execute(array(
'i' =>$_SESSION['id_users'] , 
'n' =>$_POST['nom_prix'],
'p' =>$_POST['prix'],
'h' =>$_FILES['photo']['name']
));
echo '<p style="color: rgba(77, 175, 124, 1);margin-top: 10px;">envoie avec succes</p>';
}
    }
  }
 }
}
}

 ?>

</div>
   <div class='exmp'>
    <?php
    $achater=$Achat->RecupProduit();
if (is_array( $achater) || is_object( $achater)){
     foreach ( $achater as $value) {
  
    ?>
    <div class='amis'>
       <img src="src/<?php echo $value['photo']?>" class='achat_tof'>
       <img src="src/<?php echo $value['tof']?>" class='achat_tofs'>
     <a href=""><p class="achat_tofp"><?php echo ucfirst($value['nom']) . ' ' . ucfirst($value['prenom']) ?></p></a>  
    <p class="achat_toft"><?php echo ucfirst($value['nom_produit']) ?></p>
    <a href="?path=Paiement&Montant=<?php $int=strval($value['prix']); echo urlencode($int) ?>" class="btn_vente achat_toft"><?php echo ucfirst($value['prix']) ?>$</a>

   </div> 
   <?php     # code...
     }
 }
     ?>
        
   </div>
</div>
<?php
}
?>