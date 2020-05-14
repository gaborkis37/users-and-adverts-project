<?php

class advertController extends Controller {
	
	public function advert() {
		$this->model('advert');
		$this->view('advert\advert', ['adverts' => $this->model->getAdverts(),'users' => $this->model->getUsers()]);
		$this->view->page_title = 'Adverts page';
		$this->view->render();
	}
	
}