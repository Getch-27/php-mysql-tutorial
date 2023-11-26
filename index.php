<?php 
  //Connect to database
  $conn = mysqli_connect('localhost','getch','getch@123','ninja_pizza');

  if(!$conn){
    echo "the database is not connected : " . mysqli_connect_error();
  }
  //query for select pizza
  $sql = 'SELECT title, ingredients, id FROM pizza';

  // send query to database
  $result = mysqli_query($conn, $sql);

  //fetch the result
  $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

  //free the result memory
  mysqli_free_result($result);
  //close connection
  mysqli_close($conn);
  

?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>
   <h4 class="center grey-text">Pizzas!</h4>
   <div class="container">
    <div class="row">
      <?php foreach($pizzas as $pizza){ ?>
        <div class="col s6 md3">
          <div class="card z-depth-0">
            <div class="card-content center">
              <h6> <?php echo htmlspecialchars($pizza['title']); ?></h6>
              <ul>
                <?php foreach(explode(',', $pizza['ingredients']) as $ing){ ?>
                    <li> <?php echo htmlspecialchars($ing)  ?></li>
                  <?php }?>
              </ul>
            </div>
            <div class="card-action right-align">
              <a class="brand-text" href="#">More Info</a>
            </div>
          </div>
        </div>
       <?php }?>
    </div>
   </div>
   
	<?php include('templates/footer.php'); ?>

</html>