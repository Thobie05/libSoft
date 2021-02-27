//Getting value from "ajax.php".
function fill(Value) {
    //Assigning value to "search" div in "search.php" file.
    $('#sUserText').val(Value);
    //Hiding "display" div in "search.php" file.
    $('#displayUser').hide();

    //Assigning value to "search" div in "search.php" file.
    $('#sBookText').val(Value);
    //Hiding "display" div in "search.php" file.
    $('#displayBook').hide();
}
$(document).ready(function () {
    //On pressing a key on "Search box" in "search.php" file. This function will be called.
    $("#sUserText").keyup(function () {
        //Assigning search box value to javascript variable named as "name".
        var name = $('#sUserText').val();
        //Validating, if "name" is empty.
        if (name == "") {
            //Assigning empty value to "display" div in "search.php" file.
            $("#displayUser").html("");
        }
        //If name is not empty.
        else {
            //AJAX is called.
            $.ajax({
                //AJAX type is "Post".
                type: "POST",
                //Data will be sent to "ajax.php".
                url: "issue_ajax.php",
                //Data, that will be sent to "ajax.php".
                data: {
                    //Assigning value of "name" into "search" variable.
                    sUserText: name
                },
                //If result found, this funtion will be called.
                success: function (html) {
                    //Assigning result to "display" div in "search.php" file.
                    $("#displayUser").html(html).show();
                }
            });
        }
    });

    $("#sBookText").keyup(function () {
        //Assigning search box value to javascript variable named as "name".
        var name = $('#sBookText').val();
        //Validating, if "name" is empty.
        if (name == "") {
            //Assigning empty value to "display" div in "search.php" file.
            $("#displayBook").html("");
        }
        //If name is not empty.
        else {
            //AJAX is called.
            $.ajax({
                //AJAX type is "Post".
                type: "POST",
                //Data will be sent to "ajax.php".
                url: "issue_ajax.php",
                //Data, that will be sent to "ajax.php".
                data: {
                    //Assigning value of "name" into "search" variable.
                    sBookText: name
                },
                //If result found, this funtion will be called.
                success: function (html) {
                    //Assigning result to "display" div in "search.php" file.
                    $("#displayBook").html(html).show();
                }
            });
        }
    });


});