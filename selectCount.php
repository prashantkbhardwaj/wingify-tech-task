<?php require_once("includes/db_connection.php");?>
<?php require_once("includes/functions.php");?>

<?php
	$query = "SELECT COUNT(id) FROM notifications WHERE state = 1";
	$result = mysqli_query($conn, $query);
	confirm_query($result);
	$row = mysqli_fetch_array($result);
    $total_unread_comments = $row[0];    
    echo $total_unread_comments; 
?>