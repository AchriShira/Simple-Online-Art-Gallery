<?php
	session_start();
	require_once('config.php');
		if(isset($_POST['register']))
			{
				$username=$_POST['username'];
				$password=$_POST['password'];
				$cpassword=$_POST['cpassword'];
				
				if($password==$cpassword)
				{
					$query = "select * from user where username='$username'";
					//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
					{
						if(mysqli_num_rows($query_run)>0)
						{
							echo '<script type="text/javascript">alert("This Username Already exists.. Please try another username!")</script>';
						}
						else
						{ 
						  $money=0;
							$query = "insert into user values('$username','$password',$money)";
							$query_run = mysqli_query($con,$query);
							if($query_run)
							{
								//echo '<script type="text/javascript">alert("User Registered.. Welcome")</script>';
								$_SESSION['username'] = $username;
								$_SESSION['password'] = $password;
                               header( "Location: homepage.php");
								exit();
							}
							else
							{
								echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
							}
						}
					}
					else
					{
						echo '<script type="text/javascript">alert("DB error")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
				}
				
			}
			else
			{
			}
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
            *{
                margin-left: 0px;
            }
            body{
                background-image: url('achriwebapp/What-Models-do-I-Sell-For-3D-Drains-820x360.jpg');
            }
            h3{
                margin-top: 40px;
                text-align: center;
            }
            table{
                margin-top: 200px;
            }
            #submitform{
                text-align: center;
            }
            input{
                cursor:pointer;
                border-radius:20px;
                width: 200px;
                height:40px;
            }
            input:active{
                box-shadow: 0 5px #666;
            }
            input:hover{
                opacity:0.5;
            }
            b{
                color:white;
                text-transform: uppercase;
                text-shadow: 3px 2px black;
            }
            #submitform{
                cursor:pointer;
                border-radius:20px;
                width: 200px;
                height:40px;
                background-color: lightblue;
            }
            #submitform:active{
                background-color:green;
                box-shadow: 0 5px #666;
                transform: translateY(4px);
            }
            #submitform:hover{
              background-color: lightseagreen;
            }
        </style>
    </head>
    <body>
        <h3><span style="color:white; text-shadow: 4px 3px black;">Do you want to share and explore your art? Here you go.</span></h3>
        <br>
        <h3><span style="color:white; text-shadow:3px 2px black;">HURRY AND SIGN UP!</span></h3>
    <center>
        <form action="artists.php" method="post"><center>
            <fieldset style="width:500px; height: 500px;">
                <legend>
                    Art is creation
                </legend>
                <table>
                    <tr>
                        <td>
                            <b>Email:</b>
                        </td>
                        <td>
                            <input name="username" type="text" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Password:</b>
                        </td>
                        <td>
                            <input type="password" required name="password">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Re-enter Password:</b>
                        </td>
                        <td>
                            <input type="password" required name="cpassword">
                        </td>
                    </tr>
                    <tr>
                        <td>
                             <button name="register" id="submitform" style="background-color: lightskyblue"> Sign Up</button>
                        </td>
                    </tr>
                </table>
            </fieldset></center>
        </form>
    </center>
    </body>
</html>

