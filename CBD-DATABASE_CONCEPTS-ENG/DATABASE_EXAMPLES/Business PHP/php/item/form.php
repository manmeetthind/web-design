<?php if( !defined('PHP_') ){ die('No direct script access'); }?>
<form>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" value="Sample Product Item 1">
  </div>

  <div class="form-group">
    <label for="quantity">Quentity</label>
    <input type="number" class="form-control col-6" name="quantity" value="3">
  </div>

  <div class="form-group">
    <label for="rate">Rate</label>
    <input type="number" class="form-control col-6" name="rate" value="34">
  </div>

  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" name="description">This is a sample invoice item. This is a sample invoice item. This is a sample invoice item.</textarea>
  </div>
  <button type="submit" class="btn btn-success">Save</button>
</form>
