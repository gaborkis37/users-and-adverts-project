<?php
class homeController extends Controller{
	
	public function index($id='',$name='') {
		$this->view('home\index',[
			'name' => $name,
			'id' => $id
		]);
		$this->view->page_title = 'Home page';
		$this->view->render();
	}
	
	public function users() {
		$this->view('home\users');
		$this->view->page_title = 'Users page';
		$this->view->render();
	}
	
	public function adverts() {
		$this->view('home\adverts');
		$this->view->page_title = 'Adverts page';
		$this->view->render();
	}
}