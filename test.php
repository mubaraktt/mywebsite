
<?php
#$output = shell_exec('git fetch origin');
$output = shell_exec('git merge origin/master');
echo "<pre>$output</pre>";
?>

