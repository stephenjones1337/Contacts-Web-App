$(document).ready(function () {
    $.ajax({
        url: 'includes/data.inc.php',
        dataType: 'json',
        success: function (data) {
          var format = JSON.stringify(data);
            var source = $.parseJSON(format);
            $("#listbox").jqxListBox(
              { source: source, width: '200px',
              height: '250px', theme: 'classic' });
        },
        error: function () {
            alert('The source is unavailable!');
        }
    });
});
