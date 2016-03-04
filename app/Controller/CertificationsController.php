<?php

class CertificationsController extends AppController{

	public function beforeFilter(){
		parent::beforeFilter();
	}

	public function index(){
		// $this->Certification->locale = false;
		$this->Certification->locale = Configure::read('Config.language');
		$data = $this->Certification->find('all');
		$title_for_layout = __('Лицензии и Сертификаты');
		$this->set(compact('data', 'title_for_layout'));
	}

	public function admin_index(){
		$this->Certification->locale = 'ru';
		
		$data = $this->Certification->find('all');
		// debug($data);
		$this->set(compact('data'));
	}

	public function admin_add(){
		if($this->request->is('post')){
			$this->Certification->create();
			$data = $this->request->data['Certification'];
			// debug($this->request->data);
			// debug($data);
			 if(!$data['img']['name']){
			 	unset($data['img']);
			}
			
			// $this->Certification->locale = 'ru';

			if($this->Certification->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// debug($data);
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
	}

	public function admin_edit($id){
		
		if(is_null($id) || !(int)$id || !$this->Certification->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->Certification->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Certification->id = $id;
			// $this->Certification->locale = Configure::read('Config.languages');
			// debug($this->Certification->locale);
			// debug($this->request->data);
			$data1 = $this->request->data['Certification'];
			if(!$data1['img']['name']){
				unset($data1['img']);
			}

			if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
				$this->Certification->locale = 'kz';
			}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
				$this->Certification->locale = 'en';
			}else{
				$this->Certification->locale = 'ru';
			}
			// $this->Certification->locale = 'kz';
			// debug($data1);
			$data1['id'] = $id;
			if($this->Certification->save($data1)){
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
			$this->Certification->locale = $this->request->query['lang'];
			$data = $this->request->data = $this->Certification->read(null, $id);
		}
			$this->set(compact('id', 'data'));


	}


	public function admin_delete($id){
		if (!$this->Certification->exists($id)) {
			throw new NotFounddException('Такой статьи нет');
		}
		if($this->Certification->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

}