<?php
    //getting updated data from update book form through post method
    $book_name = $_POST['book_name'];
    $author = $_POST['author'];
    $isbn = $_POST['isbn'];
    $price = $_POST['price'];

    $book_id = $_POST['book_id'];

    $conn = mysqli_connect('localhost','root','','book-module');
    $q="update books set book_name='$book_name',author='$author',isbn='$isbn',price='$price' where book_id='$book_id'";
    $res = mysqli_query($conn,$q);

    if($conn)
    {
        echo "<script> alert('record successfully updated'); window.location='select-book.php';</script>";
    }
    else{
        echo "<script> alert('Error: not updated'); window.location='select-book.php';</script>";
    }
?>