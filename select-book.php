<?php
    // ************** make connection ************************
     $conn = mysqli_connect('localhost', 'root' , '', 'book-module');

    // ************** fire query to select ************************
     $q = "select * from books";
     $res = mysqli_query($conn,$q);


     echo "<a href='book-insert.html'>Book Insert</a>";

    // ************** displaying all records in table form with delete button calling delete-book.php with record id************************
     echo "<table border=1 > ";
     echo "<tr> <th>Book Id</th>  <th>Book Name</th> <th>Author</th> <th>ISBN</th> <th>Price</th> <th>Update Book</th> <th>Delete Book</th></tr>";
     while($row = mysqli_fetch_array($res))
     {
        //print_r($row);
        // echo $row['id'].''.$row['book_name'].''.$row['author'].''.$row['price'].'<br>';
        echo "<tr> <td>".$row['book_id']." </td>
                     <td>".$row['book_name']." </td>
                     <td>".$row['author']." </td>
                     <td>".$row['isbn']." </td>
                     <td>".$row['price']." </td>
                     <td><a href='update-book-form.php?book_id=".$row['book_id']."'>Update</a></td>
                     <td> <a onclick='return confirm(\"Are you sure want to delete?\")' href='delete-book.php?book_id=".$row['book_id']."'>Delete</a></td></tr>";
     }
    echo "</table>"
?>