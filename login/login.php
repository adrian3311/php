<!DOCTYPE html>
<html>
<head>
<title>Login</title>
  <link rel="stylesheet" href="login_css.css">
</head>
<body>

      
        <form class="formular" action="prihlasenie.php" method="post">
          <h1>Login</h1>
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>
          <p>
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
          <p>
          <button type="submit">Login</button>
          <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>


        </form>
        <p>
        <div class="container">
         
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>

      </form>

    </body>
</html>

