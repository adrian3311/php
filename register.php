<!DOCTYPE html>
<html>
<head>

<style>
body{
    text-align: center; 
    background-color:grey;

}
.container{
    margin: auto;
    display: inline-block;
    text-align: left;    
    border: solid 1px;
    background-color:khaki;
}
h1{
    text-align: center;   
}
.klasap{
    text-align: center;  

}
</style>

<title>Register</title>
</head>
<body>
    
<p> <a href="index.php"> Hlavne menu </a></p>
<form action="registracia.php" method="post">
  
  <div class="container">
    <h1>Registracia</h1>
    <hr>
    <p><label for="username"><b>Meno</b></label>
    <br><input type="text" placeholder="Zadajte Meno" name="username" id="username" required>
    <p><label for="surname"><b style="padding-left: 45px;">Priezvisko</b></label>
    <br><input type="text" placeholder="Zadajte Priezvisko" name="surname" id="surname" required>
    <p><label for="email"><b>Email</b></label>
    <br><input type="text" placeholder="Zadajte Email" name="email" id="email" required>
    <p><label for="psw"><b>Heslo</b></label>
    <br><input type="password" placeholder="Zadajte Heslo" name="psw" id="psw" required>
    <p><label for="psw-repeat"><b style="padding-left: 60px;">Heslo znova</b></label>
    <br><input type="password" placeholder="Znovu zadajte heslo" name="psw-repeat" id="psw-repeat" required>
    
    <p><button type="submit" class="registerbtn">Registrovat sa</button>
    <hr>
    <p>
      <p style="font-weight: bolder;">Uz mate ucet? <p><a href="login.php">Prihlaste sa</a></p>
  </div>
</form>
</body>
</html>