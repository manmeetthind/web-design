<tr>
  <th><?php echo $name; ?></th>
  <td><?php echo $contact; ?></td>
  <td><?php echo $phone; ?></td>
  <td><?php echo $email; ?></td>
  <td class="buttons">
    <a href="" class="btn btn-sm" data-target="#editClient<?php echo $id ?>" data-toggle="modal">Edit<a/>
      <?php modal('editClient'.$id,'client/form','Edit Client', $row) ?>
    <a href="" class="btn btn-sm text-danger">Delete</a>
  </td>
</tr>
