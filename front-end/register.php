<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
</head>
<body>
    <div>
        <form id="formCreateUser">
          <input type="text" name="username" />
          <input type="password" name="password" />
          <button onclick="createUser()">Buat User</button>
        </form>
        <a href="index.php">Back to login</a>
</body>
<script>
    function createUser() {
      event.preventDefault();
      var form = document.getElementById("formCreateUser").elements;
      var fUsername = form.username.value;
      var fPassword = form.password.value;

      var dataForm = JSON.stringify({
        username: fUsername,
        password: fPassword,
      });

      $.ajax({
        url: "/mkmtest/back-end/api/create.php",
        type: "POST",
        contentType: "application/json",
        data: dataForm,
        success: function (response) {
          alert(response)
          window.location.href = "/mkmtest/front-end/index.php";
        },
      });
    }
</script>
</html>