<!DOCTYPE html>
<head>
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="LogInstyle.css">
</head>
<body>
  <div class="container" id="signIn">
      <h1 class="form-title">Jacky's Catering</h1>
      <h1 class="form-title">Log In</h1>

      <form action="signIn.php" method="post">
      <div class="field Email">
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
          </div>
      </div>

      <div class="field Password">
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
          </div>
      </div>

        <p class="recover">
          <a href="#">Recover Password</a>
        </p>
       <input type="submit" class="btn" value="Sign In" name="signIn">
      </form>
</body>