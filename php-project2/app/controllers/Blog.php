<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\Post;

class Blog extends Controller {
	function postDetail($id) {
		echo "BlogController";
		$postModel = new Post();
		$post = $postModel->getPostById($id);

		if ($post) {
			echo json_encode($post);
		} else {
			echo json_encode(['error' => 'Bài Viết Không Tồn Tại']);
		}
	}
}?>