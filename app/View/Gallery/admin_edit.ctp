<?php 
	echo $this->Form->create('Gallery', array('type' => 'file'));
	echo $this->Form->input('title', array('label' => 'Название:'));
	if($this->request->query['lang'] == 'ru'){?>
		<img src="/img/gallery/thumbs/<?=$data['Gallery']['img']?>">
		<?php
		echo $this->Form->input('img', array('label' => 'Картинка:', 'type' => 'file'));
	}
	echo $this->Form->end('Редактировать');
 ?>