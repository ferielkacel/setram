<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter&family=Montserrat:wght@100&family=Poppins:ital,wght@0,200;0,400;1,200&family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./style/password.css" />
    <script src="nepw.js"></script>
  </head>
  <body>
    <div class="hold">
      <a id="one" onclick="sign()"> < Back</a>

      <h3 id="two">enter your new password</h3>
      <div>
        <!--form-->
        <form action="#" method="post">
          <label for="password"></label>
          <input
            type="password"
            id="password"
            name="password"
            placeholder="Enter your new password"
            required
          />

          <label for="password"></label>
          <input
            type="password"
            id="password2"
            name="password2"
            placeholder="Confirme your new password"
            required
          />
          <br /><br />
          <button onclick="otp()">Save</button>
        </form>
      </div>
    </div>
  </body>
</html>
