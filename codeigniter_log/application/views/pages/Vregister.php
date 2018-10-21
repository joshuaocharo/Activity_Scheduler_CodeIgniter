<?=form_open(base_url()."register")?>
<table cellspacing="3" cellpadding="3">
<tr>
	<td>
	Email<td><?=form_input(array("name"=>"email","value"=>set_value("email")))?>
	<td><?form_error("email")?>	
	</td>
</tr>
<tr>
	<td>
	Password<td><?=form_password(array("name"=>"password"))?>
	<td><?form_error("username")?>	
	</td>
</tr>
<tr>
	<td>
	Name <td><?=form_input(array("name"=>"username","value"=>set_value("username")))?>
	<td><?form_error("username")?>	
	</td>
</tr>
<tr>
	<td>
		<?= form_submit(array("name"=>"submit","value"=>"Register"))?>
	</td>
</tr>
</table>


<?=form_close()?>