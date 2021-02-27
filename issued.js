
// EndTerm Result (Start)
function getUser(val) {
    $.ajax({
        type: "POST",
        url: "issue_ajax.php",
        data: 'sUserText=' + val,
        success: function (data) {
            $("#displayUser").html(data);

        }
    });

}


// EndTerm Result (Start)
function getBook(val) {
    $.ajax({
        type: "POST",
        url: "issue_ajax.php",
        data: 'sBookText=' + val,
        success: function (data) {
            $("#displayBook").html(data);

        }
    });

}