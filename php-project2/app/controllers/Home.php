<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\HomeModel;

class Home extends Controller {
	public function index() {
		$model = new HomeModel;
		$data = $model->getPost();
		$this->view('home/index', ['data' => $data]);
	}
}
