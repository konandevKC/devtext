$(document).ready(function () {
    $(document).on('click', '#load_more', function (e) {
        var plus = $(e.target).attr('data-id');
        $.ajax({
            url: "plus.php",
            type: "POST",
            data: 'id=' + plus,
            success: function (response) {
                if (response != '') {
                    $('.col-lg' + plus).remove("chargement");
                    $('#grand').append(response);
                }
                else {
                    $('#load_more').html("No Data");
                }
            }
        })
    });
});