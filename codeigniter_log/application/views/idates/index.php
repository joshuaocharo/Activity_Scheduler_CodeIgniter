<h2><?= $title ?></h2>
<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>idates/create">Schedule Event</a></li>
<?php foreach ($idates as $idate): ?> 
	<div class="row">
	<div class="colspan-md-3" style="margin-right: 40px;">
		<input type="checkbox" name="status">
	</div>
	<div class="colspan-md-3" style="margin-right: 40px;">
	<?php echo $idate['title']; ?> 
	</div>
	<div class="colspan-md-9" style="margin-right: 40px;">
	<?php echo $idate['date']; ?>
	</div>
	<div class="colspan-md-9">
	<?php echo $idate['description']; ?>
	</div>
	<div class="colspan-md-3" style="margin-right: 40px;">
	<?php echo form_open('/idates/delete/'.$idate['id']); ?>
	<input type="submit" value="Delete" class="btn btn-default">
	</form>
	</div>
<?php endforeach; ?>