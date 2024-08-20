 <?php

				include("includes/head.inc.php");

		?>


<?php 

	  session_start();
require('includes/config.php');
error_reporting(0);

    $sid = $_GET['sid'];
 	$bnm = $_GET['bnm'];
 	$bpub = $_GET['bpub'];
 	$bdesc= $_GET['bdesc'];
 	$bisbn = $_GET['bisbn'];
 	$bpage = $_GET['bpage'];
 	$bprice = $_GET['bprice'];
 	$bedition = $_GET['bedition'];



    $query = "SELECT * FROM book WHERE b_isbn = '$isbn'";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "Can't retrieve data " . mysqli_error($conn);
		exit;
	}
    $row = mysqli_fetch_assoc($result);
    
 ?>
        <?php

				include("includes/head.inc.php");

		?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");

		?>
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
	<form method="post" action="edit_book.php" enctype="multipart/form-data">
		<table class="table">
			<tr>
				<th>ID</th>
				<td><input type="text" name="sid" value="<?php echo $sid; ?>" readOnly="true"></td>
			</tr>
			<tr>
				<th>Name</th>
				<td><input type="text" name="name" value="<?php echo $bnm; ?>" required></td>
			</tr>
			<tr>
				<th>subcategory</th>
				<td><input type="text" name="cat" value="<?php echo $bsubcat;?>" required></td>
			</tr>
		
			<tr>
				<th>Description</th>
				<td><textarea name="descr" cols="40" rows="5"><?php echo $bdesc;?></textarea>
			</tr>
			<tr>
				<th>publisher</th>
				<td><input type="text" name="publisher" value="<?php echo $bpub;?>" required></td>
			</tr>
			<tr>
				<th>Edition</th>
				<td><input type="text" name="edition" value="<?php echo $bedition; ?>" required></td>
			</tr>
			<tr>
				<th>ISBN</th>
				<td><input type="text" name="isbn" value="<?php echo $bisbn; ?>" required></td>
			</tr>
			<tr>
				<th>Pages</th>
				<td><input type="text" name="pages" value="<?php echo $b_page; ?>" required></td>
			</tr>
			<tr>
				<th>Price</th>
				<td><input type="text" name="price" value="<?php echo $bprice; ?>" required></td>
			</tr>
			<tr>
				<th>Image</th>
				<td><input type="file" name="image"></td>
			</tr>
		</table>
		<input type="submit" name="save_change" value="Change" class="btn btn-primary">
		<input type="reset" value="cancel" class="btn btn-default">
	</form>
	<br/>
	<a href="edit_book.php" class="btn-success">Confirm</a>

