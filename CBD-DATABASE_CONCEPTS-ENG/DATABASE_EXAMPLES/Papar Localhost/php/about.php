<h1><?php echo $title;?></h1>
<?php
	  $data['about']="This is cool!";
    $data['title']="It is contact";
    index($data,'contact');
?>

<script> var data=<?php echo json_encode ($data); ?></script>
