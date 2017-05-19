<?php
function redirect_to($new_location) {
	header("Location: " . $new_location);
	exit; 
}
function confirm_query($result_set) {
	if (!$result_set) {
		die("Database query failed.");
	}
}
?>