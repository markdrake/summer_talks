<h1>Welcome to the agenda Example</h1>
<table class = "center">
	<tr>
		<th>Name</th>
		<th>Phone</th>
		<th>Address</th>
		<th colspan="2">Options</th>
	</tr>
	<?php foreach($contacts as $contact):?>
		<tr>
			<td><?php echo $contact->name;?></td>
			<td><?php echo $contact->phone;?></td>
			<td><?php echo $contact->address;?></td>
			<td><a href="<?php echo Url::site('agenda/edit') . '/' . $contact->id;?>">Edit</a></td>
			<td><a href="<?php echo Url::site('agenda/delete') . '/' . $contact->id;?>">Delete</a></td>
		</tr>
	<?php endforeach;?>

</table>

