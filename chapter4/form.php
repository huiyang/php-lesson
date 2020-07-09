<?php

class Form {
	protected $post;
	
	const PARAM_NAME = 'name';
	
	public function __construct($post) {
		$this->post = $post;
	}
	
	public function hasName() {
		return isset($this->post[static::PARAM_NAME]);
	}
	
	public function getName() {
		return $this->post[static::PARAM_NAME];
	}
}