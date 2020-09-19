<?php define('PHP_','php/');

$title = "Music Library";
include(PHP_."functions.php");
include(PHP_."header.php");

?>

  <div class="container">
      <div class="row">

      <div class="col-lg-12">
        <h1 class="mt-5"><?php echo $title ?></h1>
        <p class="lead">Displays our collections of songs</P>
      </div>

      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Duration</th>
            <th scope="col">Album</th>
            <th scope="col">Artist</th>
            <th scope="col">Year</th>
          </tr>
        </thead>
        <tbody>

          <?php
            require_once("php/database.php");

            $db = connect();

            $result = $db->query("SELECT * FROM `songslist`");

            while( $row = $result->fetch_assoc() ){
              extract($row);
              include("php/row.php");
            }
          ?>

        </tbody>
      </table>


    </div>
  </div>

<?php
include("php/footer.php");
