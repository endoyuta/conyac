<?php
App::uses('Controller', 'Controller');

class AppController extends Controller {
	public $uses = array('Setting');
	public $components = array(
		'Session',
	);

	public function beforeRender(){
		//設定情報のセット
		$setting = $this->Setting->findById(1);
		$this->set(compact('setting'));
	}
}