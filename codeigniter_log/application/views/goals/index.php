<h2><?= $title ?></h2>
<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>goals/create">Set Goals</a></li>
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
	<?php echo form_open('/goals/delete/'.$goal['goal_id']); ?>
	<input type="submit" value="Delete" class="btn btn-default">
	</form>
	</div>
<?php endforeach; ?>