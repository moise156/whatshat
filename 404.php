<?php
require('public/partie/TeteSeconnecter.php');
?>
<h1>
404
</h1>
<?php
if(isset($_GET['error']) and $_GET['error']='email_v'){
    ?>
<p>entrer un email</p>

    <?php
}elseif(isset($_GET['error']) and $_GET['error']='email_ex'){
    ?>
<p>entrer un existe pas </p>

<?php
}else{
    ?>
    
    <p>page introuvable</p>
    <?php
}
?>
