<?php session_start(); /* Starts the session */
    
    /* Check Login form submitted */    
    if(isset($_POST['Submit'])){
        /* Define username and associated password array */
        $logins = array('Alex' => '123456','creators' => 'password1','hnginterns' => 'password2');
        
        /* Check and assign submitted Username and Password to new variable */
        $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
        $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
        
        /* Check Username and Password existence in defined array */        
        if (isset($logins[$Username]) && $logins[$Username] == $Password){
            /* Success: Set session variables and redirect to Protected page  */
            $_SESSION['UserData']['Username']=$logins[$Username];
            header("location:index.php");
            exit;
        } 
        elseif ($Username == 0 && $Password == 0) {
             $msg="<span style='color:red'>Fields cannot be empty</span>";
         } 
        else {
            /*Unsuccessful attempt: Set error message */
            $msg="<span style='color:red'>Invalid Login Details</span>";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
<title>login page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="css/main.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great&display=swap" rel="stylesheet">
</head>
<body>
<!-- <h1 class="center">The Team Of The Creators</h1> -->
  

    <form action="" method="post" name="Login_Form">
<div class="row">
<div class= "card column to-left">
	<h2 class="center">Welcome back</h2>	
<center>
		 <label>
                    <input type="text" name="Username" placeholder="Username" >
                </label>
            <br><br><br>
            <label>
                <input type="Password" name="Password" placeholder="Password" >
            </label>
        </center>
            <br>
                        <div class="afterform"><center>
                <input type="checkbox"><a href="#" class="anchor">Remember me</a><br>
                 <a class="anchor" href="#">Forgot password?</a>
                     <tr>
            </div>
       </center>
       <br>
       <center>
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>  
</center>
            <br>
<center>
            <input name="Submit" type="submit" class="btn" value="Login"><br><br>
            </center>
            <center>
            <p style="text-decoration: none;">username:Alex 
                <br>
            Password:123456</p>
        </center>

	<!--<hr class="x-axis"><span class="dot"></span></hr>-->
<center>
<div class="socio">
<a href="#" class="fa fa-facebook"></a>
<a  href="#" class="fa fa-slack" ></a>
<a href="#" class="fa fa-twitter"></a>

<p>Don't have an account?<a href="signup.php" class="anchor1">Sign up here</a></p>
</div>
</div>
</center>
    </form>

	<img class="img" src="img/major2.jpg">

</div>
<div>
	<img class="bottom-img" src="img/crid_desktopnew.png"></img>
</div>

</body>


</html>