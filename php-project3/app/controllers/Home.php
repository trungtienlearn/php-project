<?php
namespace App\Controllers;
use App\Core\Controller;
use App\Models\Post;

class Home extends Controller {
	public function index() {
		$model = new Post;
		$data = $model->getAllPost();
		$this->view("home/home", ["data" => $data]);
	}

	public function delete($id) {
		$model = new Post;
		$model->deletePost($id);
		// Sau khi xóa, chuyển hướng về trang index
		header("Location: /");
	}
}
