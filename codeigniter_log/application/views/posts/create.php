<h2><?= $title ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open('posts/create'); ?>
	<div class="form-group">
		<input type="text" class="form-control" placeholder="Task" name="title"/>
	</div>
	<div class="form-group">
		<input type="date" class="form-control" placeholder="Done By" name="date" />
	</div>
	<div class="form-group">
		<select name="priority_id" class="form-control">
			<?php foreach ($priorities as $priority): ?>
			<option value="<?php echo $priority['priority_id']; ?>">
				<?php echo $priority['level']; ?>
			</option>
		<?php endforeach; ?>
		</select>
	</div>
		<button type="submit"class="btn btn-default">Save</button>
		<button type="reset" class="btn btn-default">Cancel</button>
</form>