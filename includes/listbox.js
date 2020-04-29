$(document).ready(function () {
    $.ajax({
        url: 'includes/data.inc.php',
        dataType: 'json',
        success: function (data) {
          console.log(data);
            var source = $.parseJSON(data);
            console.log(source);
            $("#listbox").jqxListBox(
              { source: source, width: '200px',
              height: '250px', theme: 'classic' });
        },
        error: function () {
            alert('The source is unavailable!');
        }
    });
});
