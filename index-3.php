<style>
  body {background-color:black;
    }
</style>
<title> Сайтын IP </title>
<html>
<center>
<br><br>
<div style="color:white;font:normal normal normal 15pt/normal 'Courier New';"><font color="#FF0000"><h1> Сайтын IP </h1>
<form action="" method="post">
<input type="text" name="domain">
<br><br>
<input type="submit" name="submit" value="Сайтын IP">
<br>
</form>
</html>
<?php
if (isset($_POST['submit'])){
  $domain = $_POST['domain'];
  $parsed_url = parse_url($domain,PHP_URL_HOST);
  $ip = gethostbyname($parsed_url);
  
  echo "<br>Сайтын IP => $ip";
  
  
  }

?>
