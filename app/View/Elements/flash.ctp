<?php $flash = $this->Session->flash();?>
<?php if($flash):?>
	<div class="alert alert-info">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<?php echo $flash; ?>
	</div>
<?php endif;?>