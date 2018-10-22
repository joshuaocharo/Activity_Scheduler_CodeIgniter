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
	<?php echo form_open('/posts/delete/'.$task['id']); ?>
	<input type="submit" value="Delete">
	</form>
	</div>
	</div>
<?php endforeach; ?>