<?php
$display_message = true;
?>

<?php if ($display_message) { ?>

<p>このメッセージは $display_message がtrueのときのみに表示されるメッセージです。</p>

<?php } else { ?>

<p>このメッセージは $display_message がfalseのときのみ表示されるメッセージです。</p>

<?php } ?>