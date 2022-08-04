<?php


  // Create database connection
  $db = mysqli_connect("localhost", "Kyle12_12", "MaddenBase12", "maddenbaseposts");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$positionteam = mysqli_real_escape_string($db, $_POST['positionteam']);
      $description = mysqli_real_escape_string($db, $_POST['description']);

  	// image file directory
  	$target = "./images/".basename($image);

  	$sql = "INSERT INTO posts (image, positionteam, description) VALUES ('$image', '$positionteam', '$description')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'],  $target )) {
  		$msg = "Post added successfully";
  	}else{
  		$msg = "Failed to add your post";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM posts");
?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<style type="text/css">
   #content{
   	width: 80%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
       
   	width: 80%;
   	padding: 10px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
         
       
   }
    #innerdiv {
        	height: 140px;
        padding: 0px;
   
         display: flex;
        align-content: center;
       align-items: center;
       justify-content: center
    }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
      
   }
   img{
       display: flex;
       float: inline start;
   	float: left;
   	margin: 0px;
   	width: 300px;
   	height: 140px;
    
   }
    .inline {
        display:inline-block;
    width: 20%;
        margin: 20px;
   
        
    }
    .inline1 {
     
     
        
    }
    
</style>
    
</head>
<body>
<div id="content">
  <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<img src='images/".$row['image']."' >";
        echo "<div id = 'innerdiv'>";
      	echo "<span class='inline'>".$row['positionteam']."</span>";
         	echo "<span class='inline'>".$row['description']."</span>";
        echo "</div>";
        
      echo "</div>";
    }
  ?>
  <form method="POST" action="addposts.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image" width="100%">
  	</div>
  	<div>
        <input  type="text" name="positionteam">
  	</div>
      <div>
       
            <textarea  name="description" cols="40" rows="5"></textarea>
  	</div>
  	<div>
  		<button type="submit" name="upload" >POST</button>
  	</div>
  </form>
</div>
     
</body>
</html>