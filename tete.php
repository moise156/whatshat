<?php
global $req;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="src/chat.png" />
    
    <link rel="stylesheet" href="css/style.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php
    global $Titre;
    echo $Titre->Titre();
    ?></title>
    <style>
    header{
    background-color: rgb(50, 45, 121);
    width: 100%;
    height: 40px;
}
body{
    overflow:hidden;
}
header img{
    width:25px;
    height:25px;
    margin-left:20px;
    float:left;
    margin-top:10px;
}
img[alt="www.000webhost.com"]{
    display: none
}
.nav{
    float:right;
    width:29%;
    height:10%;
    margin-top:-4px;
}
.nav ul li img{
border-radius:50%;
margin-top:-3px;
}
.nav i{
    float:left;
    margin-right:5px;
    
}
.nav .ul {
    
    display: block;

}
.nav .ul li {
    list-style:none;

}

.nav .ul li a{
    text-decoration:none;
    float:left;
    padding:16px;
    margin-top:-50px;
    color:white;
        /*font-family:arial;*/

}
.po{
    font-size:15px;
    margin-top:13px;
    color:white;
    float:left;
}
.head{
    width:25%;
    height:50px;
    
}
.menu_bars{
    float: left;
    margin-left: -10px;
    margin-top: -2px;
}

    </style>
    <!-- Latest compiled and minified CSS -->

</head>
<body>
<header>
<h1>
<div class='head'>
    <div class="menu_bars">
        <img src="src/menu_bars.png" class="img_menu_bars">
    </div>
<img src='src/chat.png'/>
<p class='po'>WhatsaTchat</p>
</div>
</h1>
<nav class='nav'>
<ul class='ul'>

<?php 
global $res;


?>
<li>
<a href='?path=Membre'><i><img src='src/<?php echo $_SESSION['photo'] ?>'></i><?php echo ucfirst($_SESSION['prenom'])  ?></a>
</li>
<?php if ($_GET['path']=='Messanger') {
?>
<li>
<a href='?path=Groupes'>Groupes</a>
</li>
<?php
    # code...
} 
?>
<?php if ($_GET['path']=='Groupes') {
?>
<li>
<a href='?path=Messanger'>Messages</a>
</li>
<?php
    # code...
} 
?>
<li>
<a href='?path=Dec'>Deconnexion</a>
</li>

</ul>
</nav>

</header>
<div class='membre'>

</div>
