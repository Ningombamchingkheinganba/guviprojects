$(document).ready(function () {
  $("#submit").click(function (e) {
    e.preventDefault();
    var name = $("#name").val();
    var email = $("#email").val();
    var password = $("#password").val();
    var cPassword = $("#cPassword").val();

    $.ajax({
      type: "POST",
      url: "processReg.php",
      data: {
        name: name,
        email: email,
        password: password,
        cPassword: cPassword,
      },

      success: function (res) {
        if (res === "empty") {
          $("#msg").removeClass("text-success");
          $("#msg").addClass("text-danger");
          $("#msg").html("FIELDS ARE EMPTY");
        } else if (res === "empty_name") {
          $("#msg").removeClass("text-success");
          $("#msg").addClass("text-danger");
          $("#msg").html("NAME IS EMPTY");
        } else if (res === "empty_email") {
          $("#msg").removeClass("text-success");
          $("#msg").addClass("text-danger");
          $("#msg").html("EMAIL IS EMPTY");
        } else if (res === "empty_password") {
          $("#msg").removeClass("text-success");
          $("#msg").addClass("text-danger");
          $("#msg").html("PASSWORD IS EMPTY");
        } else if (res === "no-match") {
          $("#msg").removeClass("text-success");
          $("#msg").addClass("text-danger");
          $("#msg").html("password not matched");
        } else if (res === "unavail") {
          $("#msg").removeClass("text-success");
          $("#msg").addClass("text-danger");
          $("#msg").html("email already used");
        } else if (res === "ok") {
          $("#msg").removeClass("text-danger");
          $("#msg").addClass("text-success");
          $("#msg").html("SUCCESSFULLY SUBMITTED");
          location.href = "index.php";
        } else {
          $("#msg").removeClass("text-success");
          $("#msg").addClass("text-danger");
          $("#msg").html("Something went wrong");
        }
      },
    });
  });
});
