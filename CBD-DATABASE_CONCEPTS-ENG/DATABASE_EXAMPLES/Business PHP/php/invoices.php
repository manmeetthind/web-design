<div class="card">
    <div class="card-header">
      <a href="" class="btn btn-secondary float-right mt-2" data-toggle="modal" data-target="#newInvoice">
        <span class="glyphicon glyphicon-plus"></span> New Invoice</a>
      <h1 class="text-muted mt-2 h2">Invoices</h1>
    </div>

  <?php include(PHP_.'nav.php'); ?>

    <div class="card-body">
      <table class="table table-hover">
        <thead class="thead-light">
          <tr>
            <th scope="col">Invoice Number</th>
            <th scope="col">Client</th>
            <th scope="col">Issue Date</th>
            <th scope="col">Due Date</th>
            <th scope="col">Total</th>
            <th scope="col">Balance</th>
            <th style="width:200px;"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">201801</th>
            <td>Western Gas</td>
            <td>Jul 19, 2018</td>
            <td>Jul 30, 2018</td>
            <td>$714</td>
            <td>$640</td>
            <td class="buttons">
              <a href="edit.html" class="btn btn-sm">Edit<a/>
              <a href="" class="btn btn-sm text-danger">Delete</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

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
</div>
