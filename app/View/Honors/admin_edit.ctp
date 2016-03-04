<?php 
	echo $this->Form->create('Honor', array('type' => 'file'));
	if($this->request->query['lang'] == 'ru'){?>
		<img src="/img/honor/thumbs/<?=$data['Honor']['img']?>">
		<?php
		echo $this->Form->input('img', array('label' => 'Картинка:', 'type' => 'file'));
	}
	echo $this->Form->end('Редактировать');
 ?>