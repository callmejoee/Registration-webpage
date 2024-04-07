const form = document.getElementById("#form");


const username1 = document.getElementById("uname_id");


// Tooltip
var tooltipTriggerList = [].slice.call(
  document.querySelectorAll('[data-bs-toggle="tooltip"]')
);
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl);
});



$(document).ready(function () {
    const username1 = document.getElementById("uname_id");
  
    $("#uname_id").keyup(function () {
      var username = $(this).val().trim();
      if (username != "") {
        $.ajax({
          url: "Server-side.php",
          type: "post",
          data: { username: username },
          success: function (response) {
            let elem = `<span style='color: green;'>${response}</span>`;
            if (response === "Available") {
              username1.classList.add("is-valid");
              username1.classList.remove("is-invalid");
              usernameCheck=true;
            } else {
              username1.classList.add("is-invalid");
              username1.classList.remove("is-valid");
              usernameCheck=false;
            }
          },
        });
      } else {
        $("#uname_response").html("");
        username1.classList.remove("is-invalid");
        username1.classList.add("is-valid");
        usernameCheck=true;
      }
    });
  })