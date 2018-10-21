<li class="nav-item"><a class="mainNav" href="<?php echo base_url();?>homel">Home</a></li>
<h2><?= $title ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open('posts/create'); ?>

	<div class="form-group">
		<input type="text" class="form-control" placeholder="Goal" name="title"/>
	</div>
	<div class="form-group">
		<input type="date" class="form-control" placeholder="Achieved By" name="date" />
	</div>
		<textarea placeholder="Description" class="form-control" name="notes"></textarea><br>
		<button type="submit"class="btn btn-default">Save</button>
		<button type="reset" class="btn btn-default">Cancel</button>
</form>