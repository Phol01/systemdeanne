<?php 
   session_start();
   include('includes/db.php');
   ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $(".edit-button").on("click", function() {
      var $row = $(this).closest("tr");
      var $columns = $row.find("td");
      
      $columns.each(function() {
        var $td = $(this);
        var $input = $("<input type='text'>");
        $input.val($td.text());
        $td.html($input);
      });
      
      // Add Save and Cancel buttons
      var $saveButton = $("<button class='btn btn-success btn-sm save-button'>Save</button>");
      var $cancelButton = $("<button class='btn btn-warning btn-sm cancel-button'>Cancel</button>");
      
      $row.find("td:last").html($saveButton).append($cancelButton);
      
      // Handle Save and Cancel actions
      $saveButton.on("click", function() {
        // Save logic here
        // Update the row with new values
      });
      
      $cancelButton.on("click", function() {
        // Cancel edit mode, revert to original values
        // Remove input fields and buttons
      });
    });
  });
</script>
