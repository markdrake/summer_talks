<h1><?php echo ucwords($action);?> a contact:</h1>
<?php 
echo form_open('agenda/' . $action . '/'. $id);
	echo form_hidden('id', $id);
	echo form_label('Name:');
	echo form_input('name', $name).'<br />';
	
	echo form_label('Phone:');
	echo form_input('phone', $phone).'<br />';
	
	echo form_label('Address:');
	echo form_input('address', $address).'<br />';
	
	echo form_submit($action . '_contact', $action);
echo form_close();
?>