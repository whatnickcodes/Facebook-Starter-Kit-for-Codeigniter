<?php
	if (empty($objects) && empty($error_message)) echo '<div class=message>If you are reading this warning, you need to ask for more permissions prior to the user connecting your app with Facebook.<br><br>See applicaiton/config/Stellar.php where $config[\'facebook_login_parameters\']</div>';
?>

<h1>My Objects!</h1>
<h3>This data is just outputted in the views, but you can do creative and custom things with it</h3>
<h3>Try changing the last URI parameter to see different things</h3>
<br>

<?php foreach ($objects as $object) : ?>
	<pre>
	<?php print_r($object); ?>
	</pre>
	<br>
<?php endforeach; ?>