<?php
require('includes/config.php');
error_reporting(0);
$row= $_GET['sid'];
$query="DELETE FROM BOOK WHERE b_id = '$row'";
$res=mysqli_query($conn,$query);


if($res)
{
	echo "<script>alert('book deleted from the database')</script>";


}


else
{
	echo "<font color='red'> failed to delete the book from database";
}
?> 





									
										
			
	


