<!-- port app here -->
<?php

 ?>
   <!-- <script src="javascript/listbox.js" type="text/javascript"></script> -->
   <script type="text/javascript">
   $(document).ready(function () {
       $.ajax({
           url: 'includes/data.inc.php',
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
   </script>
   <div class="contacts-container">
     <!-- search, listbox(?, internal scrolling html container type thing)  -->
     <section class="contact-left">
       <!-- when item is clicked, fill forms with data from object -->
       <div id="listbox"></div>
     </section>

     <!-- forms to display user info -->
     <section class="contact-right">

     </section>
   </div>
