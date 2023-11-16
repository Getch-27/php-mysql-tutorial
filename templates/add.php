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
        echo htmlspecialchars($_POST['email']);

    }

    //check title
    if (empty($_POST['title']))  {
        echo "Please enter your title";
    }else{
        echo  htmlspecialchars($_post['title']);
    }
    //check ingredients
    if(empty($_post['ingredients'])){
        echo "Please enter ingredients";

    }else{
        echo htmlspecialchars($_post['ingredients']);
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
            <input type="text" name="ingridients" id="" require>
            <div class="center">
              <input type="submit" value="submit" name="submit">
            </div>
        </form>

    </section>

	<?php include('footer.php'); ?>

</html>