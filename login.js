$(document).ready(function () {
  $("#submit").click(function (e) {
    e.preventDefault();
    var email = $("#email").val();
    var password = $("#password").val();
    $.ajax({
      type: "POST",
      url: "processLogin.php",
      data: { email: email, password: password },

      success: function (res) {
        if (res === "empty") {
          $("#msg").removeClass("text-success");
          $("#msg").addClass("text-danger");
          $("#msg").html("FIELDS ARE EMPTY");
        } else if (res === "empty_email") {
          $("#msg").removeClass("text-success");
          $("#msg").addClass("text-danger");
          $("#msg").html("EMAIL IS EMPTY");
        } else if (res === "empty_password") {
          $("#msg").removeClass("text-success");
          $("#msg").addClass("text-danger");
          $("#msg").html("PASSWORD IS EMPTY");
        } else if (res === "wrong") {
          $("#msg").removeClass("text-success");
          $("#msg").addClass("text-danger");
          $("#msg").html("Wrong email and/or password");
        } else if (res === "ok") {
          $("#msg").removeClass("text-danger");
          $("#msg").addClass("text-success");
          $("#msg").html("SUCCESSFULLY SUBMITTED");
          location.href = "profile.php";
        } else {
          $("#msg").removeClass("text-success");
          $("#msg").addClass("text-danger");
          $("#msg").html("Something went wrong");
        }
      },
    });
  });
});
