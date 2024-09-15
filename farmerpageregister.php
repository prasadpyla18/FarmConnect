<?php
 //require 'config.php';
 $con=mysqli_connect("localhost","root","","vitap");
 session_start();   
?>


<!DOCTYPE html>
        <html lang="en" dir="ltr">
          <head>
          <script src="https://kit.fontawesome.com/c006cc8837.js" crossorigin="anonymous"></script>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- <title>Login Form | CodingLab</title> -->
            <style>
                /* Fonts Form Google Font ::- https://fonts.google.com/  -:: */
@import url('https://fonts.googleapis.com/css?family=Abel|Abril+Fatface|Alegreya|Arima+Madurai|Dancing+Script|Dosis|Merriweather|Oleo+Script|Overlock|PT+Serif|Pacifico|Playball|Playfair+Display|Share|Unica+One|Vibur');
/* End Fonts */
/* Start Global rules */
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
/* End Global rules */

/* Start body rules */
body {
    background-image: linear-gradient(-225deg, #E3FDF5 0%, #FFE6FA 100%);
background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%);
background-attachment: fixed;
  background-repeat: no-repeat;

    font-family: 'Vibur', cursive;
/*   the main font */
    font-family: 'Abel', sans-serif;
opacity: .95;
/* background-image: linear-gradient(to top, #d9afd9 0%, #97d9e1 100%); */
}



/* |||||||||||||||||||||||||||||||||||||||||||||*/
/* //////////////////////////////////////////// */




/* End body rules */

/* Start form  attributes */
form {
    width: 450px;
    min-height: 500px;
    height: auto;
    border-radius: 5px;
    margin: 2% auto;
    box-shadow: 0 9px 50px hsla(20, 67%, 75%, 0.31);
    padding: 2%;
    background-image: linear-gradient(-225deg, #E3FDF5 50%, #FFE6FA 50%);
}
/* form Container */
form .con {
    display: -webkit-flex;
    display: flex;
  
    -webkit-justify-content: space-around;
    justify-content: space-around;
  
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
  
      margin: 0 auto;
}

/* the header form form */
header {
    margin: 2% auto 10% auto;
    text-align: center;
}
/* Login title form form */
header h2 {
    font-size: 250%;
    font-family: 'Playfair Display', serif;
    color: #3e403f;
}
/*  A welcome message or an explanation of the login form */
header p {letter-spacing: 0.05em;}


a
{
    text-decoration:none;
    color:black;
}
/* //////////////////////////////////////////// */
/* //////////////////////////////////////////// */


.input-item {
    background: #fff;
    color: #333;
    padding: 14.5px 0px 15px 9px;
    border-radius: 5px 0px 0px 5px;
}
#id
{
    background: #fff;
    color: #333;
    padding: 14.5px 0px 15px 9px;
    border-radius: 5px 0px 0px 5px;
}



/* Show/hide password Font Icon */
#eye {
    background: #fff;
    color: #333;
  
    margin: 5.9px 0 0 0;
    margin-left: -20px;
    padding: 15px 9px 19px 0px;
    border-radius: 0px 5px 5px 0px;
  
    float: right;
    position: relative;
    right: 1%;
    top: -.2%;
    z-index: 5;
    
    cursor: pointer;
}
/* inputs form  */
input[class="form-input"]{
    width: 240px;
    height: 50px;
  
    margin-top: 2%;
    padding: 15px;
    
    font-size: 16px;
    font-family: 'Abel', sans-serif;
    color: #5E6472;
  
    outline: none;
    border: none;
  
    border-radius: 0px 5px 5px 0px;
    transition: 0.2s linear;
    
}
input[id="txt-input"] {width: 250px;}
/* focus  */
input:focus {
    transform: translateX(-2px);
    border-radius: 5px;
}

/* //////////////////////////////////////////// */
/* //////////////////////////////////////////// */

/* input[type="text"] {min-width: 250px;} */
/* buttons  */
button , a{
    display: inline-block;
    color: #252537;
  
    width: 280px;
    height: 50px;
  
    padding: 0 20px;
    background: #fff;
    border-radius: 5px;
    
    outline: none;
    border: none;
  
    cursor: pointer;
    text-align: center;
    transition: all 0.2s linear;
    
    margin: 7% auto;
    letter-spacing: 0.05em;
}
/* Submits */
.submits {
    width: 48%;
    display: inline-block;
    float: left;
    margin-left: 2%;
}

/*       Forgot Password button FAF3DD  */
.frgt-pass {background: transparent;}

/*     Sign Up button  */
.sign-up {background: #B8F2E6;}


/* buttons hover */
button:hover {
    transform: translatey(3px);
    box-shadow: none;
}

/* buttons hover Animation */
button:hover {
    animation: ani9 0.4s ease-in-out infinite alternate;
}
@keyframes ani9 {
    0% {
        transform: translateY(3px);
    }
    100% {
        transform: translateY(5px);
    }
}

            </style>

          </head>
          <body>
            <div class="overlay">
                <form  method="POST" action="farmerpageregister.php">
                   <div class="con">
                   <header class="head-form">
                      <h2>Register</h2>
                      <br>
                      
                      <p>Please Register With Your Credentials</p>
                   </header>
                   <br>
                   <div class="field-set">
                     
                     <span class="input-item">
                        <i class="fa fa-user-circle"></i>
                      </span>
                      <input class="form-input" name="name" id="txt-input" type="text" placeholder="@UserName" required >
                  
                   <br>

                   <span class="input-item">
                    <i class="fa fa-user-circle"></i>
                  </span>
                  <input class="form-input" name="phone" id="txt-input" type="text" placeholder="Phone" required >
                  
               <br>
                   <span class="input-item">
                    <i class="fa fa-key"></i>
                   </span>
                  <input class="form-input" name="password" type="password" placeholder="Password" id="pwd"  name="password" required>
                 
    
                 
                 
                  <br>

                  <span class="input-item">
                    <i class="fa fa-key"></i>
                   </span>
                  <input class="form-input" name="cpassword" type="password" placeholder="Confirm" id="pwd"  name="password" required  >
                 <br>
                  <span class="input-item">
                    <i class="fa fa-key"></i>
                   </span>
                  <input class="form-input" name="district" type="text" name="district" placeholder="District" id="pwd" required  >
                  <br>
                  <span class="input-item">
                    <i class="fa fa-key"></i>
                   </span>
                  <input class="form-input" name="town" type="text" placeholder="Town" name="town" id="pwd" required >
                 
<br>     

            
                 
                 
                 
                
                    <input type="submit" name="register" placeholder="Register" style="color:black; background-color:#E3FDF5"class="form-input" >
                   </div>
                </form>
                </div>
                <?php
                    if(isset($_POST['register']))
                    {
                        $name=$_POST['name'];
                        $phone=$_POST['phone'];
                        $password=$_POST['password'];
                        $cpassword=$_POST['cpassword'];
                        $district=$_POST['cpassword'];
                        $town=$_POST['cpassword'];
                        $unq=$phone;
                        $q3="SELECT phone FROM farmcreds where phone='$phone'";
                        $r3=mysqli_query($con,$q3);
                        if(mysqli_num_rows($r3))
                        {
                            echo "<script>
                            alert('phone number already exist please choose different one');
                            </script>";
                        }
                        else if($password!=$cpassword)
                        {
                            echo "<script>
                            alert('password is not same');
                            </script>";
                        }
                        else if(strlen($phone)!=10)
                        {
                            echo "<script>
                            alert('phone number lenght must be 10digts');
                            </script>";
                        }
                        else
                        {
                            $q="INSERT INTO farmcreds
                            VALUES ('$unq','$name','$phone','$password','$district','$town')";
                            $r=mysqli_query($con,$q);

                            $q2="INSERT INTO farmer_crops
                            VALUES ('$unq',0,0,0,0,0,0,0,0,0)";
                            $r2=mysqli_query($con,$q2);
                            if($r and $r2)
                            {
                                echo "
                               <script>
                               window.location.href = 'farmerpagelogin.php'; 
                               </script>";
                               // header('location:home.php');
                               

                            }
                            else
                            {
                                echo "<script>
                            alert('something went wrong');
                            </script>";
                            }
                        }
                        


                    }
                ?>
          </body>