<?php
require('includes/config.php');
	if(!empty($_POST))
	{
		$msg=array();
		
		
		if(!empty($msg))
		{
			echo '<b>Error:-</b><br>';
			
			foreach($msg as $k)
			{	
				echo '<li>'.$k;
			}
		}
		else
		{
	
		
			$cat=$_POST['cat'];
			
			$query="insert into category(cat_nm) values('$cat')";
			
			mysqli_query($conn,$query) or die("can't Execute...");
		
			header("location:category.php");
		}
	}
	else
	{
		header("location:index.php");
	}
?>
	
	