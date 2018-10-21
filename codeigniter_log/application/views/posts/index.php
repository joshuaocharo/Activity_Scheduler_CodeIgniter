<h2><?= $title ?></h2>
<?php foreach ($tasks as $task): ?> 
	<div class="row">
	<div class="colspan-md-3" style="margin-right: 40px;">
		<input type="checkbox" name="status">
	</div>
	<div class="colspan-md-3" style="margin-right: 40px;">
	<?php echo $task['title']; ?> 
	</div>
	<div class="colspan-md-9" style="margin-right: 40px;">
	<?php echo $task['date'] ?>
	</div>
	<div class="colspan-md-9">
	<?php echo $task['priority_id'] ?>
	</div>
	<div class="colspan-md-3" style="margin-right: 40px;">
	<p><a class="btn btn-default" href="<?php 
	 		$segments = array('posts', $task['slug']);
	 		echo site_url($segments); ?>">Delete</a></p>
	</div>
	</div>
<?php endforeach; ?>