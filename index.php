<?php

include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id ASC");
?>
<!DOCTYPE html>
<html>
<head>   
<style>
body {
  background-image: url("bg4.jpg");
  background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-color: rgba(7,33,78,255);
    overflow-x: hidden;
    background-attachment: fixed;
}

#stone{
    margin-left: 100px;
    border: 11px solid ;
    border-image: linear-gradient(to bottom right, #b827fc 0%, #2c90fc 25%, #b8fd33 50%, #fec837 75%, #fd1892 100%);
    border-image-slice: 1;
    padding: 3px;
    background-image: url("Stone.webp");
    color: white;
}

#add{
    color: white;
    position: relative;
    left: 100px;
}

#svg8{
    position: fixed;
    margin: 10px;
    cursor: pointer;
    width:20px;
    height:20px;
    
}

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}


.footer_box{
    position: relative;
    bottom: -30px;
    margin-right: 10px;
    margin-left: -10px;
    width: 110%;
    background-image: url("Deepslate.webp");
    padding-bottom: 10px;
}

.footer{
    height: 5%;
    color: white;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    margin: 0 auto;
}

.footer_title{
    display: flex;
    flex-direction: column;
    margin-right: 30px;
    margin-top: 10px;
}

.f1{
    text-align: center;   
}

.footer_title h2{
    margin-bottom: 10px;
}

.footer_title a{
    color: white;
    text-decoration: none;
    margin-bottom: 2%;
}

.footer_title a:hover{
    color: #00ccff;
    transition: 0.5s ease-out;
}



#title{ 
    position: relative;
    animation: fadein 1s;
    top: -22px;
    width: 70%;
    left: 13%;     
}

#navigation_1{   
    width: auto;
    padding: 5px;
    position: relative;
    top: -3%;
    left: 15%;
    animation: fadein 2s;
}

#button{
    background-image: url("Stone.webp");
    font-weight: bold;
    color: white;
    width: 16%;
    height: 40px;
    border-color: rgb(0, 0, 0);
    border-style: outset;
    font-size: 18px;
    cursor: pointer;   
}


@keyframes slidebg {
    to {
      background-position:10px;
    }
}

.nav:hover{
    animation:slidebg 10s linear infinite;
}


@media screen and (max-width: 620px) {
    .footer {
        height: 50vh;
        
    }
}

@media screen and (max-width: 820px) {
    .footer {
        padding-top: 2rem;
        
    }
}

@media screen and (max-width: 220px) {
    .f3 {
        display: none;
        
    }
} 

@keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}
</style>
<script>
    window.onscroll = function() {
    let num = document.documentElement.scrollTop / 70 % Math.PI;

document.getElementById('svg8').style.transform ='rotate(' + num + 'rad)';
}


function play() {
    let audio = document.getElementById("audio");
    audio.play();
  }


</script>

    <title>Homepage</title>
</head>

<body>

<audio id="audio" src="boom.mp3"></audio>
<div onclick="play()" value="PLAY">  
    <img id="svg8" src="creeper.svg">
</div>
    <br>
    <a href="index.html">
        <img id = title src="title.png"/></a>
    
    <div id =navigation_1>
    <a href="home.html">
        <button id = button class="nav" >Home</button><a>
        <a href="about.html">
        <button id = button  class="nav">About</button></a>
        <a href="contact.html">
        <button id = button class="nav">Contact</button></a>
        <a href="gallery.html">
        <button id = button class="nav">Gallery</button></a>
    </div>
    <br>



<a href="add.php" id=add>Add New Game</a><br/><br/>

    <table width='80%' border=1 id=stone>

    <tr >
        <th>Game</th> <th>Type</th> <th>Rating</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['Game']."</td>";
        echo "<td>".$user_data['type']."</td>";
        echo "<td>".$user_data['rating']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
    <br>

    <div class="footer_box">
    <div class="footer">
        <div class="footer_title f1">
            <h2>Minecraft Links</h2>
            <a href="https://www.minecraft.net/en-us">Website</a>
            <a href="https://www.youtube.com/c/minecraft/featured">YouTube</a>
            <a href="https://twitter.com/Minecraft">Twitter</a>
            
        </div>
        <div class="footer_title f2">
            <h2>Reviews</h2>
            <a href="https://www.ign.com/articles/2011/11/24/minecraft-review">IGN</a>
            <a href="https://www.commonsensemedia.org/game-reviews/minecraft/user-reviews/adult">common sense media</a>
            <a href="https://www.trustpilot.com/review/www.minecraft.net">Trustpilot</a>
            
        </div>
        <div class="footer_title f3">
            <h2>My Links</h2>
            <a href="https://www.facebook.com/Jason-102437059257397">Facebook</a>
            <a href="https://www.instagram.com/jason_bishop113/">Instagram</a>
            <p>©Jason Bishop</p>
           
            
        </div>
    </div>
</div>
</body>
</html>
