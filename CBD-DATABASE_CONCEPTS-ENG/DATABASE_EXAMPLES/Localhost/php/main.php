<?php if( isset($action) ): ?>
<main id="main" role="main" class="container mt-5" style="max-width": 480px;>
    <div class="card">
        <div class="card-header">
            <?php echo $pages[$index.'/'.$action]; ?>
        </div>
        <div class="card-body">
            <?php include ('php/'.$index.'.php'); ?>
        </div>
    </div>
</main>

<?php else: ?>

<main id="main" role="main" class="container mt-5">
    <?php include ('php/'.$index.'.php'); ?>
</main>
<?php endif; ?>
