<br>
<!-- Page Content -->
<div class="container">
  <div class="row">
    <div class="col-12">
      <h2><?php echo $title; ?></h2>
      <p class="lead"></p>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th></th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($news as $row): ?>
                <tr>
                  <td><?php echo $row['title']; ?></td>
                  <td><a href="<?php echo site_url('news/'.$row['slug']); ?>" class="card-link"><?php echo $row['slug']; ?></a></td>
                  <td>

                    <a href="<?php echo site_url('news/delete/'.$row['id']) . '/0'; ?>" class="btn btn-danger">Delete</a>

                  </td>
                </tr>
          <?php endforeach; ?>

        </tbody>
      </table>
    </div>
  </div>
</div>
