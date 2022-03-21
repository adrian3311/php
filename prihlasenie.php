<!DOCTYPE html>
<html>
<body>

<?php 

if($_POST['uname'] == "meno" && $_POST['psw'] == "heslo"){
  echo "Prihlaseny";
}
else{
  echo "Nie si prihlaseny";
}
?>

</body>
</html>