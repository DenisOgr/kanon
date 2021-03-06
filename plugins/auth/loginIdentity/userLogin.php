<?php
class userLogin extends model{
	protected $_properties = array(
		'login' => array(
			'class' => 'stringProperty',
			'field' => 'login',
			'primaryKey' => true,
		),
		'userId' => array(
				'class' => 'idProperty',
				'field' => 'user_id',
				'foreignKey' => array(
					'registeredUser' => 'id', 
				),
		),
	);
	protected $_actAs = array(
	'timestampable'
	);
}