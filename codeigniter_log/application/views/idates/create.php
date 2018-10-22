<h2><?= $title ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open('idates/create'); ?>
	<div class="form-group">
		<input type="text" class="form-control" placeholder="Important Event" name="title"/>
	</div>
	<div class="form-group">
		<input type="date" class="form-control" placeholder="When" name="date" />
	</div>
		<textarea placeholder="Description" class="form-control" name="description"></textarea><br>
		<button type="submit"class="btn btn-default">Save</button>
		<button type="reset" class="btn btn-default">Cancel</button>
</form> 