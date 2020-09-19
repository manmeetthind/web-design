<br>
<!-- Page Content -->
<div class="container">
  <div class="row">
    <div class="col-12">
      <h2><?php echo $title; ?></h2>
      <p class="lead"></p>


      <?php foreach ($news as $row): ?>

              <div class="card">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $row['title']; ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                  <p class="card-text"><?php echo $row['text']; ?></p>
                  <a href="<?php echo site_url('news/'.$row['slug']); ?>" class="card-link">View</a>
                  <a href="<?php echo site_url('news/update/'.$row['id']); ?>" class="card-link">Edit</a>
                  <a href="<?php echo site_url('news/delete/'.$row['id']); ?>" class="card-link text-danger">Delete</a>
                </div>
              </div>

      <?php endforeach; ?>


    </div>
  </div>
</div>
