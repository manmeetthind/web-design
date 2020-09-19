<br>
<!-- Page Content -->
<div class="container">
  <div class="row">
    <div class="col-12">
      <h2><?php echo $title; ?></h2>


      <?php echo validation_errors(); ?>

      <?php echo form_open('news/delete/'.$item['id'].'/0'); ?>
        <br>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="confirm" name="confirm">
          <label class="form-check-label" for="confirm">Permanetly remove this item from the database</label>
        </div>
        <br>
        <button type="submit" class="btn btn-danger">Gone Forever</button>
      </form>


    </div>
  </div>
</div>
