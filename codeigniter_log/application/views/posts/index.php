<h2><?= $title ?></h2>
<?php foreach ($tasks as $task): ?> 
	<h5><?php echo $task['title']; ?> </h5>

	<?php echo $task['date'] ?>
	<?php echo $task['priority'] ?>
	<?php echo $task['notes'] ?>
	<p><a class="btn btn-default" href="<?php 
	 		$segments = array('posts', $task['slug']);
	 		echo site_url($segments); ?>">Edit</a></p>
<?php endforeach; ?>