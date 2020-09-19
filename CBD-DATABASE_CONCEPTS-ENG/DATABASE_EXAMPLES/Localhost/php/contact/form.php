<?php if( isset($error) ) : ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <?php echo $error ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?>
<form action="index.php?p=contact/form" method="post" class="<?php echo isset($error) ? ' was-validated': ''?>">
  <div class="form-group">
    <label for="textbox">Textbox</label>
    <input type="text" class="form-control" name="textbox" placeholder="" value="<?php echo isset($textbox) ? $textbox : '' ?>"<?php echo isset($error) ? ' required': ''?>>
  </div>
  <input type="hidden" name="action" value="new">
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
