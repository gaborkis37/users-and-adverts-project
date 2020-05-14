<?php

class userController extends Controller {
	
	public function user() {
		$this->model('user');
		$this->view('user\user', ['users' => $this->model->getUsers()]);
		$this->view->page_title = 'Users page';
		$this->view->render();
	}
	
}