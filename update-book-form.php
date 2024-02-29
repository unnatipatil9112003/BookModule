<html>
    <body>
        <?php
            $book_id = $_GET['book_id'];
            $conn = mysqli_connect('localhost','root','','book-module');
            $q="select * from books where book_id = '$book_id'";
            $res = mysqli_query($conn,$q);
            $row = mysqli_fetch_array($res);
        ?>
        <form action="update-book-save.php" method="post">

            <input type="hidden" name="book_id" value="<?php echo $row['book_id']; ?>"> 

            <label for="book_name">Book Name: </label>
            <input type="text" name="book_name" id="book_name" value="<?php echo $row['book_name'] ?>"><br><br>
            
            <label for="author">Author Name: </label>
            <input type="text" name="author" id="author" value="<?php echo $row['author'] ?>"><br><br>
            
            <label for="isbn">ISBN Number: </label>
            <input type="number" name="isbn" id="isbn" value="<?php echo $row['isbn'] ?>"><br><br>
            
            <label for="price">Price: </label>
            <input type="text" name="price" id="price" value="<?php echo $row['price'] ?>"><br><br>

            <input type="submit" value="submit" >

        </form>
    </body>
</html>