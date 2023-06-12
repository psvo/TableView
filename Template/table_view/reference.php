<?php
$ref = $task['reference'];
if (!empty($ref)) {
	$id = explode('-', $ref, 2);
	$id = $id[count($id)-1];
	$link = sprintf(getenv('KANBOARD_TABLE_REFLINK_TEMPLATE'), $id);
	$link = htmlspecialchars($link);
	printf('<a href="%s" target="_blank" rel="noopener noreferrer">%s</a>', $link, $ref);
}
?>
