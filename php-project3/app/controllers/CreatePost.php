<?php
namespace App\Controllers;
use App\Core\Controller;
use App\Models\Post;

class CreatePost extends Controller {

	public function index() {
		$this->view("post/createpost", ["data" => ""]);
		$model = new Post;
		$model->createPost();
	}

}