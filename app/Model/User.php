<?php
class User extends AppModel {
	public $name = 'User';
	public $displayField = 'name';
	
	public $validate = array(
		'name'=>array(
			'Please enter your name.'=>array(
				'rule'=>'notEmpty',
				'message'=>'Please enter your name.'
			)
		),
		'username'=>array(
			'The username must be between 5 and 15 characters.'=>array(
				'rule'=>array('between', 5, 15),
				'message'=>'The username must be between 5 and 15 characters.'
			),
			'That username has already been taken'=>array(
				'rule'=>'isUnique',
				'message'=>'That username has already been taken.'
			)
		),
		'email'=>array(
			'Valid email'=>array(
				'rule'=>array('email'),
				'message'=>'Please enter a valid email address'
			)
		),
		'password'=>array(
			'Not empty'=>array(
				'rule'=>'notEmpty',
				'message'=>'Please enter your password'
			)
		),
		'password_confirmation'=>array(
			'Not empty'=>array(
				'rule'=>'notEmpty',
				'message'=>'Please confirm your password'
			)
		)
	);
}
?>
