<h1>My likes!</h1>
<h3>This data is just outputted in the views, but you can do creative and custom things with it</h3>
<br>

<?php foreach ($likes as $like) : ?>
	<ul>
		<li>Name: <?php echo $like->name; ?></li>
		<li>Category: <?php echo $like->category; ?></li>
		<li>ID: <?php echo $like->id; ?></li>
		<li>Created Time: <?php echo $like->created_time; ?></li>
	</ul>
	<br>
<?php endforeach; ?>