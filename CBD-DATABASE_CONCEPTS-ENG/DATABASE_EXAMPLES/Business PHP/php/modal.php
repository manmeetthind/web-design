<?php if( !defined('PHP_') ){ die('No direct script access'); }?>
<!-- Modal -->
<div class="modal fade" id="<?php echo $modal_id ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $modal_id ?>Lable" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="<?php echo $modal_id ?>Lable"><?php echo $modal_title ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <?php include($modal_body) ?>
      </div>
    </div>
  </div>
</div>
