<div class="mbg"></div>
<section class="cr bg_w">	
	<div class="box content">
		<div class="gallery">
			<h2><?php echo __('Клиенты') ?></h2>
			<ul class="gallery_ul">
				<?php if(empty($data)): ?>
					<p>В данном разеде еще нету информации</p> 
				<?php else: ?>
					<?php foreach ($data as $item) :?>
						<li>
							<img src="/img/client/thumbs/<?=$item['Client']['img'] ?>" />
					    </li>
			    	<?php endforeach; ?>
				<?php endif; ?>
			</ul>
		</div>	
	</div>
</section>				