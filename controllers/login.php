<?php

class Login extends Controller {

	function __construct() {
		parent::__construct();	
	}
	
	function index() {
		
		Session::init();
		Session::destroy();
		
		
		$this->view->title = 'Login';
		
		$this->view->render('header');
		$this->view->render('login/index');
		$this->view->render('footer');
	}
	
	
	function run() {
		$this->model->run();
	}
	
}

