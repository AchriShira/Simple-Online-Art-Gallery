<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body{
                background-color: lightblue;
            }
            #div1{
                height: 50px;
                background-image: linear-gradient(yellow,white,lightskyblue);
                text-align: center;
                text-transform: capitalize;
                border-radius: 6px;
                position: relative;
            }
            #div2{
                width: 90%;
                height:1000px;
                background-image: radial-gradient(skyblue,yellow,blueviolet);
                border-radius: 6px;
                position: relative;
                top: 50px;
                left: 70px;
            }
            #a1{
                width: 200px;
                height: 100px;
                background-color: white;
                position: absolute; 
                left: 50px;
                top: 50px;
                text-align: center;
            }
             #a2{
                width: 200px;
                height: 100px;
                background-color: white;
                position: absolute;   
                left: 300px;
                top: 50px;
                text-align: center;
            }
             #a3{
                width: 200px;
                height: 100px;
                background-color: white;
                position: absolute; 
                left: 550px;
                top: 50px;
                text-align: center;
            }
             #a4{
                width: 200px;
                height: 100px;
                background-color: white;
                position: absolute;
                left: 800px;
                top: 50px;
                text-align: center;
            }
             #a5{
                width: 200px;
                height: 100px;
                background-color: white;
                position: absolute;
                top: 200px;
                left: 50px;
                text-align: center;
            }
            #a6{
                width: 200px;
                height: 100px;
                background-color: white;
                position: absolute; 
                top: 200px;
                left: 300px;
                text-align: center;
            }
             #a7{
                width: 200px;
                height: 100px;
                background-color: white;
                position: absolute;   
                top: 200px;
                left: 550px;
                text-align: center;
            }
             #a8{
                width: 200px;
                height: 100px;
                background-color: white;
                position: absolute; 
                top: 200px;
                left: 800px;
                text-align: center;
            }
             #a9{
                width: 200px;
                height: 100px;
                background-color: white;
                position: absolute;
                top: 350px;
                left: 50px;
                text-align: center;
            }
             #a10{
                width: 200px;
                height: 100px;
                background-color: white;
                position: absolute;
                top: 350px;
                left: 300px;
                text-align: center;
            }
            #a11{
                width: 200px;
                height: 100px;
                background-color: white;
                position: absolute; 
                top: 350px;
                left: 550px;
                text-align: center;
            }
             #a12{
                width: 200px;
                height: 100px;
                background-color: white;
                position: absolute;   
                top: 350px;
                left: 800px;
                text-align: center;
            }
             #a13{
                width: 200px;
                height: 100px;
                background-color: white;
                position: absolute; 
                top: 500px;
                left:50px;
                text-align: center;
            }
             #a14{
                width: 200px;
                height: 100px;
                background-color: white;
                position: absolute;
                top: 500px;
                left: 300px;
                text-align: center;
            }
             #a15{
                width: 200px;
                height: 100px;
                background-color: white;
                position: absolute;
                top: 500px;
                left: 550px;
                text-align: center;
            }
            #a16{
                width: 200px;
                height: 100px;
                background-color: white;
                position: absolute; 
                top: 500px;
                left: 800px;
                text-align: center;
            }
             #a17{
                width: 200px;
                height: 100px;
                background-color: white;
                position: absolute;   
                top: 650px;
                left: 50px;
                text-align: center;
            }
             #a18{
                width: 200px;
                height: 100px;
                background-color: white;
                position: absolute; 
                top: 650px;
                left: 300px;
                text-align: center;
            }
             #a19{
                width: 200px;
                height: 100px;
                background-color: white;
                position: absolute;
                top: 650px;
                left: 550px;
                text-align: center;
            }
             #a20{
                width: 200px;
                height: 100px;
                background-color: white;
                position: absolute;
                top: 650px;
                left: 800px;
                text-align: center;
            }
             #a21{
                width: 200px;
                height: 100px;
                background-color: white;
                position: absolute;
                top: 800px;
                left: 50px;
                text-align: center;
            }
            .artists{
                border-radius: 6px;
                border-color: lightcyan;
                border-style: solid;
            }
            .artists:hover{
                background-color: black;
                opacity: 0.6;
                border-color: lightblue;
                border-style: solid;
            }
            #logout1{
                height: 50px;
                width: 90px;
                border-radius: 4px;
                float: right;
            }
            #logout1:hover{
                transform: translateY(2px);
            }
            #home1{
                height: 50px;
                width: 50px;
                margin: 0px;
                float: left;
                border-radius: 4px;
            }
            #home1:hover{
                transform: translateY(2px);
            }
        </style>
    </head>
    <body>
        <div id="div1">
            <a href='homepage.php'><img src="webappicons/sort-left (1).png" id='home1'/></a>
                              Artists
           
            <a href="signin1.php"><img src="webappicons/logout-button-blue-hi.png"  id="logout1" onclick="alert('are you sure you want to sign out?')"/></a>
        </div>
        <div id="div2">
   
            <a href="Gallery.php#a1"> 
               <div class="artists" id="a1">
                   <br> 
                   Ai
                   <br>
                   Weiwei
            </div>
           </a>
            <a href="Gallery.php#a2">
                <div class="artists" id="a2">
                    <br>
                    Albert
                    <br>
                    Oehlen
            </div>
            </a>
            <a href="Gallery.php#a3">
                <div class="artists" id="a3">
                    <br>
                    Bob
                    <br>
                    Ross
            </div>
            </a>
            <a href="Gallery.php#a4">
                <div class="artists" id="a4">
                    <br>
                    Carol
                    <br>
                    Rama
            </div>
            </a>
            <a href="Gallery.php#a5">
                <div class="artists" id="a5">
                    <br>
                    Daniel
                    <br>
                    Spoerri
            </div>
            </a>
            <a href="Gallery.php#a6">
                <div class="artists" id="a6">
                    <br>
                    David
                    <br>
                    Choe
            </div>
            </a>
            <a href="Gallery.php#a7">
                <div class="artists" id="a7">
                    <br>
                    David
                    <br>
                    Hockney
            </div>
            </a>
            <a href="Gallery.php#a8">
                <div class="artists" id="a8">
                    <br>
                    Gary
                    <br>
                    Burghoff
            </div>
            </a>
            <a href="Gallery.php#a9">
                <div class="artists" id="a9">
                    <br>
                    James
                    <br>
                    Craig
            </div>
            </a>
            <a href="Gallery.php#a10">
                <div class="artists" id="a10">
                    <br>
                    John
                    <br>
                    Leguizamo
            </div>
            </a>
            <a href="Gallery.php#a11">
                <div class="artists" id="a11">
                    <br>
                    Jwan
                    <br>
                    Yosef
            </div>
            </a>
            <a href="Gallery.php#a12">
                <div class="artists" id="a12">
                    <br>
                    Larry
                    <br>
                 D. Alexander
            </div>
            </a>
            <a href="Gallery.php#a13">
                <div class="artists" id="a13">
                    <br>
                    Maasaki
                    <br>
                    Hatsumi
            </div>
            </a>
            <a href="Gallery.php#a14">
                <div class="artists" id="a14">
                    <br>
                    Matthew
                    <br>
                   Gray Gubler
            </div>
            </a>
            <a href="Gallery.php#a15">
                <div class="artists" id="a15">
                    <br>
                    Neo
                    <br>
                    Rauch
            </div>
            </a>
            <a href="Gallery.php#a16">
                <div class="artists" id="a16">
                    <br>
                    Paul
                    <br>
                   McCarthy
            </div>
            </a>
            <a href="Gallery.php#a17">
                <div class="artists" id="a17">
                    <br>
                    Sandro
                    <br>
                    Kopp
            </div>
            </a>
            <a href="Gallery.php#a18">
                <div class="artists" id="a18">
                    <br>
                    Steve
                    <br>
                    Kilbey
            </div>
            </a>
            <a href="Gallery.php#a19">
                <div class="artists" id="a19">
                    <br>
                    Takashi
                    <br>
                    Murakami
            </div>
            </a>            
            <a href="Gallery.php#a20">
                <div class="artists" id="a20">
                    <br>
                    Tom
                    <br>
                    Franco
            </div>
            </a>
            <a href="Gallery.php#a21">
                <div class="artists" id="a21">
                    <br>
                    Yayoi
                    <br>
                    Kusama
            </div>
            </a>

        </div>
    </body>
</html>
 
