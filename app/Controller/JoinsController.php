<?php 

App::uses('CakeEmail', 'Network/Email');

class JoinsController extends AppController{

	public function index(){
		$title_for_layout = __('Прием в партию');
		$this->set(compact('title_for_layout'));
	}

	public function request(){
		$title_for_layout = __('Общественная приемная');
		$this->set(compact('title_for_layout'));

		if( !empty($this->request->data) ){
			$email = new CakeEmail('smtp');
			$email->from(array('info@auyl.kz' => 'Ауыл Партиясы - auyl.kz'))
			->to('info@auyl.kz')
			->subject('Новые письмо с сайта');
			$message = 'ФИО: '. $this->request->data['Join']['fio'] . ' Телефон: '. $this->request->data['Join']['phone'] . ' Почта: ' . $this->request->data['Join']['email'] . ' Текст: ' . $this->request->data['Join']['body'];
			if( $email->send($message) ){
				$this->Session->setFlash('Письмо успешно отправлено', 'default', array(), 'good');
				//unset($message);
				// return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка!', 'default', array(), 'bad');
				return $this->redirect($this->referer());
			}
		}
	}

	public function send(){
		// var_dump($this->request->data);
		if( !empty($this->request->data) ){
			$email = new CakeEmail('smtp');
			$email->from(array('info@auyl.kz' => 'Ауыл Партиясы - auyl.kz'))
			->to('info@auyl.kz')
			->subject('Новая заявка с сайта');
			$message = 'ФИО: '. $this->request->data['Join']['fio'] . ' Телефон: '. $this->request->data['Join']['phone'] . ' Почта: ' . $this->request->data['Join']['email'] . ' Текст: ' . $this->request->data['Join']['body'];
			if( $email->send($message) ){
				$this->Session->setFlash('Письмо успешно отправлено', 'default', array(), 'good');
				//unset($message);
				// return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка!', 'default', array(), 'bad');
				return $this->redirect($this->referer());
			}
		}
	}
	public function test(){
		$this->autoRender = false;
		// debug('test');
		App::import('Vendor' ,'test');

		$mailSMTP = new SendMailSmtpClass('info@auyl.kz', 'Kazakhstan123', 'ssl://mail.auyl.kz', 'auyl.kz', 465);
// создаем экземпляр класса

// $mailSMTP = new SendMailSmtpClass('логин', 'пароль', 'хост', 'имя отправителя');
 
// заголовок письма
$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
$headers .= "From: auyl.kz <info@auyl.kz>\r\n"; // от кого письмо
$result =  $mailSMTP->send('orb.effect@mail.ru', 'Тема письма', 'Текст письма', $headers); // отправляем письмо
// $result =  $mailSMTP->send('Кому письмо', 'Тема письма', 'Текст письма', 'Заголовки письма');
if($result === true){
    echo "Письмо успешно отправлено";
}else{
    echo "Письмо не отправлено. Ошибка: " . $result;
}
	}
}