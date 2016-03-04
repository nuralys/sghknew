<?php 
	echo $this->Form->create('Client', array('type' => 'file'));
	if($this->request->query['lang'] == 'ru'){?>
		<img src="/img/client/thumbs/<?=$data['Client']['img']?>">
		<?php
		echo $this->Form->input('img', array('label' => 'Картинка:', 'type' => 'file'));
	}
	echo $this->Form->end('Редактировать');
 ?>