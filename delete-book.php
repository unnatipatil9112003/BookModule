<?php
    $book_id = $_GET['book_id'];
    $conn = mysqli_connect('localhost','root','','book-module');
    $q="delete from books where book_id='$book_id'";
    $res = mysqli_query($conn,$q);

    if($conn)
    {
        echo "<script> alert('record deleted'); window.location='select-book.php';</script>";
    }
    else{
        echo 'fail to delete';
    }
?>