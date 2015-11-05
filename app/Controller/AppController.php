<?php

class AppController extends Controller {
	public $components = array(
		'Session',
		'Auth' => array(
			'loginRedirect'=>array('controller'=>'users', 'action'=>'index'),
			'loginRedirect'=>array('controller'=>'users','action'=>'index'),
			'authError'=>"You can't access that page",
			'authorize'=>array('Controller')
		)
	);

	// determines what logined users have access to
	public function isAuthorized($user){
		return true;
	}

	// whenever someone tries to access these actions, 
	// right before Filter Callback is called beforehand,
	// this allows us to do any pre-configuration or send values to the view, etc..
	public function beforeFilter() {
		// This is for non-login actions
		$this->Auth->allow('index', 'view');
	}
}
