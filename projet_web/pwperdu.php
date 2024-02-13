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
    <script src="pwperdu.js"></script>
  </head>
  <body>
    <div class="hold">
      <a id="one" onclick="paw()"> < Back</a>

      <h3 id="two">enter your Email</h3>
      <div>
        <!--form-->
        <form action="#" method="post">
          <label for="email"></label>
          <input
            type="email"
            id="email"
            name="email"
            placeholder="Enter your email"
            required
          />

          <br /><br />
          <button onclick="newpw()">Send OTP</button>
        </form>
      </div>
    </div>
  </body>
</html>
