<h2><?php echo "<?php echo __('{$pluralHumanName}" . "一覧'); ?>"; ?></h2>

<table class="table table-bordered">
	<tr>
		<?php foreach ($fields as $field): ?>
			<th><?php echo "<?php echo \$this->Paginator->sort('{$field}'); ?>"; ?></th>
		<?php endforeach; ?>
		<th class="actions"><?php echo "<?php echo __(''); ?>"; ?></th>
	</tr>

	<?php
	echo "<?php foreach (\${$pluralVar} as \${$singularVar}): ?>\n";
	echo "\t<tr>\n";
	foreach ($fields as $field) {
		$isKey = false;
		if (!empty($associations['belongsTo'])) {
			foreach ($associations['belongsTo'] as $alias => $details) {
				if ($field === $details['foreignKey']) {
					$isKey = true;
					echo "\t\t<td>\n\t\t\t<?php echo h(\${$singularVar}['{$alias}']['{$details['displayField']}']); ?>\n\t\t</td>\n";
					break;
				}
			}
		}
		if ($isKey !== true) {
			echo "\t\t<td><?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>&nbsp;</td>\n";
		}
	}

	echo "\t\t<td class=\"actions\">\n";
	echo "\t\t\t<?php echo \$this->Html->link(__('表示'), array('action' => 'view', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?>\n";
	echo "\t\t\t<?php echo \$this->Html->link(__('編集'), array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?>\n";
	echo "\t\t\t<?php echo \$this->Form->postLink(__('削除'), array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']), null, __('Are you sure you want to delete # %s?', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?>\n";
	echo "\t\t</td>\n";
	echo "\t</tr>\n";

	echo "<?php endforeach; ?>\n";
	?>
</table>

<div class="pagination">
	<ul>
	<?php
	echo "<?php\n";
	echo "\t\techo '<li>' . \$this->Paginator->prev('前 ', array(), null, array('class' => 'prev disabled')) . '</li>';\n";
	echo "\t\techo '<li>' . \$this->Paginator->numbers(array('separator' => '</li><li>')) . '</li>';\n";
	echo "\t\techo '<li>' . \$this->Paginator->next(' 次', array(), null, array('class' => 'next disabled')) . '</li>';\n";
	echo "\t?>\n";
	?>
	</ul>
</div>