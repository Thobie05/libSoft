<?php
include('includes/header.php');
include('includes/navbar.php');
include('includes/connection.php');

?>





<!-- Container For Card Header & Body -->
<div class="container-fluid">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Issued Books

            </h6>
        </div>

        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">

                <div class="row">



                    <div class="col-6">
                        <div class="form-group col-12">
                            <div class="input-group">
                                <span class="input-group-text" id="">Search User</span>
                                <input type="text" id="sUserText" onChange="getUser(this.value);" class="form-control" placeholder="Type to Search">
                            </div>

                        </div>

                        <div class="col-12" id="displayUser">
                        </div>

                    </div>

                    <div class="col-6">
                        <div class="form-group col-12">
                            <div class="input-group">
                                <span class="input-group-text" id="">Search Book</span>
                                <input type="text" id="sBookText" onChange="getBook(this.value);" class="form-control" placeholder="Type to Search">
                            </div>
                        </div>

                        <div class="col-12" id="displayBook">
                        </div>

                    </div>

                    <div class="col-6">
                        <div class="form-group col-12">
                            <div class="input-group">
                                <span class="input-group-text" id="">Issue Date</span>
                                <input type="date" id="" name="issDate" class="form-control" placeholder="26-02-2021">
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group col-12">
                            <div class="input-group">
                                <span class="input-group-text" id="">Return Date</span>
                                <input type="date" id="" name="retDate" class="form-control" placeholder="26-02-2021">
                            </div>
                        </div>


                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="issue_btn" id="issue_btn" class="btn btn-primary">Issue Book</button>
                    </div>


                </div>

            </form>


        </div>

    </div>


</div>
<!-- /.container-fluid -->


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>


<script type="text/javascript" src="issue_ajax.php">

const username = document.querySelector('#fullName').value;

    document.getElementById('issue_btn').onclick = function() {
        // alert("button was clicked")
    alert(username + "Can be found");

    };
</script>



<?php
// include "issue_ajax.php";

// if (isset($_POST["issue_btn"])) {
//     echo "button cliked";


//     // $uName = $_POST["userName"];
//     // // $uContact = $_POST["contact"];
//     // $uEmail = $_POST["email"];
//     // $uRole = $_POST["uRole"];
//     // $uImage = $_POST["uImage"];

//     $uName = $userName;
//     // $uContact = $_POST["contact"];
//     $uEmail = $userEmail;
//     $uRole = $userRole;
//     $uImage = $userImage;


//     $bTitle = $bookTitle;
//     $bISBN = $bookISBN;
//     $bImage = $bookImage;

//     $issDate = $_POST["issDate"];
//     $retDate = $_POST["retDate"];

//     for ($i = 0; $i < count($uName); $i++) {

//         $name = $uName[$i];
//         echo "The name of this user is: " + $uName;
//     }

?>
<!-- <script type="text/javascript">
        alert("<?php echo $name . "is working" ?>");
        window.location = "issue_book.php";
    </script> -->
<?php



// $sql = "INSERT INTO issue_books (username,contact,email,user_role,user_image,book_title,book_isbn,book_image,issued_date,return_date) VALUES('$uName','$uContact','$uEmail','$uRole','$uImage','$bTitle','$bISBN','$bImage','$issDate','$retDate')";

// $query = mysqli_query($link, $sql);

// try {

//     if ($query) {
//         $msg = "Books Issued successfully";
?>
<!-- <script type="text/javascript">
                alert("Book Issued Successfully");
                window.location = "issued_books.php";
            </script> -->

<?php
// } else {
//     $error = "Something went wrong. Please try again";
?>
<!-- <script type="text/javascript">
                alert("Something went wrong. Please try again");
                window.location = "issued_books.php";
            </script> -->

<?php
//         }
//     } catch (Exception $e) {

//         echo 'Message: ' . $e->getMessage();
//     }
// } else {
//     echo "nothing was clikeds";
// }
?>