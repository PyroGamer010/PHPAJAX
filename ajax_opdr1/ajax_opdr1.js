$(document).ready(() => {
    setInterval(() => {
      $.ajax({
        url: "ajax_opdr1.php",
        type: "POST",
        success: (response) => {
          $("#result").html(response);
        }
      });
    }, 1000);
  });
  
