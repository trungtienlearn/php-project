<?php
namespace App\Controllers;
use App\Core\Controller;
use App\Models\Post;

class EditPost extends Controller {

	public function index($id) {
		$model = new Post;
		if (isset($id)) {
			$data = $model->getPostById($id);
		} else {
			$data = [];
		}
		if (isset($id) && $_SERVER['REQUEST_METHOD'] == 'POST') {
			$title = $_POST['title'];
			$content = $_POST['content'];
			$alert = $model->updatePost($id, $title, $content);
		}
		if (isset($alert)) {
			$alert = $alert;
		} else {
			$alert = "";
		}
		$this->view("post/editpost", ["data" => $data, "alert" => $alert]);
	}

}