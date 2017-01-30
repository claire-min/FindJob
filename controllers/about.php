<?php

class About extends Controller {

	function __construct() {
		parent::__construct();
	}
	
	function index() {
		$this->view->title = 'About';
		
		$this->view->render('header');
		$this->view->render('about/index');
		$this->view->render('footer');
	}

}