<?php 


?>

<!DOCTYPE html>
<html>
	
	<?php include('header.php'); ?>

    <section class="container gray-text">
        <h4>Add a Pizza</h4>
        <form action="" method="post">
            <label for="">Your Email:</label>
            <input type="text" name="email" id="">
            <label for="">Pizza Title:</label>
            <input type="text" name="title" id="">
            <label for="">Ingridants (comma separeted):</label>
            <input type="text" name="ingridients" id="">
            <div class="center">
              <input type="submit" value="submit" name="submit">
            </div>
        </form>

    </section>

	<?php include('footer.php'); ?>

</html>