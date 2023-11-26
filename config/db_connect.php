<?php
//Connect to database
$conn = mysqli_connect('localhost', 'getch', 'getch@123', 'ninja_pizza');

if (!$conn) {
    echo "the database is not connected : " . mysqli_connect_error();
}
