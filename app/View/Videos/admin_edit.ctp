
<?php //debug($this->request->data); ?>
<div class="admin_add">
	<div class="ad_up">
		<h2>Редактирование видео</h2>
	</div>
<?php 
echo $this->Form->create('Video', array('type' => 'file'));
echo $this->Form->input('title', array('label' => 'Название:'));
echo $this->Form->input('link', array('label' => 'Ссылка с youtube:'));
// echo $this->Form->input('Video.title.kz', array('label' => 'Название kz:'));
echo $this->Form->end('Редактировать');
?>

</div>