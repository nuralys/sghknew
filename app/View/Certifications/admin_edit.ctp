<?php 
	echo $this->Form->create('Certification', array('type' => 'file'));
	if($this->request->query['lang'] == 'ru'){?>
		<img src="/img/certification/thumbs/<?=$data['Certification']['img']?>">
		<?php
		echo $this->Form->input('img', array('label' => 'Картинка:', 'type' => 'file'));
	}
	echo $this->Form->end('Редактировать');
 ?>