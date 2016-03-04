<?php

class ClientsController extends AppController{

	public function beforeFilter(){
		parent::beforeFilter();
	}

	public function index(){
		// $this->Client->locale = false;
		$this->Client->locale = Configure::read('Config.language');
		$data = $this->Client->find('all', array(
			'order' => array('id' => 'ASC')
		));
		$title_for_layout = __('Клиенты');
		$this->set(compact('data', 'title_for_layout'));
	}

	public function admin_index(){
		$this->Client->locale = 'ru';
		
		$data = $this->Client->find('all');
		// debug($data);
		$this->set(compact('data'));
	}

	public function admin_add(){
		if($this->request->is('post')){
			$this->Client->create();
			$data = $this->request->data['Client'];

			 if(!$data['img']['name']){
			 	unset($data['img']);
			}
			if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
				$this->Client->locale = 'kz';
			}else{
				$this->Client->locale = 'ru';
			}
			if($this->Client->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// debug($data);
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
	}

	public function admin_edit($id){
		
		if(is_null($id) || !(int)$id || !$this->Client->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->Client->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Client->id = $id;
			// $this->Client->locale = Configure::read('Config.languages');
			// debug($this->Client->locale);
			// debug($this->request->data);
			$data1 = $this->request->data['Client'];
			if(!$data1['img']['name']){
				unset($data1['img']);
			}

			if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
				$this->Client->locale = 'kz';
			}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
				$this->Client->locale = 'en';
			}else{
				$this->Client->locale = 'ru';
			}
			// $this->Client->locale = 'kz';
			// debug($data1);
			$data1['id'] = $id;
			if($this->Client->save($data1)){
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
			$this->Client->locale = $this->request->query['lang'];
			$data = $this->request->data = $this->Client->read(null, $id);
		}
			$this->set(compact('id', 'data'));


	}

	public function admin_delete($id){
		if (!$this->Client->exists($id)) {
			throw new NotFounddException('Такой статьи нет');
		}
		if($this->Client->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

}