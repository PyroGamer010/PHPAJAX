$(document).ready(function() {
    $("#new-fact").click(function() {
      $.ajax({
        url: "https://api.chucknorris.io/jokes/random",
        type: "GET",
        success: function(response) {
          $("#fact").html(response.value);
        }
      });
    });
  });
  