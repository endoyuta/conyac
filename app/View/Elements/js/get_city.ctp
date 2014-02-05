<?php $this->append('script')?>
	<script>
		function get_city(t){
			$.ajax({
				type: "post",
				url: "<?php echo $this->Html->url(array('controller' => 'shops', 'action' => 'get_cities'))?>",
				data: {pref_id : t.val()},
				dataType: "html",
				success: function(data){
					$('#city_select').html(data);
				}
			});
		}
	</script>
<?php $this->end()?>