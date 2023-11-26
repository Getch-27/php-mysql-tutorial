<?php 
   $title =$email =$ingredients = '';
   $errors = array('email' => '' , 'title' => '' , 'ingredients' => '');
  if(isset($_POST['submit'])){

    //check email
    if(empty($_POST['email'])){
        $errors['email'] = "Please enter your email";
    }else{
         $email = $_POST['email'];
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Please enter a valid email address";
        }
        
    }

    //check title
    if (empty($_POST['title']))  {
        $errors['title'] = "Please enter your title";
    }else{
        $title = $_POST['title'];
        if(!preg_match("/^[a-zA-Z\s]+$/",$title)){
            $errors['title'] = 'Title must be letters and numbers';
        }
    }
    //check ingredients
    if (empty($_POST['ingredients'])) {
        $errors['ingredients'] = "Please enter ingredients";
    } else {
        $ingredients = $_POST['ingredients'];
    
        if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]+)*$/', $ingredients)) {
            $errors['ingredients'] = "Ingredients must be comma separated";
        }
    }
    if(array_filter($errors)){
        echo "invalid form";
    } else{
         header("location: ../index.php");
         exit();
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
            <input type="text" name="email" id="" value = "<?php echo htmlspecialchars($email) ?>" require>
            <div class="red-text"><?php echo $errors['email'] ?></div>
            <label for="">Pizza Title:</label>
            <input type="text" name="title" id="" require value = "<?php echo htmlspecialchars($title) ?>">
            <div class="red-text"><?php echo $errors['title'] ?></div>
            <label for="">Ingridants (comma separeted):</label>
            <input type="text" name="ingredients" id="" require value = "<?php echo htmlspecialchars($ingredients ) ?>">
            <div class="red-text"><?php echo $errors['ingredients'] ?></div>
            <div class="center">
              <input type="submit" value="submit" name="submit">
            </div>
        </form>

    </section>

	<?php include('footer.php'); ?>

</html>