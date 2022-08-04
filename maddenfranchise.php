
<?php
include("userregistrationrelatedfiles/auth.php");
?>

<!doctype html>

<html><!-- InstanceBegin template="/Templates/main.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
 
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Madden franchise</title>
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
        
      <div class="web-nav" id="webNav"><nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-center align-content-center" id="navbarSupportedContent">
    <ul class="navbar-nav justify-content-center align-content-center">
      <li class="nav-item">
        <a class="nav-link " href="home.php">Home </a>
      </li>
        
        <li class="nav-item">
        <a class="nav-link current" href="maddenfranchise.php">Madden Franchise <span class="sr-only">(current)</span></a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="maddenultimateteam.php">MUT</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="maddentheyard.php">Madden the Yard </span></a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="maddentipstricksebooks.php">Tips Tricks & eBooks </a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="maddenshopformerch.php">Shop for Merch </a>
      </li>
           <li class="nav-item">
        <a class="nav-link" href="contactus.php">Contact Us </a>
      </li>
      
    </ul>
    
  </div>
</nav></div>
        
        <!-- InstanceEndEditable -->
        
        <!-- InstanceBeginEditable name="EditRegion2" -->
        
        <div class="main-contents">
      <div id="maddenFranchisePage" class="row">
      
        <div class="col-lg-3 border-right">  <div class="form-container"> <div class="user-profile-custom">
                <h6>Welcome to your profile </h6>
                <p>You are logged in as</p>
               <h4 class="profile-user-name"><?php echo $_SESSION['username']; ?>!</h4>
                <button type="button" class="btn btn-dark" onclick="location.href='userregistrationrelatedfiles/logout.php';">Logout</button>
            </div></div></div>
          <div class="col-lg-6">
              <div class="row row1">
                  <div ><img class="img-fluid" src="Assets/Images/post2-fw-image.jpg"/></div>
              </div>
               <div class="row pt-4 row2">
                  
                       <h3>MaddenBase Franchises</h3>
                   
            
            <div class="row mt-30 ">
                <div class="col-sm-12 col-md-6 col-custom">
                    
                        <div class="box20 ">
                        <img src="Assets/Images/product2-large-image.jpg" alt="">
                        <div class="box-content">
                            
                            <h3 class="title">Madden Franchises</h3>
                            <p><a class="button" href="/more">Learn More</a></p>
                        </div>
                    </div>
                </div>
                
                 <div class="col-sm-12 col-md-6 col-custom">
                    
                        <div class="box20 ">
                        <img src="Assets/Images/product1-large-image.jpg" alt="">
                        <div class="box-content">
                            
                            <h3 class="title">Madden Franchises</h3>
                            <p><a class="button" href="/more">Learn More</a></p>
                        </div>
                    </div>
                </div>
                   
                   </div>
                   
             
               </div>
              
                <div class="row pt-4 row3">
                  
                       <h3>Featured Franchises</h3>
                   
            
            <div class="row mt-30">
                <div class="col-sm-12 col-md-6 col-custom">
                    
                        <div class="box20 ">
                        <img src="Assets/Images/product2-large-image.jpg" alt="">
                        <div class="box-content">
                            
                            <h3 class="title">Madden Featured Franchises</h3>
                            <p><a class="button" href="/more">Learn More</a></p>
                        </div>
                    </div>
                </div>
                
                 <div class="col-sm-12 col-md-6 col-custom">
                    
                        <div class="box20 ">
                        <img src="Assets/Images/product1-large-image.jpg" alt="">
                        <div class="box-content">
                            
                            <h3 class="title">Madden Featured Franchises</h3>
                            <p><a class="button" href="/more">Learn More</a></p>
                        </div>
                    </div>
                </div>
                   
                   </div>
                   
             
               </div>
               <div class="row mt-2 m-0 p-0">
                   <div  class="col-12  m-0 p-0">
                       
                       <!--
<div class="post-search-panel">
<input type="text" id="searchInput" onkeyup="myFunction()" placeholder="Search here..." title="Type in a name"> <span class="dropdown ">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Position
    <span class="caret"></span></button>
    <ul  id="sortBy"  class="dropdown-menu pl-2">
        <li><a href="#">Owner</a></li>
      <li><a href="#">Player</a></li>
      <li><a href="#">Coach</a></li>
          <li><a href="#">Position</a></li>
      <li class="divider  "></li>
      <li class="dropdown-header  pl-0">Offense</li>
      <li><a href="#">QB</a></li>
      <li><a href="#">HB</a></li>
      <li><a href="#">FB</a></li>
        <li><a href="#">WR</a></li>
        <li><a href="#">TE</a></li>
      <li class="divider  "></li>
      <li class="dropdown-header pl-0">Defense</li>
      <li><a href="#">LOLB</a></li>
      <li><a href="#">RE</a></li>
      <li><a href="#">LE</a></li>
        <li><a href="#">DT</a></li>
        <li><a href="#">FS</a></li>
         <li><a href="#">SS</a></li>
      <li><a href="#">CB</a></li>
      <li><a href="#">ROLB</a></li>
        <li><a href="#">LLB</a></li>
        
    </ul>
  </span>
    <span class="dropdown ">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Team(s)
    <span class="caret"></span></button>
    <ul  id="sortBy"  class="dropdown-menu pl-2">
        <li><a href="#">Dolphins/Bulls</a></li>
      <li><a href="#">Patriots</a></li>
      <li><a href="#">Jets</a></li>
          <li><a href="#">Bills</a></li>
     
        
    </ul>
  </span>
                       </div>
                       
                       <h3>Search results<i class="fa-hand-o-left"></i></h3>

<table id="memListTable">
  
  <tr>
    <td><img src="Assets/Images/post2-sm-image.jpg"</td>
    <td>Position: Owner<br>Team: Dohpin</td>
      <td>Your Franchise description goes here</td>
  </tr>
   <tr>
    <td><img src="Assets/Images/post2-sm-image.jpg"</td>
    <td>Position: Owner<br>Team: Dohpin</td>
      <td>Your Franchise description goes here</td>
  </tr>
   <tr>
    <td><img src="Assets/Images/post2-sm-image.jpg"</td>
    <td>Position: Owner<br>Team: Dohpin</td>
      <td>Your Franchise description goes here</td>
  </tr>
  
</table>
-->
                       
                       
                  <div class="table-responsive p-0 w-100 ">
    <div id="responivePostsTable" class="w-100" >
    <table id="user_data" class="table table-bordered table-striped w-100">
     <thead>
      <tr >
       <th  width="5%">Image</th>
       <th width="10%">Position/Team</th>
       <th width="20%">Description</th>
      
      </tr>
     </thead>
    </table>
                      </div>
   </div>
</div>
                   
                   
                   
                   
              </div>
               
            
           
          </div>
          
           <div id="shuffleParent" class="col-lg-3 pt-4 border-left">
               <div class = "addposts"><a href="addposts.php">addposts</a></div>
               
               <div id="shuffle"><a class="twitter-timeline" data-height="378" data-theme="light" href="https://twitter.com/MaddenBase?ref_src=twsrc%5Etfw">Tweets by MaddenBase</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
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
<!-- InstanceEnd --></html> 
