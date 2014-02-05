</div>

<div class="row footer">
	<div class="container">
		<div class="col-md-4">
			<ul class="list-unstyled">
				<li><?php echo $this->Html->link('トップページ','/')?></li>

			</ul>
		</div>
		<div class="col-md-4">
			<ul class="list-unstyled">

			</ul>
		</div>
		<div class="col-md-4">
			<ul class="list-unstyled">
				<li>
					<div>
						<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://logicky.com" data-text="Logicky" data-lang="ja">ツイート</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
					</div>
				</li>
				<li>
					<div>
						<div class="fb-like" data-href="http://logicky.com" data-send="false" data-layout="button_count" data-width="200" data-show-faces="true" data-font="arial"></div>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="container" style="margin:20px 0; text-align:center;">
		<p>
			Copyright (C) <?php echo date('Y')?> <?php echo h($setting['Setting']['site_name'])?> All Rights Reserved.
		</p>
	</div>
</div>



<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<?php echo $this->Html->script('/bootstrap/js/bootstrap')?>

</body>
</html>