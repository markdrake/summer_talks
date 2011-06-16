<h1><?php echo ucwords($action);?> a contact:</h1>


<?php 
echo form::open('agenda/' . $action . '/'. $id);
	echo form::hidden('id', $id);
	echo form::label('name','Name:');
	echo form::input('name', $name).'<br />';
	
	echo form::label('phone', 'Phone:');
	echo form::input('phone', $phone).'<br />';
	
	echo form::label('address', 'Address:');
	echo form::input('address', $address).'<br />';
	
	echo form::submit($action . '_contact',$action);
echo form::close();
?>