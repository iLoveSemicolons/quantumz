
<?php
include (__DIR__."/includes/config.php");
ob_start();
?>

<div>Hi portfolio</div>

<?php
$content = ob_get_contents();
ob_end_clean();
require(__DIR__."/includes/template.php");

