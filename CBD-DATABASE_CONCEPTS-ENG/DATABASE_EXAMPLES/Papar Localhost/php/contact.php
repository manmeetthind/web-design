<h1><?php echo $title;?></h1>
<?php echo isset($error)?$error:''?>
<form actions="/index.php"?p="contact" methods="post">
	<input name="email" value="<?php echo isset($email)?$email:'' ?>">
	<button type="submit" name="action" value="new">save</button>
</form>
