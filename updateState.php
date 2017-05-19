<?php require_once("includes/db_connection.php");?>
<?php require_once("includes/functions.php");?>

<?php
	$query = "UPDATE notifications SET state = 0";
	$result = mysqli_query($conn, $query);
	confirm_query($result);
?>