<?php 
session_start();
require('includes/config.php');
error_reporting(0);

	$q="select * from book";
	 $res=mysqli_query($conn,$q) or die("Can't Execute Query...");
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--

Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Title      : Lotus Flower
Version    : 1.0
Released   : 20080501
Description: A two-column, fixed-width and lightweight template ideal for 1024x768 resolutions. Suitable for blogs and small websites.

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
		<style>
			table{padding:3px;border:15px solid gray}
			td,th{padding:2px}
			
		</style>
</head>
<body>
<!-- start header -->
<div id="header">
	<div id="menu">
		<?php
			include("includes/menu.inc.php");
		?>
	</div>
</div>
<div id="logo-wrap">
<div id="logo">
		<?php
			include("includes/logo.inc.php");
		?>
</div>
</div>
<!-- end header -->
<!-- start page -->

<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post">
			<h1 class="title"></h1>
			<div class="entry">
				
					<table border='1' WIDTH='100%'>
						<tr>
						<td colspan="7"><a href="addbook.php">Add New Book</a></td>
						<td colspan="7"><a href="process_del_book.php">delete Book</a></td>
					   

						</tr>
						<tr>
<td WIDTH='10%' style="color:darkgreen"><b><u>sl no</u></b></td>
<td WIDTH='10%' style="color:darkgreen"><b><u>book id</u></b></td>
<TD style="color:darkgreen" WIDTH='50%'><b><u> book name</u></b></TD>
<TD style="color:darkgreen" WIDTH='20%'><b><u>PUBLISHER</u></b></TD>
<TD style="color:darkgreen" WIDTH='20%'><b><u>isbn</u></b></TD
<TD style="color:darkgreen" WIDTH='20%'><b><u>subcategory</u></b></TD>			
<TD style="color:darkgreen" WIDTH='20%'><b><u>description</u></b></TD>
<TD style="color:darkgreen" WIDTH='20%'><b><u>edition</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>pages</u></b></TD>	
<TD style="color:darkgreen" WIDTH='25%'><b><u>PRICE</u></b></TD>	
<TD style="color:darkgreen" WIDTH='20%'><b><u>image</u></b></TD		
							
						</tr>
						<?php
							$count=1;
							while($row=mysqli_fetch_assoc($res))
						{
							echo "
							<tr>
						    <td>'.$count.'
							<td>".$row['b_id']."</td>
							<td>".$row['b_nm']."</td>
							<td>".$row['b_publisher']."</td>
							<td>".$row['b_isbn']."</td>
						
							<td>".$row['b_desc']."</td>
					        <td>".$row['b_edition']."</td>
							<td>".$row['b_page']."</td>
							<td>".$row['b_price']."</td>
							<td>".$row['b_img']."</td>
				         	<td><a href= 'admin_edit.php?sid=$row[b_id]&bnm=$row[b_nm]&bdesc=$row[b_desc]&bpub=$row[b_publisher]&bedition=$row[b_edition]&bpage=$row[b_page]&bisbn=$row[b_isbn]&bprice=$row[b_price]' onclick=return checkedit()>edit</td>
				         	<td><a href= 'process_del_book.php?sid=$row[b_id]' onclick=return
				         	checkdelete()>Delete</td>
				         	  
						    </tr>
						    ";
									$count++;
							}
						?>

					</TABLE>
				
			</div>
			
		</div>
		
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	
	<!-- end sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>

<script>
function checkdelete()
{
	return Confirm("are you sure you want to delete this book?");
}
</script>
<script>
function checkedit()
{
	return Confirm("are you sure you want to edit info of this book?");
}
</script>

</body>
</html>
