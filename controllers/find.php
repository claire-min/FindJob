<?php

class Find extends Controller {

	function __construct() {
		parent::__construct();
	}
	
	function index() {
        
        $this->view->title = 'Find Jobs';
		$this->view->listAll = $this->model->listAll();
		
		$this->view->render('header');
		$this->view->render('find/index');
		$this->view->render('footer');
        
	}

	function find() {
		
		$this->view->title = 'Find Jobs';
		$this->view->find = $this->model->find();
		
		$this->view->render('header');
		$this->view->render('find/find');
		$this->view->render('footer');
	}


}