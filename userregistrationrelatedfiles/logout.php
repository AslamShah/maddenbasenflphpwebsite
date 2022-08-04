<!--PHP login System by Eng. Sayed Aslam Shah-->
<?php
session_start();
if(session_destroy())
{
header("Location: ../login.php");
}
?>