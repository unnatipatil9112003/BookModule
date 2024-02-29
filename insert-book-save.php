<?php
    // ************** make connection to database************************
    $conn = mysqli_connect('localhost', 'root' , '', 'book-module');

    // if($conn)
    // {
    //     echo 'connected';
    // }

    // ************** get data in variables through get mehtod ************************
    $book_name = $_GET['book_name'];
    $author = $_GET['author'];
    $isbn = $_GET['isbn'];
    $price = $_GET['price'];

    // ************** fire the query to insert data ************************
    // $q = "insert into books values ('','three mistakes of my life','chetan bhagat','2662737373737','120.877')";
    $q = "insert into books values ('','$book_name','$author','$isbn','$price')";
    $res = mysqli_query($conn,$q);

    // ************** check record inserted or not ************************
    if($res)
    {
        echo 'inserted';
    }
    else{
        echo 'not inserted'; echo '<br>';
        echo mysqli_error($conn);
    }
?>