<h1>My friends!</h1>
<h3>This data is just outputted in a view, but you can do creative and custom things with it</h3>
<br>

<?php foreach ($friends as $friend) : ?>
	<ul>
		<li>Name: <?php echo $friend->name; ?></li>
		<li>ID: <?php echo $friend->id; ?></li>
	</ul>
	<br>
<?php endforeach; ?>
