<?php require_once("includes/db_connection.php");?>
<?php require_once("includes/functions.php");?>

<?php
	$phrases = array(
	    'Mani commented on your photo',
	    'Anushka shared your video',
	    'Shreya liked the photo you are tagged in',
	    'Kashish asked you to join his new page',
	    'Prashant started a live video'
    );
  	$comment = $phrases[array_rand($phrases)];
  	$nameArr = explode(" ", $comment);
  	$name = $nameArr[0];

	$query = "INSERT INTO notifications (comment, state, name) VALUES('{$comment}', 1, '{$name}')"; // notifications are being added to the db
	$result = mysqli_query($conn, $query);
	confirm_query($result);
?>