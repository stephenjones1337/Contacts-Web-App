$(document).ready(function () {
    $.ajax({
        url: 'data.php',
        success: function (data) {
            var source = $.parseJSON(data);
            $("#listbox").jqxListBox({ source: source, width: '200px', height: '250px', theme: 'classic' });
            console.log(source);
        },
        error: function () {
            alert('The source is unavailable!');
        }
    });
});
