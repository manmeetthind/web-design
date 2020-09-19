<?php define('PHP_','php/');

$title = "Music Library";
include(PHP_."functions.php");
include(PHP_."header.php");

//debug();

require_once("php/database.php");
$db = connect();

require_once("php/lib/DataTable.php");
$table = new DataTable('songslist');

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

              <?php

              $table = 'songgenreslist';

              $field = $db->query("DESCRIBE `$table`");

              while( $field = $fields->fetch_array() ){
                echo '<th scop="col">'.$field[0].'</th>';
              }

              ?>

            </tr>
        </thead>
        <tbody>

              <?php
              $result = $db->query("SELECT * FROM `$table`");

              while ( $row = $result->fetch_assoc() ){
                echo '<tr>';
                foreach($row as $col){
                  echo '<td>'.$col.'</td>';
                }
                echo '</tr>';
              }

              ?>
        </tbody>
      </table>


    </div>
  </div>

<?php
include("php/footer.php");
