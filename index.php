<?php 
  //Connect to database
  $conn = mysqli_connect('localhost','getch','getch@123','ninja_pizza');

  if($conn){
	echo "the database is connected successfully";
  }else{
	echo "the database is not connected : " . mysqli_connect_error();
  }

?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>

	<?php include('templates/footer.php'); ?>

</html>