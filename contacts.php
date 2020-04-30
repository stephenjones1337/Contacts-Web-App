<!-- port app here -->
<?php

 ?>
   <script src="includes/listbox.js" type="text/javascript"></script>

   <div class="contacts-container">
     <!-- search, listbox(?, internal scrolling html container type thing)  -->
     <section class="contact-left">
       <!-- when item is clicked, fill forms with data from object -->
       <div id="listbox"></div>
     </section>

     <!-- forms to display user info -->
     <section class="contact-right">
       <div class="avatar">
         <img src="" alt="">
       </div>
       <!-- for multiple entries (phone and email), we can choose to generate this
            portion dynamically, or use drop-down boxes and fill those dynamically.
            Both options are shown -->
       <form class="contact_info" action="" method="post">
         <input type="text" name="contact_last">
         <input type="text" name="contact_first">
         <label for="contact_emails">Email:</label>
         <select id="contact_emails">
           <!-- fill options with php -->
           <!-- HTML EX: <option value="gmail_1">email@gmail.com</option> -->
         </select>
         <?php
            $count = 0;
            foreach ($number as $num => $numbers_as_array) {
              $contact_phone_label = "contact_phone_{$count}";
              echo "<input type='text' name='{$contact_phone_label}'>";
              $count = $count + 1;
            }
          ?>
         <input type="text" name="contact_address">
         <input type="text" name="contact_notes">

         <button type="submit" name="update_contact">Update</button>
       </form>
     </section>
   </div>
