<?php 
//   if(isset($_GET['submit'])){
//     echo $_GET['email'];
//     echo $_GET['title'];
//     echo $_GET['ingridients'];
//   }

  if(isset($_POST['submit'])){
    // echo htmlspecialchars($_post['email']) ;
    // echo htmlspecialchars($_post['title']);
    // echo htmlspecialchars($post['ingridients']);

    //check email
    if(empty($_POST['email'])){
        echo "Please enter your email";
    }else{
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            echo "Please enter a valid email address";
        }
        
    }

    //check title
    if (empty($_POST['title']))  {
        echo "Please enter your title";
    }else{
        $title = $_POST['title'];
        if(!preg_match("/^[a-zA-Z\s]+$/",$title)){
            echo 'Title must be letters and numbers';
        }
    }
    //check ingredients
    if (empty($_POST['ingredients'])) {
        echo "Please enter ingredients";
    } else {
        $ingredients = $_POST['ingredients'];
    
        if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]+)*$/', $ingredients)) {
            echo "Ingredients must be comma separated";
        }
    }
    
  }



?>

<!DOCTYPE html>
<html>
	
	<?php include('header.php'); ?>

    <section class="container gray-text">
        <h4>Add a Pizza</h4>
        <form action="" method="post">
            <label for="">Your Email:</label>
            <input type="text" name="email" id="" require>
            <label for="">Pizza Title:</label>
            <input type="text" name="title" id="" require>
            <label for="">Ingridants (comma separeted):</label>
            <input type="text" name="ingredients" id="" require>
            <div class="center">
              <input type="submit" value="submit" name="submit">
            </div>
        </form>

    </section>

	<?php include('footer.php'); ?>

</html>