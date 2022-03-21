<!DOCTYPE html>
<html>
<head>

<style>
body{
    text-align: center; 
    background-color:grey;

}

.formular{
    margin: auto;
    display: inline-block;
    text-align: center;    
    border: solid 1px;
    background-color:peru;
}
.container{
   
margin-top:0.5%;
display: inline-block;
text-align: center;    
}
</style>

<title>Login</title>

</head>
<body>

          <p> <a href="index.php"> Hlavne menu </a></p>
      
        <form class="formular" action="prihlasenie.php" method="post">
          <h1>Login</h1>
          <label for="uname"><b>Meno</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>
          <p>
          <label for="psw"><b>Heslo</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
          <p>
          <button type="submit">Login</button>
          <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>


        </form>

        <p>

        <p style="font-weight: bolder;">Nemas ucet? <p><a href="register.php"> Register </a></p>


      </form>

    </body>
</html>

