<h2><?= $title ?></h2>
<?php foreach ($goals as $goal): ?> 
	<div class="row">
	<div class="colspan-md-3" style="margin-right: 40px;">
		<input type="checkbox" name="status">
	</div>
	<div class="colspan-md-3" style="margin-right: 40px;">
	<?php echo $goal['title']; ?> 
	</div>
	<div class="colspan-md-9" style="margin-right: 40px;">
	<?php echo $goal['date']; ?>
	</div>
	<div class="colspan-md-9">
	<?php echo $goal['description']; ?>
	</div>
	<div class="colspan-md-3" style="margin-right: 40px;">
	<p><a class="btn btn-default" href="<?php 
	 		$segments = array('goals', $goal['slug']);
	 		echo site_url($segments); ?>">Delete</a></p>
	</div>
	</div>
<?php endforeach; ?>