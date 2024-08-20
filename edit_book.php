


<?php


	require('includes/config.php');



if($_POST['save_change']){


$b_nm=$_POST['name'];
      $sid=     $_POST['sid'];
			$b_cat=$_POST['cat'];
			$b_desc=$_POST['descr'];
			$b_edition=$_POST['edition'];
			$b_publisher=$_POST['publisher'];			
			$b_isbn=$_POST['isbn'];
			$b_page=$_POST['pages'];
			$b_price=$_POST['price'];


#$id = $_POST['sid'];
#$name = $_POST['name'];

#$description = $_POST['descr'];
#$publisher = $_GET['publisher'];
#$edition = $_GET['edition'];
#$isbn = $_GET['isbn'];
#$pages = $_GET['pages'];
#$price = $_GET['price'];
#$image = $_GET['image'];

}

   #$query = 'UPDATE book SET  
	#b_id = "100",
	#b_desc =  $description,
	#b_publisher = # $publisher, 
	#b_edition = #$edition,
	#b_isbn =# $isbn,
  # b_page= #$pages,
    #b_price =  $price ,
  # b_img = $image;"
	
	#$result1= mysql_query($query); 
	 #or die($query."Can#t Connect to Query...");
	  #if($data)
 

 


$qry ="
UPDATE BOOK
SET b_publisher =  '$b_publisher',b_edition='$b_edition' ,b_page='$b_page', b_isbn='$b_isbn',b_price='$b_price', b_nm='$b_nm', b_desc='$b_desc' where b_id='$sid'
";
 mysqli_query($conn,$qry) or die ($qry." cant update" );

echo "Book details updated";

echo "<br>";

echo "<a href='all_book.php'>Back to books page</a>";

?>




