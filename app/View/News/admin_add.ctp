<div class="admin_add">
	<div class="ad_up">
		<h2>Добавление новости/акции</h2>
	</div>
<?php 

echo $this->Form->create('News', array('type' => 'file'));

echo $this->Form->input('title', array('label' => 'Название:'));

echo $this->Form->input('body', array('label' => 'Текст:', 'id' => 'editor'));
echo $this->Form->input('date', array('label' => 'Дата:'));
echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));
echo $this->Form->input('keywords', array('label' => 'Ключевые слова:'));
echo $this->Form->input('description', array('label' => 'Описание:'));
if($this->request->query('category') == 'news'){
	echo $this->Form->input('category', array('type' => 'hidden', 'value' => 'news'));
}elseif($this->request->query('category') == 'otrasl'){
	echo $this->Form->input('category', array('type' => 'hidden', 'value' => 'otrasl'));
}elseif($this->request->query('category') == 'doska'){
	echo $this->Form->input('category', array('type' => 'hidden', 'value' => 'doska'));
}
echo $this->Form->end('Создать');
?>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>
</div>