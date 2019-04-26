$(document).ready(function() {
    $('#fundraiser_name').typeahead({
        source: function(query, process) {
            return $.get($('#fundraiser_name').data('url'), { search: query }, function(data) {
                return process(data);
            });
        }
    });
});
