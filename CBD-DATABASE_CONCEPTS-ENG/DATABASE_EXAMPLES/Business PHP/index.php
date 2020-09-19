<?php define('PHP_','php/');

include(PHP_.'functions.php');

$pages = array(
  'clients' => "Clients",
  'invoices' => "Invoices",
  'login' => "Database Login",
);

if ( isset($_GET['p']) && $pages[$_GET['p']] ){
  $index = $_GET['p'];
}else {
  $index = 'login';
}

$title = $pages[$index];

include(PHP_.'header.php');
?>
<!-- header.php -->


    <div class="container mt-5">

      <?php include(PHP_.$index.'.php'); ?>

    </div>

  <?php modal('newClient','client/form','New Client') ?>
  <?php modal('newInvoice','invoice/form','New Invoice') ?>


<!-- footer.php -->
<?php include(PHP_.'footer.php');
