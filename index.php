<?php 
  //Connect to database
  $conn = mysqli_connect('localhost','getch','getch@123','ninja_pizza');

  if($conn){
	echo "the database is connected successfully";
  }else{
	echo "the database is not connected : " . mysqli_connect_error();
  }
  //query for select pizza
  $sql = 'SELECT title, ingredients, id FROM pizza';

  // send query to database
  $result = mysqli_query($conn, $sql);

  //fetch the result
  $pizza = mysqli_fetch_all($result, MYSQLI_ASSOC);

  //free the result memory
  mysqli_free_result($result);
  //close connection
  mysqli_close($conn);
  
  print_r($pizza);
?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>

	<?php include('templates/footer.php'); ?>

</html>