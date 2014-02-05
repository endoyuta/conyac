<h2><?php printf("<?php echo __('%sの%s'); ?>", $singularHumanName , Inflector::humanize($action)); ?></h2>
<?php echo "<?php echo \$this->Form->create('{$modelClass}', array('inputDefaults'=>array('label'=>false, 'div'=>false, 'dateFormat'=>'YMD', 'timeFormat' => '24','monthNames' => false))); ?>\n"; ?>
<table class="table table-bordered">
	<?php
	echo "\t<?php\n";
	//$this->log($fields);
	foreach ($fields as $field) {
		if (strpos($action, 'add') !== false && $field == $primaryKey) {
			continue;
		} elseif (!in_array($field, array('created', 'modified', 'updated'))) {
			echo "\t\techo '<tr><th>$field</th><td>';\n";
			echo "\t\techo \$this->Form->input('{$field}');\n";
			echo "\t\techo '</td></tr>';\n";
		}
	}
	if (!empty($associations['hasAndBelongsToMany'])) {
		foreach ($associations['hasAndBelongsToMany'] as $assocName => $assocData) {
			echo "\t\techo '<tr><th>$field</th><td>';\n";
			echo "\t\techo \$this->Form->input('{$assocName}');\n";
			echo "\t\techo '</td></tr>';\n";
		}
	}
	echo "\t?>\n";
	?>
</table>

<input type="submit" value="送信" class="btn btn-warning" />
<?php echo "<?php echo \$this->Form->end(); ?>\n";?>
