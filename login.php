<!doctype html>
<html><!-- InstanceBegin template="/Templates/secondarytemplate.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Login</title>
<!-- InstanceEndEditable -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/bootstrap-4.5.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
    
    <div class="web-wrapper" id="webWrapper"> 
      <div class="web-header  justify-content-center align-content-center" id="webHeader"><a class="" href="#"><img class="img-fluid" src="Assets/Images/logo1234%20(2).png"/></a></div>
      <!-- InstanceBeginEditable name="EditRegion1" -->
        
      
        
        <!-- InstanceEndEditable -->
        
        
        
        
        
        <!-- InstanceBeginEditable name="EditRegion2" -->
        
        
        
        <div class="main-contents">
      <div class="row">
      
        <div class="col-lg-3 border-right">  <div class="form-container">
          
          <?php
error_reporting(0);
require('userregistrationrelatedfiles/db.php');
require('userregistrationrelatedfiles/createdatabaseandtable.php');
session_start();
if (isset($_POST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
	    header("Location: home.php");
         }else{
	echo "<div class='form'>
<h3>Username/Password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
?>
	
            <form action="" method="post" name="login">
            <label>User Name:</label>
            <input type="text" name="username" placeholder="Username" autofocusname="username" placeholder="Username" autofocus >
            <label>Password:</label>
            <input type="password" name="password" placeholder="Password">
            <input type="submit" name="submit" value = "Login">
            <label id="specicLabel"> Not a member yet?</label>
            <a href="index.php" style="color: #bf1500;">Signup</a>
            </form><?php } ?></div>


          
          
          
          </div>
          <div class="col-lg-6">
             
                   <!-- Buttons -->
  <div class="custom-padding">
   
    <div class="row">
      <!-- MUT-->
        
      <div class="col-lg-6 mb-3 mb-lg-0">
          <a href="#">
        <div class="hover hover-3 text-white rounded"><img src="Assets/Images/MUT1.jpg" alt="">
          <div class="hover-overlay"></div>
          <div class="hover-3-content px-5 py-4">
            <h3 class="hover-3-title text-uppercase font-weight-bold mb-1"><span class="font-weight-light">MUT </span></h3>
           
          </div>
        </div>
              </a>
      </div>
           
      <!-- FRANCHISE   -->
       
      <div class="col-lg-6">
           <a href="#">
        <div class="hover hover-3 text-white rounded"><img src="Assets/Images/Franchise.jpg" alt="">
          <div class="hover-overlay"></div>
          <div class="hover-3-content px-5 py-4">
            <h3 class="hover-3-title text-uppercase font-weight-bold mb-1"><span class="font-weight-light">FRANCHISE </span></h3>
           
          </div>
        </div>
              </a>
      </div>
            
    </div>
  </div>
              
              <div class="row">
                  
                <div class="col-lg-12 pb-4"><h3 align="center">FOLLOW US ON TWITCH</h3><iframe src="https://player.twitch.tv/?channel=maddenbase&parent=localhost" frameborder="0" allowfullscreen="true" scrolling="no" height="378" width="100%"></iframe>
</div>
                       <div class="col-lg-12 pb-4"><h3   align="center">TWITCH CHAT LIVE</h3><iframe
  id="chat_embed"
  src="https://www.twitch.tv/embed/maddenbase/chat?parent=localhost"
  height="378"
 width="100%">
</iframe>
</div>
                  
                   <div class="col-lg-12"><h3  align="center">FOLLOW US ON YOUTUBE</h3><iframe width="100%" height="378" src="https://www.youtube.com/embed/videoseries?list=PLlobToOqjk5QWcCsPWd0HbVx4pcunlvcy" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
               
            </div>
          </div>
          
          <div class="col-lg-3 pt-4 border-left"><a class="twitter-timeline" data-height="378" data-theme="light" href="https://twitter.com/MaddenBase?ref_src=twsrc%5Etfw">Tweets by MaddenBase</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                <div class="pt-4"><h3  align="center">FOLLOW US ON INSTAGRAM</h3>
                    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-03ee2304-19f4-4aa4-aad5-338f6aa195ef"  style="width: 100%; height:378px"></div>

</div>

</div>
         
        
      </div>
            </div>
        
        
        <!-- InstanceEndEditable -->
        <div class="web-footer" id="webFooter">COPYRIGHT &copy; 2020. MADDENBASE</div>
        
    </div>
  

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="Assets/bootstrap-4.5.2-dist/js/bootstrap.min.js"></script>
    
  
</body>
<!-- InstanceEnd --></html>

