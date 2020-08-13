<?php
session_start();
require_once('config.php');
?>
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
            *
            {
                margin: 0px;
            }
            body{
                background-image: radial-gradient(skyblue,plum,lightblue);
            }
            img{
                width: 250px;
                border-radius: 10px;
                border-color: black;
                border-style: solid;
            }
            img:hover{
                transform: translateX(5px);
            }
            #i1:hover
            {
               opacity: 0.5; 
            }
            #i2:hover
            {
               opacity: 0.5; 
            }
            #i3:hover
            {
               opacity: 0.5; 
            }
            #i4:hover
            {
               opacity: 0.5; 
            }
            #i5:hover
            {
               opacity: 0.5; 
            }
            #i6:hover
            {
               opacity: 0.5; 
            }
            header{
                width:100%;
                height:50px;
                background-image: linear-gradient(plum,white,lightskyblue);
                text-align: center;
                padding-top: 15px;
                color:black;
            }
            ul li{
                height: 30px;
                width: 23%;
                list-style-type: none;
                display:inline-block;
                border-color: lightcyan;
                border-style: solid;
                border-radius: 10px;
                text-align: center;
                font-size: 20px;
                background-color: lightseagreen;
                color:blanchedalmond;
            }
            ul{
                background-image:linear-gradient(plum,white,lightskyblue);
            }
            #signup{
                cursor: pointer;
                outline: none;
                box-shadow: 0 9px #999;
                width:270px;
                border-radius: 10px;
                border-bottom: 10px;
                padding-top: 2px;
            }
            #signup:hover{
                background-color: #ccffcc;
            }
            #signup:active{
                background-color: lightblue;
                box-shadow: 0 5px #666;
                transform: translateY(4px);
            }
            #signin{
                cursor: pointer;
                outline: none;
                box-shadow: 0 9px #999;
                width:270px;
                border-radius: 10px;
                border-bottom: 10px;
                padding-top: 2px;
            }
            #signin:hover{
               background-color: #ccffcc; 
            }
            #signin:active{
                background-color: lightblue;
                box-shadow: 0 5px #666;
                transform: translateY(4px);
            }
            li a{
               text-decoration: none; 
            }
            li:hover{
                background-color: lightblue;
            }
            figcaption{
                color:white;
                background-color: black;
                width: 400px;
                text-align: center;
            }
            #background{
                width:100%;
                height:70%;
            }
            table{
                text-align: center;
                border-radius: 8px;
            }
            tr{
                text-align: center;
                border-radius: 8px;
            }
            td{
                text-align: center;
                border-radius: 8px;
            }
            .a{
               
                width: 250px;
            }
            .b{
                
                width: 200px;
            }
            .c{
               
                width: 300px;
            }
        </style>
    </head>
    <body>
        <header>
            <h1><b>Art Hub</b></h1>
        </header>
        <div>
        <nav>
                <ul>
                    <li>
                        <a href="signup1.php"><button id="signup">Sign Up</button></a>
                    </li>
                    <li>
                        <a href="signin1.php"><button id="signin">Sign In</button></a>
                    </li>
                </ul>
            </nav>
         </div>
        
        <div>
            <center>
                 <table border="2">
                     <tr>
                         <td colspan="2">
                             <img src="achriwebapp/IMG_3999-1024x722.jpg" class="a"/>
                         </td>
                         <td colspan="2">
                             <img src="achriwebapp/Vancouver-Art-Gallery-via-Tourism-Vancouver.jpg" class="b"/>
                         </td>
                     </tr>
                     <tr>
                         <td rowspan="2">
                             <img src="achriwebapp/art-gallery-gurgaon.jpg" class="c"/>
                         </td>
                         <td colspan="2">
                             <img src="achriwebapp/feature_vertical-gallery-chicago-_-8.jpg" class="c"/>
                         </td>
                          <td>
                             <img src="achriwebapp/brag-1-adjusted.jpg" class="b"/>
                         </td>
                     </tr>
                     <tr>
                         <td colspan="4">
                             <img src="achriwebapp/galleries-icc.jpg" class="a"/>
                         </td>
                     </tr>
                   <tr>
                     <td>
                        <img src="achriwebapp/images.jpg" class="a"/>
                     </td>
                     <td>
                         <img src="achriwebapp/slide-2.jpg" class="b"/>
                     </td>
                     <td rowspan="2">
                         <img src="achriwebapp/slide2.jpg" class="c"/>
                     </td>
                   </tr>
                   <tr>
                       <td colspan="2">
                           <img src="art quotes/art quote.png" class="b"/>
                       </td>
                       <td>
                           <img src="art quotes/art quote1.jpg" class="c"/>
                       </td>
                   </tr>
                   <tr>
                       <td>
                           <img src="art quotes/art quote2.png" class="a"/>
                       </td>
                       <td colspan="2">
                           <img src="art quotes/art quote3.jpg" class="c"/>
                       </td>
                       <td rowspan="2">
                           <img src="art quotes/art quote4.png" class="b"/>
                       </td>
                   </tr>
                   <tr>
                       <td colspan="3">
                           <img src="art quotes/artquote5.jpg" class="a"/>
                       </td>
                   </tr>
                </table>
           </center>
        </div>
    </body>
</html>

