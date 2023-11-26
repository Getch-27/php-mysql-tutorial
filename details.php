<?php
include("config/db_connect.php");
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $sql = "SELECT *FROM pizza WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $pizza = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include('templates/header.php'); ?>
    <div class="container">
        <?php if ($pizza) : ?>
            <h4><?php echo htmlspecialchars($pizza['title']) ?></h4>
            <p>Created By:<?php echo htmlspecialchars($pizza['email']) ?></p>
            <p>Date: <?php echo htmlspecialchars($pizza['created_at']) ?></p>
            <h5>Ingredients</h5>
            <p><?php echo htmlspecialchars($pizza['ingredients']) ?></p>
        <?php else : ?>
            <h5>No such pizza Exist!</h5>
        <?php endif; ?>
    </div>
    <?php include('templates/footer.php'); ?>
</body>

</html>