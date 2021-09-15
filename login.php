<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Creepster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Sign in - Page</title>
</head>


<body>
    <h1>Sign in</h1>
    <div class="center">
      <form action="do_login.php" method="post" autocomplete="off">
          <div class="txt-field">
            <input type="text" name="user" id="user" required>
            <label for="user">Username</label>
        </div>
        <div class="txt-field">
            <input type="password" name="password" id="password" required>
            <label for="password">Password</label>
        </div>
        <button type="submit">Sign in</button>
        <a class="forget" href="forget_password.php">Can't remember right?</a>
        <div class="signup-link">Not a member? <a href="signup.php">Sign up</a>
        </div>
    </form>
</div>
</body>
</html>