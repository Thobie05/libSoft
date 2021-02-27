<?php
//Including Database configuration file.
include('includes/connection.php');
//Getting value of "search" variable from "script.js".
if (isset($_POST['sUserText'])) {
    //Search box value assigning to $Name variable.
    $Name = $_POST['sUserText'];
    //Search query.
    // $Query = "SELECT * FROM user_table WHERE fullname ='%$Name%' LIMIT 1";
    $Query = "SELECT * FROM user_table WHERE fullname LIKE '%$Name%' LIMIT 1";
    // $Query = "SELECT * FROM user_table WHERE fullname='$Name'";
    //Query execution
    $ExecQuery = MySQLi_query($link, $Query);
    //Creating unordered list to display result.

    while ($Result = MySQLi_fetch_array($ExecQuery)) {

?>
        <form action="issue_book.php" method="get">
            <div class="form-row">
                <div class="col-4">
                    <div class="form-group">
                        <img class="form-control-file" src="<?php echo $Result['u_image']; ?>" height="200" width="200">
                        <input type="hidden" class="form-control" name="uImage[]" value="<?php echo $Result['u_image']; ?>" placeholder="Image" disabled>
                    </div>
                </div>
                <div class="col-8">
                    <div class="form-group">
                        <input type="text" class="form-control" value="<?php echo $Result['user_id']; ?>" placeholder="User ID" disabled>
                        <input type="text" name="userName[]" id="fullName" class="form-control" value="<?php echo $Result['fullname']; ?>" placeholder="Name" disabled>
                        <input type="text" class="form-control" value="<?php echo $Result['class_id']; ?>" placeholder="Class" disabled>
                        <input type="text" name="email[]" class="form-control" value="<?php echo $Result['email']; ?>" placeholder="Email" disabled>
                        <input type="text" name="uRole[]" class="form-control" value="<?php echo $Result['user_role']; ?>" placeholder="User Role" disabled>
                        <input type="text" class="form-control" value="<?php echo $Result['address']; ?>" placeholder="Address" disabled>
                        <input type="text" class="form-control" value="<?php echo $Result['about']; ?>" placeholder="About" disabled>
                    </div>
                </div>
            </div>
        </form>

    <?php
        // $userImage = $_POST["uImage"];
        // $userName = $_POST["userName"];
        // $userEmail = $_POST["email"];
        // $userRole = $_POST["uRole"];

        $userImage = $Result['u_image'];
        $userName = $Result['fullname'];
        $userEmail = $Result['email'];
        $userRole = $Result['user_role'];
    }
}



//Getting value of "search" variable from "script.js".
if (isset($_POST['sBookText'])) {
    //Search box value assigning to $Name variable.
    $bName = $_POST['sBookText'];
    //Search query.
    // $Query = "SELECT * FROM add_books WHERE book_title = '%$bName%' LIMIT 5";
    $Query = "SELECT * FROM add_books WHERE book_title LIKE '%$bName%' LIMIT 5";
    // $Query = "SELECT * FROM add_books WHERE book_title='$bName'";
    //Query execution
    $ExecQueryB = MySQLi_query($link, $Query);
    //Creating unordered list to display result.

    while ($ResultB = MySQLi_fetch_array($ExecQueryB)) {

    ?>
        <form action="issue_book.php" method="get">
            <div class="form-row">
                <div class="col-4">
                    <div class="form-group">
                        <img class="form-control-file" src="<?php echo $ResultB['book_image']; ?>" height="200" width="200">
                        <input type="hidden" class="form-control" name="bImage[]" value="<?php echo $ResultB['book_image']; ?>" placeholder="Image" disabled>
                    </div>
                </div>
                <div class="col-8">
                    <div class="form-group">
                        <input type="text" name="bISBN[]" class="form-control" value="<?php echo $ResultB['isbn']; ?>" placeholder="Book Code" disabled>
                        <input type="text" name="bTitle[]" class="form-control" value="<?php echo $ResultB['book_title']; ?>" placeholder="Book Title" disabled>
                        <input type="text" class="form-control" value="<?php echo $ResultB['category']; ?>" placeholder="Category" disabled>
                        <input type="text" class="form-control" value="<?php echo $ResultB['author_name']; ?>" placeholder="ISBN" disabled>
                    </div>
                </div>
            </div>
        </form>

<?php

        $bookImage = $ResultB['book_image'];
        $bookISBN = $ResultB['isbn'];
        $bookTitle = $ResultB['book_title'];
    }
}





?>