<?php if( !defined('PHP_') ){ die('No direct script access'); }?>

<form action="edit.html">
  <div class="modal-header">
    <h5 class="modal-title" id="newInvoiceLabel">New Invoice</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

  <div class="modal-body">

  <div class="form-group">
    <label for="name">Client</label>
    <select class="form-control" name="client">
      <option value="1">Western Gas</option>
    </select>
  </div>

  <div class="form-group">
    <label for="contact">Invoice Number</label>
    <input type="text" class="form-control col-6" disabled value="2018001">
  </div>

  <div class="form-group">
    <label for="date_created">Invoice Date</label>
    <input type="date" class="form-control" name="date_created">
  </div>

  <div class="form-group">
    <label for="date_due">Due Date</label>
    <input type="date" class="form-control" name="date_due">
  </div>

  <div class="form-group">
    <label for="terms">Terms</label>
    <textarea class="form-control" name="terms"></textarea>
  </div>

  <button type="submit" class="btn btn-success">Save</button>
</form>
