<?php echo isset($error) ? $error : '' ?>
<form action="index.php?p=contact/form" method="post">
    <input name="textbox" value="<?php echo isset($textbox) ? $textbox : '' ?>">
    <input type="hidden" name="action" value="new">
    <button type="submit">Send</button>
</form>