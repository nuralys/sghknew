<div class="title">
	<h1>
		<?php echo __('Прием в партию'); ?>
	</h1>
</div>

<div class="structure">
	<div class="form">
		<form action="/joins/send" method="post" accept-charset="utf-8">
			<div class="form_input">
				<label for=""><?php echo __('ФИО'); ?></label>
				<input type="text" name="data[Join][fio]">
			</div>
			<div class="form_input">
				<label for=""><?php echo __('Почта'); ?></label>
				<input type="text" name="data[Join][email]">
			</div>
			<div class="form_input">
				<label for=""><?php echo __('Телефон'); ?></label>
				<input type="text" name="data[Join][phone]">
			</div>
			<div class="form_input">
				<textarea  name="data[Join][body]" id="" cols="30" rows="10" placeholder="<?php echo __('Текст сообщения'); ?>"></textarea>
			</div>
			<!-- <div class="submit"><input type="submit" value="Вступить в партию"></div> -->
			<input class="buttons" value="<?php echo __('Вступить в партию'); ?>" type="submit">
		</form>
	</div>
</div>