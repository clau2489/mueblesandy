<?php
$password = $_POST['password'];
if ($password = 'mueblesandy2020') {
	header('Location: bannerlist.php');
}
else {
	header('Location: index.php');
}
?>