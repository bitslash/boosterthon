$(document).ready(function() {
    $('#fake_rating').on('click', 'i', function() {
        var star_count = $('#fake_rating > i').index(this);
        $('#fake_rating > i').each(function(index) {
            $(this).removeClass('fa-star-o');
            $(this).removeClass('fa-star');
            if (index <= star_count) {
                $(this).addClass('fa-star');
            } else {
                $(this).addClass('fa-star-o');
            }
        });
        $('#rating').val(++star_count);
    });
});
