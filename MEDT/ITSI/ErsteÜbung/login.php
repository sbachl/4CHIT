<?php

include_once 'base.php';

$user = $_POST['user'];
$pass = $_POST['pass'];

$salt = '_923h2krtfh293f&#@n!asd564DFs';
$hashed = md5($pass.$salt);

class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('database.sqlite', $flags = SQLITE3_OPEN_READONLY);
    }
}

$db = new MyDB();

$sql = "select * from users where username = '".$user."' and password = '".$hashed."'";
$result = $db->query($sql);
$res = $result->fetchArray();


if ($res == false) {
	$msg = 'Login fehlgeschlagen';
	setcookie('user','',1);

} else {
	$cookie = base64_encode($res['username'].'|id:'.$res['id'].'|isUser:1|isAdmin:0');
	setcookie('user',$cookie);
}


header('Location: https://exercises.itsi.rocks/gk2/index.php')

?>




?>
