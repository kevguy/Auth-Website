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

	public function isAuthorized($user){
		return true;
	}
}
