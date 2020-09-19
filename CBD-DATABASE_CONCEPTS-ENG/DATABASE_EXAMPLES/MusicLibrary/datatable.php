<?php define('PHP_','php/');

$title = "Music Library";
include(PHP_."functions.php");
include(PHP_."header.php");

//debug();

require_once("php/database.php");
$db = connect();

require_once("php/lib/DataTable.php");
$table = new DataTable('songslist');
$table->db($db);
?>

  <div class="container">
      <div class="row">

      <div class="col-lg-12">
        <h1 class="mt-5"><?php echo $title ?></h1>
        <p class="lead">Displays our collections of songs</P>
      </div>

      <?php echo $table; ?>

      <script>
      var table = <?php echo $table->json() ?>;
      console.table(table.data);
      </script>
    </div>
  </div>

<?php
include("php/footer.php");
