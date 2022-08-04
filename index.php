<!doctype html><html><!-- InstanceBegin template="/Templates/main.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
 
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Website landing page</title>
<!-- InstanceEndEditable -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
    <link rel="stylesheet" href="Assets/bootstrap-4.5.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.js"></script>
    
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body onload="myFunction()">
    <div id="loading"></div>
    
    <div class="web-wrapper" id="webWrapper"> 
      <div class="web-header  justify-content-center align-content-center" id="webHeader"><a class="" href="#"><img class="img-fluid" src="Assets/Images/logo1234%20(2).png"/></a></div>
      <!-- InstanceBeginEditable name="EditRegion1" -->
        
      
        
        <!-- InstanceEndEditable -->
        
        <!-- InstanceBeginEditable name="EditRegion2" -->
        
        <div class="main-contents">
      <div class="row">
      
        <div class="col-lg-3 border-right" style="margin-top: 2px;">  <div class="form-container">
            
             <?php
error_reporting(0);
require('userregistrationrelatedfiles/db.php');
require('userregistrationrelatedfiles/createdatabaseandtable.php');
if (isset($_REQUEST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
     if($result){
            header("Location: login.php");
         $loggedin =  "Logged in";
        }
    }else{
?>
            <form form onsubmit="return validateForm()" name="signupform" class="login" action="" method="post">
            <label>User Name:</label>
            <input type="text" name="username" placeholder="Username" required>
            <label>Email:</label>
            <input type="email"  name="email" placeholder="Email Address" required>
            <label>Password:</label>
            <input type="password" name="password" placeholder="Password">
            <input type="submit" value = "Signup">
            <label id="specicLabel" name="submit"> Already a member?</label>
                <a href="login.php" style="color: #bf1500;">Login</a>
        
            </form>
            
           
          <?php     if (isset($loggedin)) echo $loggedin; ?>
	</div></div>
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
                  
                <div class="col-lg-12 pb-4"><h3 align="center">VIDEOS</h3><div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/uGSZUuBSDL4" allowfullscreen></iframe>
</div>
</div>
                       <div class="col-lg-12 pb-4">
						   <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/uGSZUuBSDL4" allowfullscreen></iframe>
</div>
</div>
				                   <div class="col-lg-12 pb-4">
						   <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/uGSZUuBSDL4" allowfullscreen></iframe>
</div>
</div>
				                   <div class="col-lg-12 pb-4">
						   <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/uGSZUuBSDL4" allowfullscreen></iframe>
</div>
</div>
				                   <div class="col-lg-12 pb-4">
						   <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/uGSZUuBSDL4" allowfullscreen></iframe>
</div>
</div>
				                   <div class="col-lg-12 pb-4">
						   <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/uGSZUuBSDL4" allowfullscreen></iframe>
</div>
</div>                 <div class="col-lg-12 pb-4">
						   <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/uGSZUuBSDL4" allowfullscreen></iframe>
</div>
</div>
                  
                   <div class="col-lg-12"><h3  align="center">FOLLOW US ON YOUTUBE</h3><iframe width="100%" height="378" src="https://www.youtube.com/embed/videoseries?list=PLlobToOqjk5QWcCsPWd0HbVx4pcunlvcy" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
               
            </div>
          </div>
          
           <div id="shuffleParent" class="col-lg-3 pt-4 border-left"><div id="shuffle"><a class="twitter-timeline" data-height="378" data-theme="light" href="https://twitter.com/MaddenBase?ref_src=twsrc%5Etfw">Tweets by MaddenBase</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
         </div>
                <div id="shuflle1" class="pt-4"><h3  align="center">FOLLOW US ON INSTAGRAM</h3>
                    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-03ee2304-19f4-4aa4-aad5-338f6aa195ef"  style="width: 100%; height:378px"></div>

</div>

</div>
         
        
      </div>
            </div>
        <!-- InstanceEndEditable -->
        <div class="web-footer" id="webFooter">COPYRIGHT &copy; 2020. MADDENBASE</div>
        
    </div>
  


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

    <script src="Assets/bootstrap-4.5.2-dist/js/bootstrap.min.js"></script>
    
    
       <script>
// Initialize DataTables API object and configure table
 var dataTable = $('#user_data').DataTable({
  "processing":true,
  "serverSide":true,
  "order":[],
  "ajax":{
   url:"fetch.php",
   type:"POST"
  },
  "columnDefs":[
   {
    "targets":[0],
    "orderable":false,
   },
  ],

 });
</script>

    <script>
		// $(document).ready(function(){
			// 	$('div#loading').removeAttr('id');
		// });
		var preloader = document.getElementById("loading");
		// window.addEventListener('load', function(){
		// 	preloader.style.display = 'none';
		// 	})

		function myFunction(){
			preloader.style.display = 'none';
		};
	</script>
    
    
  
</body>
<!-- InstanceEnd --></html> <?php } ?>
