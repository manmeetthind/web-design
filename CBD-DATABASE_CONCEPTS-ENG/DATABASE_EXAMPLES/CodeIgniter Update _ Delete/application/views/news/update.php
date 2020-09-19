<br>
<!-- Page Content -->
<div class="container">
  <div class="row">
    <div class="col-12">
      <h2><?php echo $title; ?></h2>


      <?php echo validation_errors(); ?>

      <?php echo form_open('news/update/'.$item['id']); ?>

        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title" value="<?php echo $item['title'] ?>">
        </div>
        <div class="form-group">
          <label for="title">Slug</label>
          <input type="text" class="form-control" id="slug" name="title" value="<?php echo $item['slug'] ?>">
        </div>
        <div class="form-group">
          <label for="text">Text</label>
          <textarea class="form-control" id="text" name="text" rows="3"><?php echo $item['text'] ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
      </form>


    </div>
  </div>
</div>
