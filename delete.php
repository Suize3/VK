<?php  
	$connect = mysqli_connect("127.0.0.1", "root", "", "VK");
	$text_zaprosa = "SELECT * FROM friends";
	$text_delete = "DELETE FROM friends WHERE id = '{$_GET['id']}'";
	$query = mysqli_query($connect, $text_zaprosa);
	mysqli_query($connect, $text_delete);
	header('Location: index.php');
?>
