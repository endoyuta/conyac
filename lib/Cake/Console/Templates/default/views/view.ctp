<h2><?php echo "<?php  echo __('{$singularHumanName}'); ?>"; ?></h2>

<table class="table table-bordered">
	<?php
	foreach ($fields as $field) {
		echo '<tr>';
		echo '<th>' . h($field) . '</th>';
		$isKey = false;
		if (!empty($associations['belongsTo'])) {
			foreach ($associations['belongsTo'] as $alias => $details) {
				if ($field === $details['foreignKey']) {
					$isKey = true;
					echo "\t\t<td><?php echo __('" . Inflector::humanize(Inflector::underscore($alias)) . "'); ?></td>\n";
					break;
				}
			}
		}
		if ($isKey !== true) {
			echo "\t\t<td>\n\t\t\t<?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>\n\t\t\t&nbsp;\n\t\t</td>\n";
		}
		echo '</tr>';
	}
	?>
</table>
