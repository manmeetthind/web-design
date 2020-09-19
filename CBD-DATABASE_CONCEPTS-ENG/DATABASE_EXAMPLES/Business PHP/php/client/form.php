<form action="client.html">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" placeholder="" value="<?php echo isset($name) ? $name : '' ?>">
  </div>

  <div class="form-group">
    <label for="contact">Contact</label>
    <input type="text" class="form-control" name="contact" placeholder="" value="<?php echo isset($contact) ? $contact : '' ?>">
  </div>

  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" class="form-control" name="phone" placeholder="" value="<?php echo isset($phone) ? $phone : '' ?>">
  </div>

  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" name="email" placeholder="" value="<?php echo isset($email) ? $email : '' ?>">
  </div>

  <button type="submit" class="btn btn-success">Save</button>
</form>
