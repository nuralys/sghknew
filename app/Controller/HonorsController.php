<?php

class HonorsController extends AppController{

	public function beforeFilter(){
		parent::beforeFilter();
	}

	public function index(){
		// $this->Honor->locale = false;
		$this->Honor->locale = Configure::read('Config.language');
		$data = $this->Honor->find('all', array(
			'order' => array('order' => 'ASC')
		));
		$title_for_layout = 'Руководство';
		$this->set(compact('data', 'title_for_layout'));
	}

	public function admin_index(){
		$this->Honor->locale = 'ru';
		
		$data = $this->Honor->find('all');
		// debug($data);
		$this->set(compact('data'));
	}

	public function admin_add(){
		if($this->request->is('post')){
			$this->Honor->create();
			$data = $this->request->data['Honor'];
			if(!$data['img']['name']){
				unset($data['img']);
			}
			if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
				$this->Honor->locale = 'kz';
			}else{
				$this->Honor->locale = 'ru';
			}
			if($this->Honor->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// debug($data);
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
	}

	public function admin_edit($id){
		
		if(is_null($id) || !(int)$id || !$this->Honor->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->Honor->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Honor->id = $id;
			// $this->Honor->locale = Configure::read('Config.languages');
			// debug($this->Honor->locale);
			// debug($this->request->data);
			$data1 = $this->request->data['Honor'];
			if(!$data1['img']['name']){
				unset($data1['img']);
			}

			if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
				$this->Honor->locale = 'kz';
			}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
				$this->Honor->locale = 'en';
			}else{
				$this->Honor->locale = 'ru';
			}
			// $this->Honor->locale = 'kz';
			// debug($data1);
			$data1['id'] = $id;
			if($this->Honor->save($data1)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		//Заполняем данные в форме
		if($this->request->is('post')){
			$this->request->data = $data1;
			$data = $data1;
		}else{
			$this->Honor->locale = $this->request->query['lang'];
			$data = $this->request->data = $this->Honor->read(null, $id);
		}
			$this->set(compact('id', 'data'));


	}

	public function admin_delete($id){
		if (!$this->Honor->exists($id)) {
			throw new NotFounddException('Такой статьи нет');
		}
		if($this->Honor->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

}