$(document).ready(function () {
    $('form').bind('submit', function (event) {
        event.preventDefault();
        $.ajax({
            type: 'GET',
            url: 'search.php',
            data: $('form').serialize(),
            success: function (data) {
                $('#resultContainer').html(data);
            },
            error: function () {
                $('#resultContainer').html('Error in fetching data');
            }
        });
        return false;
    });
});
