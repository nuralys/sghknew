<?php

class LeadershipsController extends AppController{

	public $uses = array('Leadership', 'News');
	public function beforeFilter(){
		parent::beforeFilter();
	}

	public function index(){
		$this->Leadership->locale = Configure::read('Config.language');
		
		$data = $this->Leadership->find('all');
		$title_for_layout = 'Руководство';
		$this->set(compact('data', 'title_for_layout'));
	}

	public function admin_index(){
		$this->Leadership->locale = 'ru';
		$this->Leadership->bindTranslation(array(
			'title' => 'titleTranslation',
			'body' => 'bodyTranslation',
			'position' => 'positionTranslation',
			'keywords' => 'keywordsTranslation',
			'description' => 'descriptionTranslation'

		));
		$data = $this->Leadership->find('all');
		$this->set(compact('data'));
	}

	public function admin_add(){
		if($this->request->is('post')){
			$this->Leadership->create();
			$data = $this->request->data['Leadership'];

			 if(!$data['img']['name']){
			 	unset($data['img']);
			}
			if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
				$this->Leadership->locale = 'kz';
			}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
				$this->Leadership->locale = 'en';
			}else{
				$this->Leadership->locale = 'ru';
			}
			// $this->Leadership->locale = 'ru';

			if($this->Leadership->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// debug($data);
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
	}

	public function admin_edit($id){
		
		if(is_null($id) || !(int)$id || !$this->Leadership->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->Leadership->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Leadership->id = $id;
			// $this->Leadership->locale = Configure::read('Config.languages');
			// debug($this->Leadership->locale);
			// debug($this->request->data);
			$data1 = $this->request->data['Leadership'];
			if(isset($data1['img']['name']) && !$data1['img']['name']){
				unset($data1['img']);
			}

			if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'kz'){
				$this->Leadership->locale = 'kz';
			}elseif(isset($this->request->query['lang']) && $this->request->query['lang'] == 'en'){
				$this->Leadership->locale = 'en';
			}else{
				$this->Leadership->locale = 'ru';
			}
			// $this->Leadership->locale = 'kz';
			// debug($data1);
			$data1['id'] = $id;
			if($this->Leadership->save($data1)){
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
			$this->Leadership->locale = $this->request->query['lang'];
			$data = $this->request->data = $this->Leadership->read(null, $id);
		}
			$this->set(compact('id', 'data'));


	}

	public function admin_delete($id){
		if (!$this->Leadership->exists($id)) {
			throw new NotFounddException('Такой статьи нет');
		}
		if($this->Leadership->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

	public function view($id){
		if(is_null($id) || !(int)$id || !$this->Leadership->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$this->Leadership->locale = Configure::read('Config.language');
		$this->Leadership->bindTranslation(array('title' => 'titleTranslation', 'body' => 'bodyTranslation'));
		$data = $this->Leadership->findById($id);
		$this->News->locale = Configure::read('Config.language');
		$news = $this->News->find('all', array(
			'order' => array('date' => 'desc'),
			'limit' => 5
		));
		$title_for_layout = $data['Leadership']['title'];
		$meta['keywords'] = $data['Leadership']['keywords'];
		$meta['description'] = $data['Leadership']['description'];
		$this->set(compact('data','title_for_layout' , 'meta', 'news'));
	}

}