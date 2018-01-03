//back button
<?php
   $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
?>
<a href="<?php echo $url; ?>">Back</a>
//JS
<input type="button" value="Back" onclick="history.back(-1)" />

****************************************************************************************
