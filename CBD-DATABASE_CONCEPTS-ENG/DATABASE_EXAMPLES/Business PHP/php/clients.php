<div class="card">
    <div class="card-header">
      <a href="" class="btn btn-secondary float-right mt-2" data-toggle="modal" data-target="#newClient">
        <span class="glyphicon glyphicon-plus"></span> New Client</a>
      <h1 class="text-muted mt-2 h2">Clients</h1>
    </div>

    <?php include(PHP_.'nav.php'); ?>

    <div class="card-body">
      <table class="table table-hover">
        <thead class="thead-light">
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Contact Person</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th style="width:200px;"></th>
          </tr>
        </thead>
        <tbody>

          <?php

          include(PHP_.'database.php');
          $db = connect();

          $result = $db->query("SELECT * FROM `clients`");

          while( $row = $result->fetch_assoc() ){
            extract($row);
            include(PHP_.'client/row.php');

          }

          ?>
        </tbody>
      </table>
    </div>

    <?php if( $result->num_rows > 10 ): ?>
    <div class="card-footer">
      <nav aria-label="...">
        <ul class="pagination">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Previous</a>
          </li>
          <li class="page-item"><a class="page-link text-dark" href="#">1</a></li>
          <li class="page-item active">
            <a class="page-link bg-secondary border-secondary" href="#">2 <span class="sr-only">(current)</span></a>
          </li>
          <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link text-dark" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </div>
  <?php endif; ?>
</div>
