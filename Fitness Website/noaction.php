<?php
$correct_username='admin';
$correct_passwd='123'
$name=$_POST['Enter Your Name'];
$email=$_POST['Email_id'];
$password=$_POST['passwd'];
if($email==$correct_username && $password==$correct_passwd){
echo "Logged In"
}
else{
    echo "Fuckk Off!!!!"
}

?>