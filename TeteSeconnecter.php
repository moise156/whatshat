<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="src/chat.png" />
    <link rel="stylesheet" type="text/css" href="css/media.css" media=" only screen and(max-width: 768px)" >
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

img[alt="www.000webhost.com"]{
    display: none
}

header img{
    width:25px;
    height:25px;
    margin-left:20px;
    float:left;
    margin-top:10px;
}
.po{
    font-size:15px;
    margin-top:13px;
    color:white;
    float:left;
}
a{
    color:white;
    float:right;
    margin-top:10px;
    margin-right:40px;
    text-decoration:none;
}

    </style>
    <!-- Latest compiled and minified CSS -->

</head>
<body>
<header>
<h1>
<img src='src/chat.png'/>
<p class='po'>WhatsaTchat</p>
</h1>
<?php
if(isset($_GET['path']) and $_GET['path']=='Seconnecter'){
?>
<a href='?path=Inscription' class='a'>Inscription</a>
<?php
}elseif(isset($_GET['path']) and $_GET['path']=='Inscription'){
?>
<a href='?path=Seconnecter' class='a'>Seconnecter</a>
<?php
}
?>
</header>